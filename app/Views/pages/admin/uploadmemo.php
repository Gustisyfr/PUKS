<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="my-4">Rekomendasi dan Upload Memo </h2>
            <form action="<?= base_url('/pages/admin/uploadmemo/update'); ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <input type="hidden" name="id_mitra" value="<?= $mitra['id']; ?>">
            
            <fieldset disabled>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">No Registrasi</label>
                    <input class="form-control" type="text" value="<?= $mitra['nomor_registrasi']; ?>" disabled readonly>
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Nama Mitra</label>
                    <input class="form-control" type="text" value="<?= $mitra['nama_mitra']; ?>" disabled readonly>
                </div>
                <div class="mb-3">
                    <label for="jenis_mitra" class="form-label">Jenis Mitra</label>
                    <select id="jenis_mitra" name="jenis_mitra" class="form-control" disabled readonly>
                        <option value="Kementrian/Lembaga" <?= $mitra['jenis_mitra'] == 'Kementrian/Lembaga' ? 'selected' : ''; ?>>Kementrian/Lembaga</option>
                        <option value="Universitas/Perguruan Tinggi" <?= $mitra['jenis_mitra'] == 'Universitas/Perguruan Tinggi' ? 'selected' : ''; ?>>Universitas/Perguruan Tinggi</option>
                        <option value="Ormas/LSM" <?= $mitra['jenis_mitra'] == 'Ormas/LSM' ? 'selected' : ''; ?>>Ormas/LSM</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Alamat</label>
                    <input class="form-control" type="text" value="<?= $mitra['alamat']; ?>" disabled readonly>
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Email</label>
                    <input class="form-control" type="text" value="<?= $mitra['email']; ?>" disabled readonly>
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">No. Telepon</label>
                    <input class="form-control" type="text" value="<?= $mitra['notel']; ?>" disabled readonly>
                </div>
                <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Unit Organisasi Pelaksana</label>
                        <input class="form-control" type="text" value="<?= $mitra['unit_organisasi']; ?>" disabled readonly>
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Satuan Kerja/UPT</label>
                    <input class="form-control" type="text" 
                        value="<?= implode(', ', array_filter([
                            $mitra['satker_upt_1'], 
                            $mitra['satker_upt_2'], 
                            $mitra['satker_upt_3'], 
                            $mitra['satker_upt_4'], 
                            $mitra['satker_upt_5'], 
                            $mitra['satker_upt_6'], 
                            $mitra['satker_upt_7'], 
                            $mitra['satker_upt_8'], 
                            $mitra['satker_upt_9']
                        ])); ?>" 
                        disabled readonly>
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Bentuk Kerja Sama</label>
                    <input class="form-control" type="text" value="<?= $mitra['bentuk_kerjasama']; ?>" disabled readonly>
                </div>
                <!-- hidden disable input kerjasama lain -->
                <div class="mb-3" style="display: <?= $mitra['bentuk_kerjasama'] == 'Lain-lain' ? 'block' : 'none'; ?>">
                    <label for="disabledTextInput" class="form-label">Bentuk Kerja Sama Lain</label>
                    <input class="form-control" type="text" value="<?= $mitra['kerjasama_lain']; ?>" disabled readonly>
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Bentuk Dukungan Program KKP I</label>
                    <input class="form-control" type="text" value="<?= $mitra['bentuk_dukungan']; ?>" disabled readonly>
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Bentuk Dukungan Program KKP II</label>
                    <input class="form-control" type="text" value="<?= !empty($mitra['bentuk_dukungan_opsional']) ? $mitra['bentuk_dukungan_opsional'] : '-'; ?>" disabled readonly>                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Uraian</label>
                    <textarea class="form-control" type="text" rows="3" disabled readonly><?= !empty($mitra['uraian']) ? $mitra['uraian'] : 'Tidak ada uraian'; ?></textarea>
                </div>
                <!-- hidden disable input file-->
                <!-- surat permohonan -->
                <div class="form-horizontal" style="display: <?= ($mitra['jenis_mitra'] == 'Kementrian/Lembaga' || $mitra['jenis_mitra'] == 'Universitas/Perguruan Tinggi' || $mitra['jenis_mitra'] == 'Ormas/LSM') ? 'block' : 'none'; ?>">
                    <div class="row mb-3">
                        <label for="surat_permohonan" class="col-sm-3 col-form-label">Surat Permohonan Kerja Sama</label>
                        <div class="col-sm-5">
                            <?php if (!empty($mitra['surat_permohonan'])): ?>
                                <a href="<?= base_url('uploads/' . $mitra['surat_permohonan']); ?>" target="_blank" class="form-control bg-light"><?= $mitra['surat_permohonan']; ?></a>
                            <?php else: ?>
                                <input class="form-control" type="file" id="suratPermohonanDisabled" disabled>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <!-- Profil Mitra -->
                <div class="form-horizontal" style="display: <?= ($mitra['jenis_mitra'] == 'Universitas/Perguruan Tinggi' || $mitra['jenis_mitra'] == 'Ormas/LSM') ? 'block' : 'none'; ?>">
                    <div class="row mb-3">
                        <label for="profil_mitra" class="col-sm-3 col-form-label">Profil Mitra</label>
                        <div class="col-sm-5">
                            <?php if (!empty($mitra['profil_mitra'])): ?>
                                <a href="<?= base_url('uploads/' . $mitra['profil_mitra']); ?>" target="_blank" class="form-control bg-light"><?= $mitra['profil_mitra']; ?></a>
                            <?php else: ?>
                                <input class="form-control" type="file" id="profilMitraDisabled" disabled>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <!-- Draft Kerja Sama -->
                <div class="form-horizontal" style="display: <?= ($mitra['jenis_mitra'] == 'Kementrian/Lembaga' || $mitra['jenis_mitra'] == 'Universitas/Perguruan Tinggi' || $mitra['jenis_mitra'] == 'Ormas/LSM') ? 'block' : 'none'; ?>">
                    <div class="row mb-3">
                        <label for="draft_kerjasama" class="col-sm-3 col-form-label">Draft Kerja Sama</label>
                        <div class="col-sm-5">
                            <?php if (!empty($mitra['draft_kerjasama'])): ?>
                                <a href="<?= base_url('uploads/' . $mitra['draft_kerjasama']); ?>" target="_blank" class="form-control bg-light"><?= $mitra['draft_kerjasama']; ?></a>
                            <?php else: ?>
                                <input class="form-control" type="file" id="draftKerjasamaDisabled" disabled>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <!-- SK KumHam -->
                <div class="form-horizontal" style="display: <?= ($mitra['jenis_mitra'] == 'Ormas/LSM') ? 'block' : 'none'; ?>">
                    <div class="row mb-3">
                        <label for="sk_kumham" class="col-sm-3 col-form-label">SK KumHam</label>
                        <div class="col-sm-5">
                            <?php if (!empty($mitra['sk_kumham'])): ?>
                                <a href="<?= base_url('uploads/' . $mitra['sk_kumham']); ?>" target="_blank" class="form-control bg-light"><?= $mitra['sk_kumham']; ?></a>
                            <?php else: ?>
                                <input class="form-control" type="file" id="skKumhamDisabled" disabled>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <!-- Surat Komitmen -->
                <div class="form-horizontal" style="display: <?= ($mitra['jenis_mitra'] == 'Ormas/LSM') ? 'block' : 'none'; ?>">
                    <div class="row mb-3">
                        <label for="surat_komitmen" class="col-sm-3 col-form-label">Surat Komitmen Kesediaan Anggaran</label>
                        <div class="col-sm-5">
                            <?php if (!empty($mitra['surat_komitmen'])): ?>
                                <a href="<?= base_url('uploads/' . $mitra['surat_komitmen']); ?>" target="_blank" class="form-control bg-light"><?= $mitra['surat_komitmen']; ?></a>
                            <?php else: ?>
                                <input class="form-control" type="file" id="suratKomitmenDisabled" disabled>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </fieldset>
            
            <!-- button radio rekomendasi -->
            <div class="form-check form-check-inline mb-4 mt-4">
                <input class="form-check-input" type="radio" name="status_rekomendasi" id="direkomendasikan" value="Direkomendasikan" <?= $mitra['status_rekomendasi'] == 'Direkomendasikan' ? 'checked' : ''; ?>>
                <label class="form-check-label" for="direkomendasikan">Direkomendasikan</label>
            </div>
            <div class="form-check form-check-inline mb-4 mt-4">
                <input class="form-check-input" type="radio" name="status_rekomendasi" id="belum_direkomendasikan" value="Belum Direkomendasikan" <?= $mitra['status_rekomendasi'] == 'Belum Direkomendasikan' ? 'checked' : ''; ?>>
                <label class="form-check-label" for="belum_direkomendasikan">Belum Direkomendasikan</label>
            </div>
            <div class="form-check form-check-inline mb-4 mt-4">
                <input class="form-check-input" type="radio" name="status_rekomendasi" id="revisi" value="Revisi" <?= $mitra['status_rekomendasi'] == 'Revisi' ? 'checked' : ''; ?>>
                <label class="form-check-label" for="revisi">Revisi</label>
            </div>

            <!-- input catatan -->
            <div class="mb-3">
                <label for="catatan" class="form-label">Catatan :</label>
                <textarea type="text" class="form-control" id="catatan" name="catatan" placeholder="Masukan catatan bila ada" rows="3"></textarea>
            </div>
            <!-- upload memo -->
            <div class="form-horizontal">
                <div class="row mb-3">
                    <label for="InputMemo" class="col-sm-3 col-form-label">Upload Memo</label>
                    <div class="col-sm-5">
                        <input type="file" class="form-control" name="file_memo" id="InputMemo"required>
                        <div class="invalid-feedback">Format file harus .PDF</div>
                    </div>
                </div>
            </div>

            <div>
                <button type="submit" class="btn btn-success mb-3">Simpan</button>
                <button type="button" class="btn btn-danger mb-3" onclick="history.back();">Kembali</button>
            </div>
        </form>
        </div>
    </div>
</div>
<?= $this->endsection(''); ?>