<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_cek extends CI_Model {
	
	public function process($id_b)
	{
		$komen = $this->input->post('komen');
		$komentar = array(
			'komen'			=> $komen,
			'tanggal'		=> date('Y-m-d H:i:s'),
			'id_user'		=> $this->get_logged_user_id(),
			'nama_user'		=> $this->get_logged_user_name(),
			'berita_id'		=> $id_b
		);
		$this->db->insert('komentar', $komentar);
		$invoice_id = $this->db->insert_id();
		
		foreach($this->cart->contents()as $item){
			$data = array(
				'invoice_id'	=> $invoice_id,
				'product_id'	=> $item['id'],
				'product_name'	=> $item['name'],
				'qty'			=> $item['qty'],
				'price'			=> $item['price']
			);
			$this->db->insert('orders',$data);
		}
		
		return TRUE;
	}
	
	public function all()
	{
		$hasil = $this->db->get('invoices');
		if($hasil->num_rows()>0){
			return $hasil->result();
		}else{
			return false;
		}
	}
	
	public function get_invoice_by_id($invoice_id)
	{
		$hasil = $this->db->where('id',$invoice_id)->limit(1)->get('invoices');
		if($hasil->num_rows() > 0){
			return $hasil->row();
		}else{
			return false;
		}
	}
	
	public function get_orders_by_invoice($invoice_id)
	{
		$hasil = $this->db->where('invoice_id',$invoice_id)->get('orders');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else{
			return false;
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

	
	public function get_logged_user_name()
	{
		$hasil = $this->db
						->select('nama')
						->where('username',$this->session->userdata('username'))
						->limit(1)
						->get('user');
		if($hasil->num_rows()>0){
			return $hasil->row()->nama;
		}else{
			return 0;
		}
	}


	public function get_user_by_id($user_id)
	{
		$hasil = $this->db->where('id',$user_id)
						  ->get('user');
						  
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else{
			return false;
		}
	}
	
}