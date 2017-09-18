<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_fti extends CI_Model {

		public function all_berita(){
			$hasil =$this->db->order_by('tanggal_berita','DESC')
							 ->get('berita');

			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
		}
		public function all_profil(){
			$hasil =$this->db->order_by('tanggal','DESC')
							 				 ->get('profil');

			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
		}
		public function find_profile($id){
			$hasil = $this->db->where('id',$id)
							  ->get('profil');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
		}

		public function all_pk(){
			$hasil =$this->db->order_by('tanggal','DESC')
							 				 ->get('progja');

			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
		}
		public function find_pk($id){
			$hasil = $this->db->where('id',$id)
							  ->get('progja');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
		}
		public function find_berita ($b_id){
			$hasil = $this->db->where('id_berita',$b_id)
							  ->get('berita');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
		}
		public function all_dvs($id){
			$hasil =$this->db->where('id_progja',$id)
							 ->order_by('tanggal','DESC')
							 ->get('divisi');

			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
		}
		public function find_dvs($id){
			$hasil = $this->db->where('id',$id)
							  ->get('divisi');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
		}

}
