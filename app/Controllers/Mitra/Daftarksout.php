<?php 

namespace App\Controllers;

class Daftarksout extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Summary Pendaftaran'  
        ];
        
        return view('/pages/mitra/daftarksout', $data); 
    }

}