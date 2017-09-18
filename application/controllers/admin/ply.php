<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ply extends CI_Controller {
	public function __construct(){
		parent::__construct();
		
		if ($this->session->userdata('group') !='1'){
			$this->session->set_flashdata('error','Sorry you are not logged in !');
			redirect('login');
		}
		//load model -> model_admin_ply
		$this->load->model('model_admin_ply');
	}

	public function index()
		
	{
		$data['wis'] =$this->model_admin_ply->all();
		$this->load->view('backend/view_all_ply',$data);
	}
	
	public function create(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Nama tempat wisata', 'required');
		$this->form_validation->set_rules('description', 'Deskripsi', 'required');
		
		
		//$this->form_validation->set_rules('userfile', 'Product Image', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('backend/form_tambah_ply');
		}else{
			
			$config['upload_path'] = './images/team/';
			$config['allowed_types'] = 'jpg|png';
			$config['max_size']	= '20000';
			$config['max_width']  = '2000';
			$config['max_height']  = '2000';

			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload())
			{
				$this->load->view('backend/form_tambah_ply');
			}else{
				$gambar = $this->upload->data();
				$data_pemain = array(
				'judul'		=> set_value('name'),
				'deskripsi'	=> set_value('description'),
				'ppg'	=> set_value('ppg'),
				'apg'	=> set_value('apg'),
				'rpg'	=> set_value('rpg'),
				'bpg'	=> set_value('bpg'),
				'spg'	=> set_value('spg'),
				'gambar'	=> $gambar['file_name']
			);
			$this->model_admin_ply->create($data_pemain);
			redirect('admin/ply');
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
			$data['product'] = $this->model_admin_ply->find($id);
			$this->load->view('backend/form_edit_ply', $data);
		}else{
			if($_FILES['userfile']['name'] !=''){
				$config['upload_path'] = './images/team/';
				$config['allowed_types'] = 'jpg|png';
				$config['max_size']	= '2000000';
				$config['max_width']  = '2000';
				$config['max_height']  = '2000';

				$this->load->library('upload', $config);
			
				if ( ! $this->upload->do_upload())
				{
					$data['ada'] = $this->model_admin_ply->find($id);
					$this->load->view('backend/form_edit_ply', $data);
				}else{
					$gambar = $this->upload->data();
					$data_pemain = array(
						'judul'		=> set_value('name'),
						'deskripsi'	=> set_value('description'),
						'ppg'		=> set_value('ppg'),
						'apg'		=> set_value('apg'),
						'rpg'		=> set_value('rpg'),
						'bpg'		=> set_value('bpg'),
						'spg'		=> set_value('spg'),
						'gambar'	=> $gambar['file_name']
					);
					$this->model_admin_ply->update($id,$data_pemain);
					redirect('admin/ply');
				}
			}else{
				$data_product = array(
					'judul'		=> set_value('name'),
					'deskripsi'	=> set_value('description'),
					'ppg'	=> set_value('ppg'),
					'apg'	=> set_value('apg'),
					'rpg'	=> set_value('rpg'),
					'bpg'	=> set_value('bpg'),
					'spg'	=> set_value('spg')					
					);
				$this->model_admin_ply->update($id,$data_pemain);
				redirect('admin/ply');
			}
		
		}

	}
	
	public function delete($id){
		$this->model_admin_ply->delete($id);
		redirect('admin/ply'); 
	}
}
 