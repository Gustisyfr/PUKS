<?php 
namespace App\Controllers;

use App\Models\Admin\StatusvmModel;

class Daftarks extends BaseController
{
    protected $statusvmModel;

    public function __construct()
    {
        $this->statusvmModel = new StatusvmModel();
    }

    public function index()
    {
        $role = session()->get('role'); // Ambil role dari session
        $data = [
            'title' => 'Daftar Kerja Sama',
            'role' => $role, // Kirim role ke view
        ];

        return view('pages/daftarks', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'nama_mitra' => 'required',
            'jenis_mitra' => 'required',
            'alamat' => 'required',
            'email' => 'required|valid_email',
            'notel' => 'required|numeric',
        ])) {
            return redirect()->to('/pages/daftarks')->withInput()->with('errors', $this->validator);
        }

        // Generate nomor registrasi
        $nomorRegistrasi = 'KALROREN' . date('Ymd') . strtoupper(substr(md5(uniqid(rand(), true)), 0, 6));

        // Simpan ke database
        $this->statusvmModel->save([
            'nomor_registrasi' => $nomorRegistrasi,
            'nama_mitra' => $this->request->getPost('nama_mitra'),
            'jenis_mitra' => $this->request->getPost('jenis_mitra'),
            'alamat' => $this->request->getPost('alamat'),
            'email' => $this->request->getPost('email'),
            'notel' => $this->request->getPost('notel'),
        ]);

        // Redirect ke halaman Daftarksout
        $data = [
            'title' => 'Summary Pendaftaran',
            'nomor_registrasi' => $nomorRegistrasi,
            'role' => session()->get('role'),
            'nama_mitra' => $this->request->getPost('nama_mitra'),
            'jenis_mitra' => $this->request->getPost('jenis_mitra'),
            'alamat' => $this->request->getPost('alamat'),
            'email' => $this->request->getPost('email'),
            'notel' => $this->request->getPost('notel'),
        ];

        return view('pages/daftarksout', $data);
    }
}
