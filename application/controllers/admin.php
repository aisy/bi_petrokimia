<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('admin_m');
	}


	public function index()
	{

		$data['title'] = "Admin";
		$data['page']	 = "Admin_v";
		$data['view']  = "Admin";
		$data['open']  = 'class= "accordion-toggle menu-open"';
		$data['active'] = 'class="active"';

		$data['data'] = $this->admin_m->tampilData();
		$data['url_hapus'] = base_url('admin/hapus');

		$this->load->view('home_v',$data);
	}

	function simpan(){

		$this->admin_m->simpan();

		// $this->session->set_flashdata('simpan','1');
		// redirect(base_url('admin'));
		echo '1';
	}

// json_encode digunakan untuk pemanggilan data dari php dipanggil di ajax atau java script
	function tampilDatabyId(){
		$id_admin=$this->input->post('id_admin');
		$data=$this->admin_m->tampilDatabyId($id_admin);
		echo json_encode($data);
	}

	function ubah($id){

		if (!empty($password)){
			$this->admin_m->ubahDenganPassword($id);
		}else{
			$this->admin_m->ubahTanpaPassword($id);
		}
		echo '1';

	}

	function hapus($id){

		$this->admin_m->hapus($id_admin);

		$this->session->set_flashdata('hapus','1');
		redirect('admin');
	}

}
