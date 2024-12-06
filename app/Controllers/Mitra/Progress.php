<?php

namespace App\Controllers;

use App\Models\Admin\StatusvmModel;
use App\Models\Ses\StatusvdModel;
use App\Models\Admin\StatusrModel;

class ProgressController extends BaseController
{
    public function index($mitra_id)
    {
        $statusvmModel = new StatusvmModel();
        $statusvdModel = new StatusvdModel();
        $statusrModel = new StatusrModel();

        // Ambil data dari database
        $statusvm = $statusvmModel->where('mitra_id', $mitra_id)->first();
        $statusvd = $statusvdModel->where('mitra_id', $mitra_id)->first();
        $statusr  = $statusrModel->where('mitra_id', $mitra_id)->first();

        $progress = 0;

        // Logika untuk menentukan progress
        if ($statusvm) {
            $progress = 25; // Sudah mendaftar
            if ($statusvm['status_verifikasi'] === 'terverifikasi') {
                $progress = 50; // Verifikasi mitra selesai
            }
        }

        if ($statusvd && $statusvd['status_verifikasi'] === 'terverifikasi') {
            $progress = 75; // Verifikasi dokumen selesai
        }

        if ($statusr && $statusr['status_rekomendasi'] === 'direkomendasikan') {
            $progress = 100; // Rekomendasi selesai
        }

        // Kirim data ke view
        return view('progress_view', ['progress' => $progress]);
    }
}
