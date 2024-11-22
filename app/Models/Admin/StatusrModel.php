<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class StatusrModel extends Model
{
    protected $table      = 'statusr';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama_mitra',
        'jenis_mitra',
        'bentuk_kerjasama',
        'bentuk_dukungan',
        'status_rekomendasi'
    ];

}