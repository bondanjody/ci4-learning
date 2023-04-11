<?php

namespace App\Controllers;

class Comics extends BaseController
{
    public function index()
    {
        $data = [
            'title'=>'Daftar Komik'
        ];
        return view('komik/index', $data);
    }
}

?>