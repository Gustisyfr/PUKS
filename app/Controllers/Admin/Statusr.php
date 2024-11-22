<?php 
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\StatusrModel;

class Statusr extends BaseController
{
    protected $statusrModel;
    public function __construct()
    {
        $this->statusrModel = new StatusrModel();   
    }
    
    public function index()
    {
        $statusr = $this->statusrModel->findAll();
        $data=[
            'title' => 'Status Rekomendasi',
            'statusr' => $statusr
        ];
        return view ('pages/admin/statusr', $data);

    }
}