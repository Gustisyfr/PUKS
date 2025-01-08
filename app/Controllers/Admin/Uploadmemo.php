<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\StatusrModel;
use App\Models\Admin\StatusvmModel;
use App\Models\Ses\StatusvdModel;

class Uploadmemo extends BaseController
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

    public function edit($id)
    {
        // memanggil data dari tabel statusr berdasarkan 'id'
        $statusr = $this->statusrModel->find($id);
        if (!$statusr) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Mitra dengan ID {$id} tidak ditemukan");
        }

        // memanggil data dari statusvm berdasarkan 'nomor registrasi'
        $statusvm = $this->statusvmModel->getByRegistrationNumber($statusr['nomor_registrasi']);
        if (!$statusvm) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Data mitra dengan nomor registrasi {$statusr['nomor_registrasi']} tidak ditemukan");
        }

        // memanggil data dari statusvd berdasarkan 'nama mitra' dan 'jenis mitra'
        $statusvd = $this->statusvdModel
            ->where('nama_mitra', $statusvm['nama_mitra'])
            ->where('jenis_mitra', $statusvm['jenis_mitra'])
            ->first();

        if (!$statusvd) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Data mitra di tabel statusvd tidak ditemukan.");
        }

        // merge data statusvm dan statusvd
        $mitra = array_merge($statusvm, $statusvd, $statusr);

        $data = [
            'title' => 'Rekomendasi dan Upload Memo',
            'mitra' => $mitra
        ];

        return view('pages/admin/uploadmemo', $data);
    }

        
    public function update()
    {   
        $id = $this->request->getPost('id_mitra');
        $status = $this->request->getPost('status_rekomendasi');
        $catatan = $this->request->getPost('catatan');
        $fileMemo = $this->request->getFile('file_memo');

        if (!$id || !$status) {
            return redirect()->back()->with('error', 'Data tidak lengkap.');
        }


        $fileMemoName = null;
        if ($fileMemo->isValid() && !$fileMemo->hasMoved()) {
            if ($fileMemo->getExtension() === 'pdf') {
                $fileMemoName = $fileMemo->getName();
                $fileMemo->move('uploads/memos', $fileMemoName);
            } else {
                return redirect()->back()->with('error', 'Format file harus PDF.');
            }
        }

        $data = [
            'status_rekomendasi' => $status,
            'catatan' => $catatan
        ];

        if ($fileMemoName) {
            $data['file_memo'] = $fileMemoName;
        }

        $result = $this->statusrModel->update($id, $data);
        if (!$result) {
        return redirect()->back()->with('error', 'Gagal memperbarui data.');
        }

        return redirect()->to('admin/statusr')->with('message', 'Data berhasil diperbarui.');
    }
}
