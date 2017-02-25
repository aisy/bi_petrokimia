<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pupuk_m extends CI_Model {

	function simpan(){

		$data = array(
		'nama_pupuk'			=> $this->input->post('nama'),
		'spesifikasi_pupuk'		=> $this->input->post('spesifikasi_pupuk'),
		'sifat_pupuk'			=> $this->input->post('sifat_pupuk'),
		'gambar'				=> $this->input->post('gambar') );

		$this->db->insert('pupuk', $data);

	}

	function tampilData(){
		$data = $this->db->get('pupuk');
		return $data->result();
	}

// result digunakan untuk menampilkan data lebih dari satu makanya pakai perulangan foreach
// first row digunakan untuk hanya menampilkan satu baris data

	function tampilDatabyId($id_pupuk){
		$data = $this->db->get_where('pupuk', array('id_pupuk' => $id_pupuk ));
		return $data->first_row();
	}

	function ubahDenganPassword($id_pupuk){
		$data = array(
		'nama_pupuk'	=> $this->input->post('nama'),
		'spesifikasi_pupuk'		=> $this->input->post('username'),
		'sifat_pupuk'		=> md5($this->input->post('password')),
		'gambar'	=> $this->input->post('tgl_daftar') );

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
