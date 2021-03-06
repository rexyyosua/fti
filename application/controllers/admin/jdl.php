<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jdl extends CI_Controller {
	public function __construct(){
		parent::__construct();
		
		if ($this->session->userdata('group') !='1'){
			$this->session->set_flashdata('error','Sorry you are not logged in !');
			redirect('login');
		}
		//load model -> model_admin_jdl
		$this->load->model('model_admin_jdl');
	}

	public function index()
		
	{
		$data['wis'] =$this->model_admin_jdl->all();
		$this->load->view('backend/view_all_jdl',$data);
	}
	
	public function create(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Nama tempat wisata', 'required');
		$this->form_validation->set_rules('description', 'Deskripsi', 'required');
		
		
		//$this->form_validation->set_rules('userfile', 'Product Image', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('backend/form_tambah_jdl');
		}else{
			
			$config['upload_path'] = './gambar/';
			$config['allowed_types'] = 'jpg|png';
			$config['max_size']	= '20000';
			$config['max_width']  = '2000';
			$config['max_height']  = '2000';

			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload())
			{
				$this->load->view('backend/form_tambah_jdl');
			}else{
				$gambar = $this->upload->data();
				$data_jadwal = array(
				'judul'		=> set_value('name'),
				'deskripsi'	=> set_value('description'),
				'tgl'		=> date('Y-m-d H:i:s'),
				'gambar'	=> $gambar['file_name']
			);
			$this->model_admin_jdl->create($data_jadwal);
			redirect('admin/jdl');
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
			$data['product'] = $this->model_admin_jdl->find($id);
			$this->load->view('backend/form_edit_jdl', $data);
		}else{
			if($_FILES['userfile']['name'] !=''){
				$config['upload_path'] = './gambar/';
				$config['allowed_types'] = 'jpg|png';
				$config['max_size']	= '2000000';
				$config['max_width']  = '2000';
				$config['max_height']  = '2000';

				$this->load->library('upload', $config);
			
				if ( ! $this->upload->do_upload())
				{
					$data['ada'] = $this->model_admin_jdl->find($id);
					$this->load->view('backend/form_edit_jdl', $data);
				}else{
					$gambar = $this->upload->data();
					$data_jadwal = array(
						'judul'		=> set_value('name'),
						'deskripsi'	=> set_value('description'),
						'gambar'	=> $gambar['file_name']
					);
					$this->model_admin_jdl->update($id,$data_jadwal);
					redirect('admin/jdl');
				}
			}else{
				$data_product = array(
					'judul'		=> set_value('name'),
					'deskripsi'	=> set_value('description'),
				);
				$this->model_admin_jdl->update($id,$data_jadwal);
				redirect('admin/jdl');
			}
		
		}

	}
	
	public function delete($id){
		$this->model_admin_jdl->delete($id);
		redirect('admin/jdl'); 
	}
}
 