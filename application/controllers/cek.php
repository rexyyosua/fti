<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cek extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('username'))
		{
			redirect('login');
		}
		$this->load->model('model_cek');
	}
	
	public function index()
	{
		
	}
	public function cek_komen($id){
		$is_processed = $this->model_cek->process($id);
		if($is_processed){
			redirect('welcome/detail_berita/'.$id);
		}else{
			
		}
	}
	
}