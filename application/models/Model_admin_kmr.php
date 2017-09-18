<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_admin_kmr extends CI_Model {
		
		public function all(){
			$hasil =$this->db->where('id_user',$this->get_logged_user_id())
							 ->get('kamar');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
		}
		public function find ($id){
			$hasil = $this->db->where('id',$id)
							  ->limit(1)
							  ->get('kamar');
			if($hasil->num_rows() > 0){
				return $hasil->row();
			}else{
				return array();
			}
		}
		public function find_id_berita ($id){
			$hasil = $this->db->where('id_berita',$id)
							  ->limit(1)
							  ->get('berita');
			if($hasil->num_rows() > 0){
				return $hasil->row();
			}else{
				return array();
			}
		}
		
		public function create($data_berita){
			$this->db->insert('kamar',$data_berita);
		}
		
		public function update($id, $data_berita){
			$this->db->where('id',$id)
					 ->update('kamar',$data_berita);
		}
		
		public function delete($id){
			$this->db->where('id',$id)
					 ->delete('kamar'); 
		}
		
		public function details($id){
			$hasil =$this->db->where('id',$id)
						 ->limit(1)
						 ->get('kamar');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
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