<?php 

namespace App\Models;

use CodeIgniter\Model;

class HomeModel extends Model
{
    protected $table = 'kegiatan'; 
    protected $primaryKey = 'id'; 
    protected $allowedFields = [
        'id',
        'judul',
        'deskripsi',
        'gambar'
    ];
}