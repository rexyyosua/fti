<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regis extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('model_regis');
	}
	
	public function index()
	{
		$this->load->view('form_regis');
	}
	
	public function create(){
		$this->form_validation->set_rules('username', 'User Name', 'required');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('password1','Re-type password','required|matches[password]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		//$this->form_validation->set_rules('userfile', 'Product Image', 'required');
		
		$group = '2';
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('form_regis');
		}else{
				$data_users = array(
				'username'		=> set_value('username'),
				'nama'			=> set_value('name'),
				'password'		=> set_value('password'),
				'email'			=> set_value('email'),
				'groups'			=> $group
			);
			$this->model_regis->create($data_users);
			redirect('login');
			}
			
			
		}
	}
 