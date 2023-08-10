<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Home extends Controller
{


    public function index()
    {
        return view('Inicio.php');
    }
    public function aboutUs()
    {
        return view('nosotros');
    }


}