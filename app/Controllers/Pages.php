<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Bondan Web',
            'dataArray' => ['Bondan','Jody', 'Setyawan']
        ];
        echo view('layout/header', $data);
        echo view('pages/home', $data);
        echo view('layout/footer');
    }
    public function contact()
    {
        $data = [
            'title' => 'Contact | Bondan Web'
        ];
        echo view('layout/header', $data);
        echo view('pages/contact');
        echo view('layout/footer');
    }
}
