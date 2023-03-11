<?php

namespace App\Controllers;


class Home extends BaseController
{
    public function index()
    {
        return view('/utama/index');
    }

        public function masuk()
    {
        return view('/utama/masuk');
    }
        public function daftar()
    {
        return view('/utama/daftar');
    }



}
