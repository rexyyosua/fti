<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_regis extends CI_Model {
		
		
		public function create($data_users){
			$this->db->insert('user',$data_users);
		}
		
}