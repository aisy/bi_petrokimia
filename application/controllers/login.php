<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('admin_m');
	}


	public function index()
	{
		$data=array(
			'title'=>'Login',
			'url_login'=>base_url().'login/login'
		);
		$this->load->view('login_v',$data);
	}

	function login(){
		$sukses='';

		$log = $this->admin_m->login();

		print_r($log);

		if ($log){

			$session=array(
				'id_admin'	=>$log->id_admin,
				'username'	=>$log->username,
				'nama_admin'=>$log->nama_admin
				);

			$this->session->set_userdata('masuk',$session);
			$session_data=$this->session->userdata('masuk');

			// $sukses='1';
			redirect('home');
		}else{
			$sukses='0';
		}

		echo json_encode($sukses);
	}

	function logout(){


		$session_data = $this->session->userdata('masuk');
		$id_admin=$session_data['id_admin'];

		// tanggal untuk mengecek berapa lama dia login dan juga kapan terakhir login
		$last_log=date('d-m-Y');
		$tz_object= new DateTimeZone('Asia/Jakarta');
		$dateTime= new DateTime();
		$format=$dateTime->setTimezone($tz_object);
		$waktu=$format->format('H:i:s');

		// mengubah data saat dia sudah logout
		$this->db->query("update admin set last_log='$last_log', time_log='$waktu' where id_admin='$id_admin'");

		// session destroy
		$this->session->unset_userdata('masuk');
		$this->session->sess_destroy();
		redirect(base_url());
	}

}
