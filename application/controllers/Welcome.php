<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_fti');
	}

	public function index()
	{
		$query_berita = $this->db->get('berita','6');
		$data['berita'] = $query_berita->result();
		$this->load->view('welcome_message',$data);
	}

	public function detail_berita($id)
	{
		$data['berita'] = $this->model_fti->find_berita($id);
		$this->load->view('berita_detail',$data);
	}

	public function berita()
	{
		$this->load->library('pagination');
		$query = $this->db->get('berita','6',$this->uri->segment(3));
		$data['team'] = $query->result();

		$query2 = $this->db->get('berita');

		$config['base_url'] ='http://localhost/fti/index.php/welcome/berita/';
		$config['total_rows'] = $query2->num_rows();
		$config['per_page'] = 6;

		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] ='</ul>';

		$config['first_tag_open'] = '<li>';
		$config['last_tag_open'] = '<li>';

		$config['next_tag_open'] = '<li>';
		$config['prev_tag_open'] = '<li>';

		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$config['first_tag_close'] = '</li>';
		$config['last_tag_close'] = '</li>';

		$config['next_tag_close'] = '</li>';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = "<li class=\"active\"><span><b>";
		$config['cur_tag_close'] = "</b></span></li>";

		$this->pagination->initialize($config);
		$this->load->view('berita',$data);
	}
	public function profile(){
		$data['profil']=$this->model_fti->all_profil();
		$this->load->view('profile',$data);
	}
	public function profiles_details($id){
		$data['profil']=$this->model_fti->find_profile($id);
		$this->load->view('details_profiles',$data);
	}
	public function pk(){
		$data['pk']=$this->model_fti->all_pk();
		$this->load->view('pk',$data);
	}
	public function pk_details($id){
		$data['dvs'] = $this->model_fti->all_dvs($id);
		$query_kamar = $this->db->where('id_progja',$id)
								->get('divisi','4');
		$data['dvss'] = $query_kamar->result();
		$data['pk']=$this->model_fti->find_pk($id);
		$this->load->view('detail_pk',$data);
	}
	public function details_divisi($id){
		$data['dvs'] = $this->model_fti->find_dvs($id);
		$this->load->view('details_divisi',$data);
	}

}
