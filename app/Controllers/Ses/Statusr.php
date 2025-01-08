<?php 
namespace App\Controllers\Ses;

use App\Controllers\BaseController;
use App\Models\Admin\StatusrModel;
use App\Models\Ses\StatusvdModel;
use App\Models\Admin\StatusvmModel;

class Statusr extends BaseController
{
    protected $statusrModel;
    protected $statusvdModel;
    protected $statusvmModel;

    public function __construct()
    {
        $this->statusrModel = new StatusrModel();
        $this->statusvdModel = new StatusvdModel();
        $this->statusvmModel = new StatusvmModel();  
    }
    
    public function index()
    {
        $statusr = $this->statusrModel->findAll();

        foreach ($statusr as &$item) {
            $item['bentuk_dukungan_opsional'] = $item['bentuk_dukungan_opsional'] ?? '-';
        }

        $data = [
            'title' => 'Status Rekomendasi',
            'statusr' => $statusr
        ];
        return view('pages/ses/statusr', $data);
    }

}
