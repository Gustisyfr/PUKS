<?php 
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\StatusrModel;
use App\Models\Ses\StatusvdModel;
use App\Models\Admin\StatusvmModel;

class Statusr extends BaseController
{
    protected $statusrModel;
    protected $statusvdModel;
    protected $statusvmModel;

    public function __construct()
    {
        $this->statusrModel = new StatusrModel();
        $this->statusvdModel = new StatusvdModel();
        $this->statusvmModel = new StatusvmModel();  
    }
    
    public function index()
    {
        $statusr = $this->statusrModel->findAll();

        $data=[
            'title' => 'Status Rekomendasi',
            'statusr' => $statusr
        ];
        return view ('pages/admin/statusr', $data);

    }

    public function edit($id)
    {
        // memanggil data dari tabel statusr berdasarkan 'id'
        $statusr = $this->statusrModel->find($id);
        if (!$statusr) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Data dengan ID {$id} tidak ditemukan");
        }

        // memanggil 'nomor registrasi' dari tabel statusr
        $nomorRegistrasi = $statusr['nomor_registrasi'];

        // memanggil data mitra dari statusvm berdasarkan 'nomor registrasi'
        $mitraStatusvm = $this->statusvmModel
            ->where('nomor_registrasi', $nomorRegistrasi)
            ->first();

        // merge data yang diperlukan
        $data = [
            'title' => 'Rekomendasi dan Upload Memo',
            'mitra' => [
                'nomor_registrasi' => $nomorRegistrasi,
                'nama_mitra' => $mitraStatusvd['nama_mitra'] ?? $mitraStatusvm['nama_mitra'],
                'jenis_mitra' => $mitraStatusvd['jenis_mitra'] ?? $mitraStatusvm['jenis_mitra'],
                'alamat' => $mitraStatusvd['alamat'] ?? '-',
                'email' => $mitraStatusvd['email'] ?? '-',
                'notel' => $mitraStatusvd['notel'] ?? '-',
                'unit_organisasi' => $mitraStatusvd['unit_organisasi'] ?? '-',
                'bentuk_kerjasama' => $mitraStatusvd['bentuk_kerjasama'] ?? '-',
                'bentuk_dukungan' => $mitraStatusvd['bentuk_dukungan'] ?? '-',
                'status_rekomendasi' => $statusr['status_rekomendasi']
            ]
        ];

        return view('pages/admin/status', $data);
    }


    public function delete($id)
    {
        $this->statusrModel->delete($id);
        return redirect()->to('/pages/admin/statusr');
    }

}