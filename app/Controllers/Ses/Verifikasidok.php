<?php 
namespace App\Controllers\Ses;

use App\Controllers\BaseController;
use App\Models\Ses\StatusvdModel;
use App\Models\Admin\StatusvmModel;

class Verifikasidok extends BaseController
{
    protected $statusvdModel;
    protected $statusvmModel;

    public function __construct()
    {
        $this->statusvdModel = new StatusvdModel();
        $this->statusvmModel = new StatusvmModel();
    }
    
    public function edit($id)
    {
        // mengambil data mitra berdasarkan id
        $statusvd = $this->statusvdModel->getById($id);
        $statusvm = $this->statusvmModel->getById($id);

        $data=[
            'title' => 'Verifikasi Dokumen',
            'mitra' => $statusvd,
            'mitravm' => $statusvm
        ];

        return view ('pages/ses/verifikasidok', $data);
    }

    public function update()
    {
        $id = $this->request->getPost('id_mitra');
        $status = $this->request->getPost('status_verifikasi');

        if ($id && $status) {
            $this->statusvdModel->update($id, [
                'status_verifikasi' => $status
            ]);
            return redirect()->to('/pages/ses/statusvd')->with('message', 'status verifikasi berhasil diupdate');
            } else {
                return redirect()->back()->with('error', 'Tidak ada data untuk diupdate');
            }
    }    

}