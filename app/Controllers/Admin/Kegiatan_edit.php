<?php 

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\KegiatanModel;

class Kegiatan_edit extends BaseController
{
    protected $kegiatanModel;

    public function __construct()
    {
        $this->kegiatanModel = new KegiatanModel();
    }

    public function index()
    {
        $kegiatan = $this->kegiatanModel->findAll();
        
        $data = [
            'title' => 'Edit Dokumentasi Kegiatan', 
            'kegiatan' => $kegiatan
        ];
    
        return view('/pages/admin/kegiatan_edit', $data);  
    }
    
    public function delete($id)
    {
        $this->kegiatanModel->delete($id);
        return redirect()->to('/admin/kegiatan_edit')->with('message', 'Data berhasil dihapus');
    }

    

}
