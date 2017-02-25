<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pupuk extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('pupuk_m');
	}

	
	public function index()
	{
		$data=array(
			'title'=>'Pupuk',
			'page'=>'pupuk_v',
			'view'=>'pupuk',
			'open'=>'class="accordion-toggle menu-open"',
			'active'=>'class="active"',

			'data'=>$this->pupuk_m->tampilData(),
			'url_hapus'=>base_url().'pupuk/hapus'
		);
		$this->load->view('home_v',$data);	
	}

	function simpan(){
		
		$this->pupuk_m->simpan();
		// $this->session->set_flashdata('simpan','1');
		// redirect('admin');
		echo '1';
	}

// json_encode digunakan untuk pemanggilan data dari php dipanggil di ajax atau java script
	function tampilDatabyId(){
		$id_pupuk=$this->input->post('id_pupuk');
		$data=$this->pupuk_m->tampilDatabyId($id_pupuk);
		echo json_encode($data);
	}

	function ubah(){
		$nama_admin=$this->input->post('nama');
		$username=$this->input->post('username');
		$password= $this->input->post('password');
		$id_ubah=$this->input->post('id_ubah');

		if (!empty($password)){
			$this->admin_m->ubahDenganPassword($id_ubah,$nama_admin,$username,md5($password));
		}else{
			$this->admin_m->ubahTanpaPassword($id_ubah,$nama_admin,$username);
		}
		echo '1';

	}

	function hapus(){
		$id_admin=$this->input->post('id_hapus');
		$this->admin_m->hapus($id_admin);
		$this->session->set_flashdata('hapus','1');
		redirect('admin');
	} 
}
