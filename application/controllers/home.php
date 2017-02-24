<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$session_data=$this->session->userdata('masuk');
		$id_admin=$session_data['id_admin'];
		if($id_admin==''){
			redirect(base_url());
		}
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data=array(
			'title'=>'Home',
			'page'=>'dashboard_v',
			'view'=>'home',
			'open'=>'class="accordion-toggle menu-open"',
			'active'=>'class="active"'
		);
		$this->load->view('home_v',$data);
		
	}
}
