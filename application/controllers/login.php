<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->form_validation->set_rules('username','Username','required|alpha_numeric');
		$this->form_validation->set_rules('password','Password','required|alpha_numeric');


		if($this->form_validation->run() == FALSE)
		{
		$this->load->view('form_login');
		}else{
			$this->load->model('model_users');
			$valid_user = $this->model_users->check_user();

			if($valid_user == FALSE)
			{
				$this->session->set_flashdata('error','Wrong Username / Password ! ');
				redirect('login');
			}else{
				$this->session->set_userdata('username',$valid_user->username);
				$this->session->set_userdata('group',$valid_user->group);

				switch($valid_user->group){
					case 1	: 	redirect('admin/ab');
								break;
					case 2	:	redirect(base_url());
								break;
					default	:	break;
				}
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}

}
