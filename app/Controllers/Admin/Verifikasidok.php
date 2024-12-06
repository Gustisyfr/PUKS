<?php 
namespace App\Controllers\Ses;

use App\Controllers\BaseController;
use App\Models\Ses\StatusvdModel;
use App\Models\Admin\StatusrModel;

class Verifikasidok extends BaseController
{
    protected $statusvdModel;
    protected $statusrModel;

    public function __construct()
    {
        $this->statusvdModel = new StatusvdModel();
        $this->statusrModel = new StatusrModel();
    }
    
    public function edit($id)
    {
        $statusvd = $this->statusvdModel->find($id);  

        if (!$statusvd) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Mitra dengan ID statusvd {$id} tidak ditemukan");
        }

        $data = [
            'title' => 'Verifikasi Dokumen',
            'mitra' => $statusvd  
        ];

        return view('/pages/admin/verifikasidok', $data);
    }

    public function update()
    {
        $id = $this->request->getPost('id_mitra');
        $status = $this->request->getPost('status_verifikasi');

        if ($id && $status) {
            // update status verifikasi di tabel statusvd
            $this->statusvdModel->update($id, [
                'status_verifikasi' => $status,
            ]);

            // jika terverifikasi, simpan ke tabel statusr
            if ($status === 'Terverifikasi') {
                $mitra = $this->statusvdModel->getStatusvdWithRegistrationNumber();
                $dataMitra = array_filter($mitra, fn($m) => $m['id'] == $id);

                if (!empty($dataMitra)) {
                    $this->statusrModel->saveFromStatusvd($dataMitra);
                }
            }

            return redirect()->to('/pages/admin/statusvd')->with('message', 'Status verifikasi berhasil diupdate.');
        }

        return redirect()->back()->with('error', 'Tidak ada data untuk diupdate.');
    }    

}