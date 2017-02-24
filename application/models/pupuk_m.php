<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pupuk_m extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function simpan($nama_admin,$username,$password,$tgl_daftar){
		$sql="
		insert into admin(
			nama_admin,
			username,
			password,
			tgl_daftar
		) values(
			'$nama_admin',
			'$username',
			'$password',
			'$tgl_daftar'
		)
		";
		$this->db->query($sql);
	}

	function tampilData(){
		$sql="
		select * from admin
		";
		$query=$this->db->query($sql);
		return $query->result();
	}

// result digunakan untuk menampilkan data lebih dari satu makanya pakai perulangan foreach 
// row digunakan untuk hanya menampilkan satu baris data

	function tampilDatabyId($id_admin){
		$sql="
		select * from admin where id_admin='$id_admin'
		";
		$query=$this->db->query($sql);
		return $query->row();
	}
	
	function ubahDenganPassword($id_admin,$nama_admin,$username,$password){
		$sql="
		update admin set 
		nama_admin='$nama_admin',
		username='$username',
		password='$password'
		where id_admin = '$id_admin'
		";
		$this->db->query($sql);
	}


	function ubahTanpaPassword($id_admin,$nama_admin,$username){
		$sql="
		update admin set 
		nama_admin='$nama_admin',
		username='$username'
		where id_admin = '$id_admin'
		";
		$this->db->query($sql);
	}


	function hapus($id_admin){
		$sql="
		delete from admin where id_admin='$id_admin'
		";
		$this->db->query($sql);
	}
}
