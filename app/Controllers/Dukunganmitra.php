<?php

namespace App\Controllers;

use App\Models\Ses\StatusvdModel;

class DukunganMitra extends BaseController
{
    protected $statusvdModel;

    public function __construct()
    {
        $this->statusvdModel = new StatusvdModel();
    }

    public function index()
    {
        $data = [
            'kawasan_konservasi' => $this->statusvdModel->where('bentuk_dukungan', 'Memperluas Kawasan Konservasi Laut')->findAll(),
            'penangkapan_ikan' => $this->statusvdModel->where('bentuk_dukungan', 'Penangkapan Ikan Terukur Berbasis Kuota')->findAll(),
            'budidaya' => $this->statusvdModel->where('bentuk_dukungan', 'Pengembangan Budidaya Laut, Pesisir, dan Darat Secara Berkelanjutan')->findAll(),
            'pengawasan' => $this->statusvdModel->where('bentuk_dukungan', 'Pengawasan dan Pengendalian Pesisir dan Pulau-Pulau Kecil')->findAll(),
            'pengelolaan_sampah' => $this->statusvdModel->where('bentuk_dukungan', 'Pengelolaan Sampah Plastik di Laut')->findAll(),
        ];

        return view('/home', $data);
    }
}
