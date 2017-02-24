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

	function cek_uspa($db='',$uspa=array()){
		$where='1=1';
		foreach ($uspa as $key => $value) {
			$where=$where." and $key='$value' ";
		}
		$data=$this->db->query("select u.* from $db u where $where");
		return $data;
	}
	function login(){
		$sukses='';
		$data=array(
			'username'=>$this->input->post('username'),
			'password'=>md5($this->input->post('password'))
			);

		$cek=$this->cek_uspa('admin',$data);
		$jumlah=$cek->num_rows();

		if ($jumlah != 0){
			$field=$cek->row();
			$session=array(
				'id_admin'=>$field->id_admin,
				'username'=>$field->username,
				'nama_admin'=>$field->nama_admin,
				);
			$this->session->set_userdata('masuk',$session);
			$session_data=$this->session->userdata('masuk');

			$sukses='1';
		}else{
			$sukses='0';
		}

		echo json_encode($sukses);
	}

	function logout(){
		$session_data=$this->session->userdata('masuk');
		$id_admin=$session_data['id_admin'];
		$last_log=date('d-m-Y');
		$tz_object= new DateTimeZone('Asia/Jakarta');
		$dateTime= new DateTime();
		$format=$dateTime->setTimezone($tz_object);
		$waktu=$format->format('H:i:s');

		$this->db->query("update admin set last_log='$last_log', time_log='$waktu' where id_admin='$id_admin'");

		$this->session->unset_userdata('masuk');
		$this->session->sess_destroy();
		redirect(base_url());
	}
	 
}
