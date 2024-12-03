<?php 

namespace App\Controllers\Ses;

use App\Controllers\BaseController;
use App\Models\Ses\StatusvdModel;
use App\Models\Admin\StatusrModel;

class Statusvd extends BaseController
{
    protected $statusvdModel;
    protected $statusrModel;
    
    public function __construct()
    {
        $this->statusvdModel = new StatusvdModel();
        $this->statusrModel = new StatusrModel();
    }

    public function index()
    {
        $statusvd = $this->statusvdModel->getStatusvdWithRegistrationNumber(); 

        $data = [
            'title' => 'Status Verifikasi Dokumen',
            'statusvd' => $statusvd
        ];

        return view('pages/ses/statusvd', $data);
        
    }

    public function verify($id)
    {
        // ambil data mitra yang akan diverifikasi
        $mitra = $this->statusvdModel->getById($id);

        if (!$mitra) {
            return redirect()->back()->with('error', 'Dokumen tidak ditemukan.');
        }

        // update status verifikasi dokumen
        $this->statusvdModel->update($id, ['status_verifikasi' => 'Terverifikasi']);

        // simpan data mitra yang terverifikasi ke statusr
        $verifiedData = $this->statusvdModel->getVerifiedWithRegistrationNumber();
        $this->statusrModel->saveFromStatusvd($verifiedData);

        return redirect()->to('/pages/ses/statusvd')->with('success', 'Dokumen berhasil diverifikasi.');
    }


    public function delete($id)
    {
        $this->statusvdModel->delete($id);
        return redirect()->to('/pages/ses/statusvd')->with('message', 'Data berhasil dihapus');
    }

}
