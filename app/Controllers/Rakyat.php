<?php
namespace App\Controllers;

use App\Models\masyarakat;

class Rakyat extends BaseController {

	public function __construct() {

		$db = db_connect();
		$this->masyarakat = new masyarakat($db);
	}

	public function save() {
		$nik	= $this->request->getPost('nik');
        $nama	= $this->request->getPost('nama');
        $nope	= $this->request->getPost('nope');
        $username	= $this->request->getPost('username');
        $password	= password_hash($this->request->getPost('password'), PASSWORD_BCRYPT);

	
		$data = [
			'nik'		=> $nik,
			'nama'		=> $nama,
			'username'	=> $username,
            'password'	=> $password,
            'telp'		=> $nope
		];

		$result = $this->masyarakat->add($data);
		if($result) {
            echo "<script>alert('Data berhasil didaftarkan, silahkan masuk untuk melanjutkan!');</script>";
            return view('/utama/masuk');
		} else {
            echo "<script>alert('Data gagal didaftarkan, silahkan cek data kembali!');</script>";
            return view('/utama/daftar');
        }
	}




}