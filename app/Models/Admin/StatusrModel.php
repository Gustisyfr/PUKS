<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class StatusrModel extends Model
{
    protected $table      = 'statusr';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nomor_registrasi',
        'nama_mitra',
        'jenis_mitra',
        'bentuk_kerjasama',
        'bentuk_dukungan',
        'status_rekomendasi',
        'catatan',
        'file_memo'
    ];

    // simpan data dari statusvd ke statusr
    public function saveFromStatusvd($data)
    {
        foreach ($data as $item) {
            $existing = $this->where('nomor_registrasi', $item['nomor_registrasi'])->first();
            if (!$existing) {
                $this->save([
                    'nomor_registrasi' => $item['nomor_registrasi'],
                    'nama_mitra' => $item['nama_mitra'],
                    'jenis_mitra' => $item['jenis_mitra'],
                    'bentuk_kerjasama' => $item['bentuk_kerjasama'],
                    'bentuk_dukungan' => $item['bentuk_dukungan'],
                    'status_rekomendasi' => ''
                ]);
            }
        }
    }
}