<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_users extends CI_Model {

	public function check_user()
	{
		$username = set_value('username');
		$password = set_value('password');

		$hasil = $this->db->where('username', $username)
						  ->where('password', $password)
						  ->limit(1)
						  ->get('user');
		if($hasil->num_rows()>0){
			return $hasil->row();
		}else{
			return array();
		}
	}
}
