<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_m extends CI_Model {

	function simpan(){

		$data = array(
		'nama_admin'	=> $this->input->post('nama'),
		'username'		=> $this->input->post('username'),
		'password'		=> md5($this->input->post('password')),
		'tgl_daftar'	=> $this->input->post('tgl_daftar') );

		$this->db->insert('admin', $data);

	}

	function tampilData(){
		$data = $this->db->get('admin');
		return $data->result();
	}

// result digunakan untuk menampilkan data lebih dari satu makanya pakai perulangan foreach
// first row digunakan untuk hanya menampilkan satu baris data

	function tampilDatabyId($id_admin){
		$data = $this->db->get_where('admin', array('id_admin' => $id_admin ));
		return $data->first_row();
	}

	function ubahDenganPassword($id_admin){
		$data = array(
		'nama_admin'	=> $this->input->post('nama'),
		'username'		=> $this->input->post('username'),
		'password'		=> md5($this->input->post('password')),
		'tgl_daftar'	=> $this->input->post('tgl_daftar') );

		$this->db->update('admin', $data);

	}

	function ubahTanpaPassword($id_admin){
		$data = array(
		'nama_admin'	=> $this->input->post('nama'),
		'username'		=> $this->input->post('username'),
		'tgl_daftar'	=> $this->input->post('tgl_daftar') );

		$this->db->update('admin', $data);
	}


	function hapus($id_admin){
		$this->db->where('id_admin', $id_admin);
		$this->db->delete('admin');
	}

	public function login()
	{
		$array = array(
			'username' 	=> $this->input->post('username'),
			'password '	=> md5($this->input->post('password')));

		$data = $this->db->get_where('admin',  $array);
		return $data->first_row();
	}

}
