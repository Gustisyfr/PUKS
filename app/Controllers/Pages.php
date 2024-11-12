<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Pengajuan Ususlan Kerja Sama'
        ];
        return view ('pages/home', $data);
    }

}
