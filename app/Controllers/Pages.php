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
            'title' => 'Contact | Bondan Web',
            'contact' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jalan Manuk',
                    'kota' => 'Wonogiri'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jalan Betutu',
                    'kota' => 'Wonogiri'
                ],
            ]
        ];
        echo view('pages/contact', $data);
    }
}
