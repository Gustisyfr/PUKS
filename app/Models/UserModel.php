<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'username', 
        'email', 
        'password', 
        'level_id', 
        'created_at', 
        'updated_at'
    ];
    protected $returnType = 'array';

    // Set default tanggal buat created_at sebelum insert
    protected $beforeInsert = ['setCreatedAt'];

    // Function buat set created_at sebelum insert
    protected function setCreatedAt(array $data)
    {
        if (empty($data['data']['created_at'])) {
            $data['data']['created_at'] = date('Y-m-d H:i:s'); // waktu sekarang
        }

        return $data;
    }

    // ga wajib: ini kalo mau update yang `updated_at` pas update atau forget tinggal panggil aja ini function nya
    protected $beforeUpdate = ['setUpdatedAt'];

    protected function setUpdatedAt(array $data)
    {
        if (empty($data['data']['updated_at'])) {
            $data['data']['updated_at'] = date('Y-m-d H:i:s'); // waktu sekarang
        }

        return $data;
    }
}
