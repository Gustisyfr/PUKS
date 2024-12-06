<?php

namespace App\Controllers;

use App\Models\Admin\KegiatanModel;

class Home extends BaseController
{
    protected $kegiatanmodel;

    public function __construct()
    {
        $this->kegiatanmodel = new KegiatanModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Home | Pengajuan Usulan Kerja Sama',
            'kegiatan' => $this->kegiatanmodel->findAll() 
        ];
        return view('/pages/mitra/home', $data);
    }
}
