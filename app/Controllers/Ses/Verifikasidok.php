<?php 
namespace App\Controllers\Ses;

use App\Controllers\BaseController;
use App\Models\Ses\StatusvdModel;

class Verifikasidok extends BaseController
{
    protected $statusvdModel;

    public function __construct()
    {
        $this->statusvdModel = new StatusvdModel();
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

        return view('pages/ses/verifikasidok', $data);
    }

    public function update()
    {
        $id = $this->request->getPost('id_mitra');

        $status = $this->request->getPost('status_verifikasi');

        if ($id && $status) {
        $this->statusvdModel->update($id, [
            'status_verifikasi' => $status
        ]);
        return redirect()->to('/pages/ses/statusvd')->with('message', 'Status verifikasi berhasil diupdate.');
        } else {
        return redirect()->back()->with('error', 'Tidak ada data untuk diupdate.');
        }
    }    

}