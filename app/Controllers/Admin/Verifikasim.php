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
        // mengambil data mitra berdasarkan id
        $statusvm = $this->statusvmModel->find($id);

        $data = [
            'title' => 'Verifikasi Mitra',
            'mitra' => $statusvm
        ];

        return view('pages/admin/verifikasim', $data);
    }

    public function update()
    {
        $id = $this->request->getPost('id_mitra');

        $status = $this->request->getPost('status_verifikasi');

        if ($id && $status) {
        $this->statusvmModel->update($id, [
            'status_verifikasi' => $status
        ]);
        return redirect()->to('/pages/admin/statusvm')->with('message', 'Status verifikasi berhasil diupdate.');
        } else {
        return redirect()->back()->with('error', 'Tidak ada data untuk diupdate.');
        }
    }    

}
