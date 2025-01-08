<?php 

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\StatusvmModel;
use App\Models\Ses\StatusvdModel;

class Uploaddok extends BaseController
{
    protected $statusvmModel;
    protected $statusvdModel;

    public function __construct()
    {
        $this->statusvmModel = new StatusvmModel();
        $this->statusvdModel = new StatusvdModel();
    }

    public function index()
    {
        $statusvm = $this->statusvmModel->where('status_verifikasi', 'Terverifikasi')->findAll();

        $data = [
            'title' => 'Upload Dokumen',
            'statusvm' => $statusvm
        ];
        return view('pages/admin/uploaddok', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'unit_organisasi' => 'required',
            'jenis_mitra' => 'required',
            'nama_mitra' => 'required',
            'bentuk_kerjasama' => 'required',
        ])) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'unit_organisasi' => $this->request->getVar('unit_organisasi'), 
            'satker_upt_1' => $this->request->getVar('satker_upt_1'), 
            'satker_upt_2' => $this->request->getVar('satker_upt_2'), 
            'satker_upt_3' => $this->request->getVar('satker_upt_3'), 
            'satker_upt_4' => $this->request->getVar('satker_upt_4'), 
            'satker_upt_5' => $this->request->getVar('satker_upt_5'), 
            'satker_upt_6' => $this->request->getVar('satker_upt_6'), 
            'satker_upt_7' => $this->request->getVar('satker_upt_7'), 
            'satker_upt_8' => $this->request->getVar('satker_upt_8'), 
            'satker_upt_9' => $this->request->getVar('satker_upt_9'), 
            'jenis_mitra' => $this->request->getVar('jenis_mitra'), 
            'nama_mitra' => $this->request->getVar('nama_mitra'),
            'bentuk_kerjasama' => $this->request->getVar('bentuk_kerjasama'), 
            'kerjasama_lain' => $this->request->getVar('kerjasama_lain'), 
            'bentuk_dukungan' => $this->request->getVar('bentuk_dukungan'), 
            'bentuk_dukungan_opsional' => $this->request->getVar('bentuk_dukungan_opsional'), 
            'uraian' => $this->request->getVar('uraian')
        ];

        $uploadPath = WRITEPATH . 'uploads';
        $kategori = $this->request->getVar('jenis_mitra');
        $fileInputs = [];

        if ($kategori == 'Kementrian/Lembaga' || $kategori == 'Pemerintah Daerah' || $kategori == 'Badan Usaha Milik Negara') {
            $fileInputs = [
                'surat_permohonan' => 'surat_permohonan',
                'draft_kerjasama' => 'draft_kerjasama'
            ];
        } elseif ($kategori == 'Universitas/Perguruan Tinggi') {
            $fileInputs = [
                'surat_permohonan' => 'surat_permohonan',
                'profil_mitra' => 'profil_mitra',
                'draft_kerjasama' => 'draft_kerjasama'
            ];
        } elseif ($kategori == 'Oraganisasi Masyarakat/Lembaga Swadaya Masyarakat' || $kategori == 'Swasta') {
            $fileInputs = [
                'surat_permohonan' => 'surat_permohonan',
                'profil_mitra' => 'profil_mitra',
                'draft_kerjasama' => 'draft_kerjasama',
                'sk_kumham' => 'sk_kumham',
                'surat_komitmen' => 'surat_komitmen'
            ];
        }

        foreach ($fileInputs as $key => $inputName) {
            $file = $this->request->getFile($inputName);

            if ($file && $file->isValid()) {
                $allowedTypes = ['application/pdf'];
                $maxFileSize = 50 * 1024 * 1024;
                
                if (in_array($file->getMimeType(), $allowedTypes) && $file->getSize() <= $maxFileSize) {
                    $newFileName = $file->getName();
                    
                    if ($file->move($uploadPath, $newFileName)) {
                        $data[$key] = $newFileName;
                        log_message('info', "File {$inputName} berhasil diunggah sebagai {$newFileName}");
                    } else {
                        log_message('error', "Gagal mengunggah file {$inputName}: " . $file->getErrorString());
                        $data[$key] = null; 
                    }
                } else {
                    log_message('error', "Tipe atau ukuran file {$inputName} tidak valid: " . $file->getName());
                    $data[$key] = null;
                }
            } else {
                log_message('info', "Tidak ada file diunggah untuk {$inputName}.");
                $data[$key] = null; 
            }
        }

        $this->statusvdModel->save($data);
        
        return redirect()->to('admin/statusvd')->with('message', 'Data berhasil disimpan');
    }
 
}
