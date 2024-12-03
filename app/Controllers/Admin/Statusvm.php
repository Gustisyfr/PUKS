<?php 

namespace App\Controllers\Admin;
 
use App\Controllers\BaseController;
use App\Models\Admin\StatusvmModel;

class Statusvm extends BaseController
{
    protected $statusvmModel;

    public function __construct()
    {
        $this->statusvmModel = new StatusvmModel();
    }

    public function index()
    {
        $statusvm = $this->statusvmModel->findAll();
        $data = [
            'title' => 'Status Verifikasi Mitra', 
            'statusvm' => $statusvm
        ];
    
        return view('pages/admin/statusvm', $data);  
    }
    
    public function delete($id)
    {
        $this->statusvmModel->delete($id);
        return redirect()->to('/pages/admin/statusvm')->with('message', 'Data berhasil dihapus');
    }

}