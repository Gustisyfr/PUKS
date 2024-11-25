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
        'status_rekomendasi'
    ];

    public function saveFromStatusvd($data)
    {
        foreach ($data as $item) {
            // cek apakah data sudah ada di tabel statusr
            $existing = $this->where('nomor_registrasi', $item['nomor_registrasi'])->first();
            if (!$existing) {
                $this->save([
                    'nomor_registrasi' => $item['nomor_registrasi'],
                    'nama_mitra' => $item['nama_mitra'],
                    'jenis_mitra' => $item['jenis_mitra'],
                    'bentuk_kerjasama' => $item['bentuk_kerjasama'],
                    'bentuk_dukungan' => $item['bentuk_dukungan'],
                    'status_rekomendasi' => 'Menunggu Rekomendasi'
                ]);
            }
        }
    }
}