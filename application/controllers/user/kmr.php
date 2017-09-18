<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kmr extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if ($this->session->userdata('group') !='2'){
			$this->session->set_flashdata('error','Sorry you are not logged in !');
			redirect('login');
		}
		
		
		//load model -> model_admin_kmr
		$this->load->model('model_admin_kmr');
	}

	public function index()
		
	{
		$data['wis'] =$this->model_admin_kmr->all();
		$this->load->view('backend/view_all_kmr',$data);
	}
	
	public function create($id){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Kamar', 'required');
		$this->form_validation->set_rules('description', 'Deskripsi', 'required');
		
		
		//$this->form_validation->set_rules('userfile', 'Product Image', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$data['product'] = $this->model_admin_kmr->find_id_berita($id);
			$this->load->view('backend/form_tambah_kmr',$data);
		}else{
			
			$config['upload_path'] = './images/slider';
			$config['allowed_types'] = 'jpg|png';
			$config['max_size']	= '200000000';
			$config['max_width']  = '2000000000';
			$config['max_height']  = '20000000000';

			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload())
			{
				$this->load->view('backend/form_tambah_kmr');
			}else{
				$gambar = $this->upload->data();
				$data_berita = array(
				'kamar'				=> set_value('name'),
				'status'			=> set_value('status'),
				'deskripsi'			=> set_value('description'),
				'tanggal'			=> date('Y-m-d H:i:s'),
				'id_user'			=> $this->get_logged_user_id(),
				'id_berita'			=> $id,
				'gambar'		=> $gambar['file_name']
			);
			$this->model_admin_kmr->create($data_berita);
			redirect('user/kmr');
			}	
		}
	}
	
	public function update($id){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Kamar', 'required');
		$this->form_validation->set_rules('description', 'Deskripsi', 'required');
		
		
		//$this->form_validation->set_rules('userfile', 'Product Image', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$data['product'] = $this->model_admin_kmr->find($id);
			$this->load->view('backend/form_edit_kmr', $data);
		}else{
			if($_FILES['userfile']['name'] !=''){
				$config['upload_path'] = './images/slider';
				$config['allowed_types'] = 'jpg|png';
				$config['max_size']	= '200000000';
				$config['max_width']  = '20000000000';
				$config['max_height']  = '2000000000';

				$this->load->library('upload', $config);
			
				if ( ! $this->upload->do_upload())
				{
					$data['ada'] = $this->model_admin_kmr->find($id);
					$this->load->view('backend/form_edit_kmr', $data);
				}else{
					$gambar = $this->upload->data();
					$data_berita = array(
						'kamar'		=> set_value('name'),
						'status'			=> set_value('status'),
						'deskripsi'	=> set_value('description'),
						'id_user'			=> $this->get_logged_user_id(),
						'id_berita'			=> $id,
						'gambar'		=> $gambar['file_name']
					);
					$this->model_admin_kmr->update($id,$data_berita);
					redirect('user/kmr');
				}
			}else{
				$data_product = array(
					'kamar'		=> set_value('name'),
					'status'			=> set_value('status'),
					'deskripsi'	=> set_value('description'),
					'id_berita'			=> $id,
					'id_user'			=> $this->get_logged_user_id(),
				);
				$this->model_admin_kmr->update($id,$data_berita);
				redirect('user/kmr');
			}
		
		}

	}
	
	public function delete($id){
		$this->model_admin_kmr->delete($id);
		redirect('user/kmr'); 
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