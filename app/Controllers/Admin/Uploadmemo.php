<?php 
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
// use App\Models\Admin\UploadmemoModel;

class Uploadmemo extends BaseController
{
    // protected $statusrModel;
    // public function __construct()
    // {
    //     $this->statusrModel = new StatusrModel();   
    // }
    
    public function index()
    {
        // $statusr = $this->statusrModel->findAll();
        $data=[
            'title' => 'Rekomendasi dan Upload Memo'
            // 'statusr' => $statusr
        ];
        return view ('pages/admin/uploadmemo', $data);

    }
}
?>