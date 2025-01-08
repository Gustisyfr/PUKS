<?php 

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\KegiatanModel;

class Kegiatan extends BaseController
{
    protected $kegiatanmodel;

    public function __construct()
    {
        $this->kegiatanmodel = new KegiatanModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Upload Dokumentasi Kegiatan',
            'kegiatan' => $this->kegiatanmodel->findAll(),
        ];
        return view('pages/admin/kegiatan', $data);
    }

    public function save()
    {
        $file = $this->request->getFile('image');

        if ($file->isValid() && !$file->hasMoved()) {
            $validation =  \Config\Services::validation();
            $validation->setRules([
                'image' => [
                    'label' => 'Gambar',
                    'rules' => 'uploaded[image]|is_image[image]|mime_in[image,image/jpg,image/jpeg,image/png]'
                ]
            ]);

            if (!$validation->withRequest($this->request)->run()) {
                return redirect()->back()->withInput()->with('error', $validation->getErrors());
            }

            $newName = $file->getName();
            $file->move('uploads/images', $newName);

            $this->kegiatanmodel->save([
                'judul' => $this->request->getVar('judul'),
                'deskripsi' => $this->request->getVar('deskripsi'),
                'gambar' => $newName,
            ]);

            return redirect()->to(base_url('/home'))->with('success', 'Dokumentasi kegiatan berhasil disimpan.');
        }

        return redirect()->back()->with('error', 'Gagal mengupload gambar. Pastikan file yang diupload adalah gambar.');
    }

}
