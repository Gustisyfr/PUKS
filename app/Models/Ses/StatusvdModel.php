<?php

namespace App\Models\Ses;

use CodeIgniter\Model;

class StatusvdModel extends Model
{
    protected $table = 'statusvd'; 
    protected $primaryKey = 'id'; 
    protected $allowedFields = [
        'unit_organisasi',
        'satker_upt_1',
        'satker_upt_2',
        'satker_upt_3',
        'satker_upt_4',
        'satker_upt_5',
        'satker_upt_6',
        'satker_upt_7',
        'satker_upt_8',
        'satker_upt_9',
        'jenis_mitra',
        'nama_mitra',
        'bentuk_kerjasama',
        'kerjasama_lain',
        'bentuk_dukungan',
        'status_verifikasi',
        'uraian',
        'surat_permohonan',
        'profil_mitra',
        'draft_kerjasama',
        'sk_kumham',
        'surat_komitmen',
        'id_statusvd' 
    ];

    protected $validationRules = [
        'unit_organisasi' => 'required',
        'jenis_mitra' => 'required',
        'nama_mitra' => 'required',
        'bentuk_kerjasama' => 'required',
        'bentuk_dukungan' => 'required'
    ];
    
    // memanggil "no. registrasi" ke "status verifikasi dokumen" 
    public function getStatusvdWithRegistrationNumber()
    {
        return $this->select('statusvd.*, statusvm.nomor_registrasi')
                    ->join('statusvm', 'statusvd.nama_mitra = statusvm.nama_mitra AND statusvd.jenis_mitra = statusvm.jenis_mitra', 'left')
                    ->get()
                    ->getResultArray();
    }

    // memanggil mitra yg terverifikasi di "status verifikasi dokumen" ke "status rekomendasi"
    public function getVerifiedWithRegistrationNumber()
    {
        return $this->select('statusvd.*, statusvm.nomor_registrasi')
                    ->join('statusvm', 'statusvd.nama_mitra = statusvm.nama_mitra AND statusvd.jenis_mitra = statusvm.jenis_mitra', 'left')
                    ->where('statusvd.status_verifikasi', 'Terverifikasi')
                    ->whereNotIn('statusvd.id', function ($builder) {
                        return $builder->select('statusvd.id')
                                    ->from('statusvd')
                                    ->join('statusr', 'statusvd.nomor_registrasi = statusr.nomor_registrasi');
                    })
                    ->get()
                    ->getResultArray();
                    
    }
               
    // memanggil/join tabel statusvm dan statusvd ke upload dokumen
    public function getMitraDetailById($id)
    {
        return $this->select('statusvd.*, statusvm.nomor_registrasi, statusvm.alamat, statusvm.email, statusvm.notel')
                    ->join('statusvm', 'statusvd.nama_mitra = statusvm.nama_mitra AND statusvd.jenis_mitra = statusvm.jenis_mitra', 'left')
                    ->where('statusvd.id', $id)
                    ->first();
    }

}
