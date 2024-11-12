<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\StatusvmModel;

class Verifikasim extends BaseController
{
    protected $statusvmModel;

    public function __construct()
    {
        $this->statusvmModel = new StatusvmModel();
    }

    public function edit($id)
    {
        // Mengambil data mitra berdasarkan ID
        $statusvm = $this->statusvmModel->find($id);

        // Kirim data ke view
        $data = [
            'title' => 'Verifikasi Mitra',
            'mitra' => $statusvm
        ];

        return view('pages/admin/verifikasim', $data);
    }

    public function update()
    {
        // Mendapatkan ID mitra
        $id = $this->request->getPost('id_mitra');

        // Mengambil status verifikasi dari form
        $status = $this->request->getPost('status_verifikasi');

         // Periksa apakah ID dan status tidak kosong
        if ($id && $status) {
        // Update status verifikasi di database
        $this->statusvmModel->update($id, [
            'status_verifikasi' => $status
        ]);

        // Redirect ke halaman status verifikasi mitra
        return redirect()->to('/pages/admin/statusvm')->with('message', 'Status verifikasi berhasil diupdate.');
        } else {
        // Jika ID atau status tidak ada, tampilkan error
        return redirect()->back()->with('error', 'Tidak ada data untuk diupdate.');
        }
    }    

}
