<?php 
namespace App\Controllers;

use App\Models\Admin\StatusvmModel;

class Daftarks extends BaseController
{
    protected $statusvmModel;

    public function __construct()
    {
        $this->statusvmModel = new statusvmModel();
    }

        public function index()
    {
        $data = [
            'title' => 'Daftar Kerja Sama',
            'validation' => \Config\Services::validation()
        ];
        
        return view('pages/daftarks', $data);  
    }

    public function save()
    {
        // validasi
        if (!$this->validate([
            'nama_mitra' => [
                'label' => 'Nama Mitra',
                'rules' => 'required|alpha_space',
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'alpha_space' => '{field} hanya boleh berisi huruf dan spasi.'
                ]
            ],
            'jenis_mitra' => [
                'label' => 'Jenis Mitra',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
            ],
            'alamat' => [
                'label' => 'Alamat',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
            ],
            'email' => [
                'label' => 'Email',
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'valid_email' => '{field} harus berupa email yang valid.'
                ]
            ],
            'notel' => [
                'label' => 'No. Telepon',
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'numeric' => '{field} harus berupa angka.'
                ]
            ]
        ])) {
        
        $validation= \Config\Services::validation();
        return redirect()->to('/pages/daftarks')->withInput()->with('validation', $validation);
        }
        
        // membuat nomor registrasi
        $date = date('Ymd');
        $uniqueId = strtoupper(substr(md5(uniqid(rand(), true)), 0, 6));
        $nomorRegistrasi = 'KALROREN' . $date . $uniqueId;

        $this->statusvmModel->save([
            'nomor_registrasi' => $nomorRegistrasi,
            'nama_mitra' => $this->request->getVar('nama_mitra'),
            'jenis_mitra' => $this->request->getVar('jenis_mitra'),
            'alamat' => $this->request->getVar('alamat'),
            'email' => $this->request->getVar('email'),
            'notel' => $this->request->getVar('notel')
        ]);

        // mengirimkan data ke view daftarksout
        $data = [
            'title' => 'Summary Pendaftaran', 
            'nomor_registrasi' => $nomorRegistrasi,
            'nama_mitra' => $this->request->getVar('nama_mitra'),
            'jenis_mitra' => $this->request->getVar('jenis_mitra'),
            'alamat' => $this->request->getVar('alamat'),
            'email' => $this->request->getVar('email'),
            'notel' => $this->request->getVar('notel')
        ];

        
        return view('pages/daftarksout', $data);
    }

}