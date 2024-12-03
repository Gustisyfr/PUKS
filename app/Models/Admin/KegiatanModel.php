<?php 

namespace App\Models\Admin;

use CodeIgniter\Model;

Class KegiatanModel extends Model
{
    protected $table = 'kegiatan';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'judul',
        'deskripsi',
        'gambar'
    ];
}