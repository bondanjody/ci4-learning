<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        return view('pages/home');
    }
    public function contact()
    {
        echo view('layout/header');
        echo view('pages/contact');
        echo view('layout/footer');
    }
}
