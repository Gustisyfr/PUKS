<?php 
namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Tentang KKP'
        ];
        return view('pages/about', $data);
    }
}
?>