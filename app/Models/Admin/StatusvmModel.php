<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class StatusvmModel extends Model
{
    protected $table      = 'statusvm';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nomor_registrasi', 
        'nama_mitra', 
        'jenis_mitra', 
        'alamat', 
        'email', 
        'notel', 
        'status_verifikasi'
    ];

    public function getById($id)
    {
        return $this->where('id', $id)->first();
    }


}  