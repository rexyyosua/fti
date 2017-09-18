<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ab extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if ($this->session->userdata('group') !='2'){
			$this->session->set_flashdata('error','Sorry you are not logged in !');
			redirect('login');
		}
		
		
		//load model -> model_admin_ep
		$this->load->model('model_admin_ep');
	}

	public function index()
		
	{
		$data['wis'] =$this->model_admin_ep->all();
		$this->load->view('backend/view_all_ep',$data);
	}
	
	public function create(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Judul Berita', 'required');
		$this->form_validation->set_rules('description', 'Deskripsi', 'required');
		
		
		//$this->form_validation->set_rules('userfile', 'Product Image', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('backend/form_tambah_ep');
		}else{
			
			$config['upload_path'] = './images/slider';
			$config['allowed_types'] = 'jpg|png';
			$config['max_size']	= '200000000';
			$config['max_width']  = '2000000000';
			$config['max_height']  = '20000000000';

			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload())
			{
				$this->load->view('backend/form_tambah_ep');
			}else{
				$gambar = $this->upload->data();
				$data_berita = array(
				'judul_berita'		=> set_value('name'),
				'status'			=> set_value('status'),
				'deskripsi_berita'	=> set_value('description'),
				'tanggal_berita'	=> date('Y-m-d H:i:s'),
				'id_user'			=> $this->get_logged_user_id(),
				'gambar_berita'		=> $gambar['file_name']
			);
			$this->model_admin_ep->create($data_berita);
			redirect('user/ab');
			}	
		}
	}
	
	public function update($id){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Nama Tempat Wisata', 'required');
		$this->form_validation->set_rules('description', 'Deskripsi', 'required');
		
		
		//$this->form_validation->set_rules('userfile', 'Product Image', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$data['product'] = $this->model_admin_ep->find($id);
			$this->load->view('backend/form_edit_ep', $data);
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
					$data['ada'] = $this->model_admin_ep->find($id);
					$this->load->view('backend/form_edit_ep', $data);
				}else{
					$gambar = $this->upload->data();
					$data_berita = array(
						'judul_berita'		=> set_value('name'),
						'status'			=> set_value('status'),
						'deskripsi_berita'	=> set_value('description'),
						'id_user'			=> $this->get_logged_user_id(),
						'gambar_berita'		=> $gambar['file_name']
					);
					$this->model_admin_ep->update($id,$data_berita);
					redirect('user/ab');
				}
			}else{
				$data_product = array(
					'judul_berita'		=> set_value('name'),
					'status'			=> set_value('status'),
					'deskripsi_berita'	=> set_value('description'),
					'id_user'			=> $this->get_logged_user_id(),
				);
				$this->model_admin_ep->update($id,$data_berita);
				redirect('user/ab');
			}
		
		}

	}
	
	public function delete($id){
		$this->model_admin_ep->delete($id);
		redirect('admin/ep'); 
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
 