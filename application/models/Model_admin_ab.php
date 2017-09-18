<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_admin_ab extends CI_Model {
		
		public function all(){
			$hasil =$this->db->get('berita');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
		}
		public function find ($id){
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
			$this->db->insert('berita',$data_berita);
		}
		
		public function update($id, $data_berita){
			$this->db->where('id_berita',$id)
					 ->update('berita',$data_berita);
		}
		
		public function delete($id){
			$this->db->where('id_berita',$id)
					 ->delete('berita'); 
		}
		
		public function details($id){
			$hasil =$this->db->where('id_berita',$id)
						 ->limit(1)
						 ->get('berita');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
		}
		
}