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
        echo view('pages/home', $data);
    }
    public function contact()
    {
        $data = [
            'title' => 'Contact | Bondan Web'
        ];
        echo view('pages/contact', $data);
    }
}
