<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
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
        // Ambil data session
        $session = session();
        $isLoggedIn = $session->get('isLoggedIn');
        $username = $session->get('username');
        $role = $session->get('role');

        // Debugging: Menampilkan isi session untuk memeriksa apakah data session ada
        echo '<pre>';
        var_dump($session->get()); // Menampilkan semua data session
        echo '</pre>';

        if (!$isLoggedIn) {
            return redirect()->to('/login')->with('error', 'Anda harus login terlebih dahulu.');
        }

        $data = [
            'title'    => 'Home | Pengajuan Usulan Kerja Sama',
            'kegiatan' => $this->kegiatanmodel->findAll(),
            'username' => $username, // Menampilkan username di view
            'role'     => $role,     // Menampilkan role di view
        ];

        // Kembalikan view dengan data yang sudah dipersiapkan
        return view('pages/admin/home', $data);
    }
}
