<?php 

namespace App\Controllers\Ses;

use App\Controllers\BaseController;
use App\Models\Ses\StatusvdModel;

class Statusvd extends BaseController
{
    protected $statusvdModel;
    
    public function __construct()
    {
        $this->statusvdModel = new StatusvdModel();
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

    public function delete($id)
    {
        $this->statusvdModel->delete($id);
        return redirect()->to('/pages/ses/statusvd');
    }

}
