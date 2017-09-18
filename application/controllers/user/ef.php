<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ef extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if ($this->session->userdata('group') !='2'){
			$this->session->set_flashdata('error','Sorry you are not logged in !');
			redirect('login');
		}
		
		
		//load model -> model_admin_ef
		$this->load->model('model_admin_ef');
	}

	public function index()
		
	{
		$data['wis'] =$this->model_admin_ef->all();
		$this->load->view('backend/view_all_ef',$data);
	}
	
	
	
	public function update($id){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('no_tlp', 'No Phone', 'required');
		
		
		//$this->form_validation->set_rules('userfile', 'Product Image', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$data['product'] = $this->model_admin_ef->find($id);
			$this->load->view('backend/form_edit_ef', $data);
		}else{
			if($_FILES['userfile']['name'] !=''){
				$config['upload_path'] = './images/slider';
				$config['allowed_types'] = 'jpg|png';
				$config['max_size']	= '2000000';
				$config['max_width']  = '2000';
				$config['max_height']  = '2000';

				$this->load->library('upload', $config);
			
				if ( ! $this->upload->do_upload())
				{
					$data['ada'] = $this->model_admin_ef->find($id);
					$this->load->view('backend/form_edit_ef', $data);
				}else{
					$gambar = $this->upload->data();
					$data_berita = array(
						'nama'		=> set_value('name'),
						'email'		=> set_value('email'),
						'no_tlp'	=> set_value('no_tlp'),
						'foto'		=> $gambar['file_name']
					);
					$this->model_admin_ef->update($id,$data_berita);
					redirect('user/ef');
				}
			}else{
				$data_product = array(
					'nama'		=> set_value('name'),
					'email'		=> set_value('email'),
					'no_tlp'	=> set_value('no_tlp'),
				);
				$this->model_admin_ef->update($id,$data_berita);
				redirect('user/ef');
			}
		
		}

	}
	
	public function delete($id){
		$this->model_admin_ef->delete($id);
		redirect('admin/ef'); 
	}

		public function get_logged_user_id()
	{
		$hasil = $this->db
						->select('id')
						->where('username',$this->session->userdata('username'))
						->limit(1)
						->get('user');
		if($hasil->num_rows()>0){
			return $hasil->row()->id;
		}else{
			return 0;
		}
	}
}
 