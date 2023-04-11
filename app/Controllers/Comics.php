<?php

namespace App\Controllers;

use \App\Models\KomikModel;

class Comics extends BaseController
{
    public function index()
    {
        $komikModel = new KomikModel();

        $data = [
            'title'=>'Daftar Komik'
        ];
        return view('komik/index', $data);
    }
}

?>