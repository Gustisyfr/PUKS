<?php 
namespace App\Controllers;

class Contact extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Hubungi Kami'
        ];
            return view('pages/contact', $data);
    }
} 
?>