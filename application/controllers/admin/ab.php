<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ab extends CI_Controller {
	public function __construct(){
		parent::__construct();

		if ($this->session->userdata('group') =='1'){
			$this->session->set_flashdata('error','Sorry you are not logged in !');
			redirect('login');
		}
		//load model -> model_admin_ab
		$this->load->model('model_admin_ab');
	}

	public function index()

	{
		$data['wis'] =$this->model_admin_ab->all();
		$this->load->view('backend/view_all_ab',$data);
	}

	public function create(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Judul Berita', 'required');
		$this->form_validation->set_rules('description', 'Deskripsi', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');


		//$this->form_validation->set_rules('userfile', 'Product Image', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('backend/form_tambah_ab');
		}else{

			$config['upload_path'] = './images/slider';
			$config['allowed_types'] = 'jpg|png';
			$config['max_size']	= '20000';
			$config['max_width']  = '2000';
			$config['max_height']  = '2000';

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload())
			{
				$this->load->view('backend/form_tambah_ab');
			}else{
				$gambar = $this->upload->data();
				$data_berita = array(
				'judul_berita'		=> set_value('name'),
				'status'		=> set_value('status'),
				'deskripsi_berita'	=> set_value('description'),
				'tanggal_berita'	=> date('Y-m-d H:i:s'),
				'gambar_berita'		=> $gambar['file_name']
			);
			$this->model_admin_ab->create($data_berita);
			redirect('admin/ab');
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
			$data['product'] = $this->model_admin_ab->find($id);
			$this->load->view('backend/form_edit_ab', $data);
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
					$data['ada'] = $this->model_admin_ab->find($id);
					$this->load->view('backend/form_edit_ab', $data);
				}else{
					$gambar = $this->upload->data();
					$data_berita = array(
						'judul_berita'		=> set_value('name'),
						'status'	 		=> set_value('status'),
						'deskripsi_berita'	=> set_value('description'),
						'gambar_berita'		=> $gambar['file_name']
					);
					$this->model_admin_ab->update($id,$data_berita);
					redirect('admin/ab');
				}
			}else{
				$data_product = array(
					'judul_berita'		=> set_value('name'),
					'deskripsi_berita'	=> set_value('description'),
				);
				$this->model_admin_ab->update($id,$data_berita);
				redirect('admin/ab');
			}

		}

	}

	public function delete($id){
		$this->model_admin_ab->delete($id);
		redirect('admin/ab');
	}
}
