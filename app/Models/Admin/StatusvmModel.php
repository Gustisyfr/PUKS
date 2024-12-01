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

    // memanggil data mitra sesuai dengan 'no. registrasi' di "status rekomendasi"
    public function getByRegistrationNumber($nomorRegistrasi)
    {
        return $this->where('nomor_registrasi', $nomorRegistrasi)->first();
    }

}  