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
        if(session()->get('logged_in') == TRUE){
            return view('/utama/home.php');        
        }
        else{
            return view('/utama/masuk');
        }
        
    }


    public function daftar()
    {
        if(session()->get('logged_in') == TRUE){
           return view('/utama/home.php');        
        }
        else{
           return view('/utama/daftar');
        }
    }

    
    public function dashboard()
    {
        return view('/utama/home.php');
    }



}
