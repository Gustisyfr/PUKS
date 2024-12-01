<?php

namespace App\Controllers;

// use App\Models\HomeModel;

class Home extends BaseController
{
    // protected $homeModel;

    // public function __construct()
    // {
    //     $this->homeModel = new HomeModel();
    // }

    public function index()
    {
        $data = [
            'title' => 'Home | Pengajuan Ususlan Kerja Sama'
            // 'kegiatan' => $this->homeModel->gethomeModel()
        ];
        return view ('pages/home', $data);
    }

}
