<?php

namespace App\Controllers;
use App\Models\masyarakat;

class form_masy extends BaseController
{
    public function reg()
    {
        $users = new masyarakat();

        $users->insert([
            'nik' => $this->request->getVar('nik'),
            'nama' => $this->request->getVar('nama'),
            'username' => $this->request->getVar('username'),
            'password' => md5($this->request->getVar('password')),
            'telp' => $this->request->getVar('nope')            
        ]);
        echo "<script>alert('Data berhasil didaftarkan, silahkan login untuk melanjutkan!');</script>";
        return view('/utama/masuk');
    }


        public function log()
    {
        $users = new masyarakat();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $dataUser = $users->where([
            'username' => $username,
        ])->first();
        if ($dataUser) {
                if (md5($password) == $dataUser['password']) {
                session()->set([
                    'username' => $dataUser['username'],
                    'nama' => $dataUser['nama'],
                    'logged_in' => TRUE
                ]);
                
                return redirect()->to(base_url('home'));
            } else {
                echo "<script>alert('Password Salah!');</script>";
                return view('/utama/masuk');
            }
        } else {
            echo "<script>alert('Username Salah!');</script>";
            return view('/utama/masuk');
        }
    }
    
        public function out(){
            session()->set([
                    'logged_in' => FALSE
                ]);
                return redirect()->to(base_url('/'));
        }

}
