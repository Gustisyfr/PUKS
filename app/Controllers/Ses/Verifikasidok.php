<?php 
namespace App\Controllers\Ses;

use App\Controllers\BaseController;

class Verifikasidok extends BaseController
{
    public function index()
    {
        $data=[
            'title' => 'Verifikasi Dokumen'
        ];
        return view ('pages/ses/verifikasidok', $data);
    }
}
?>