<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="my-3">Verfikasi Dokumen Mitra</h2>
            <form action="<?= base_url('/pages/admin/verifikasidok/update'); ?>" method="post">
                <?= csrf_field(); ?>
                <input type="hidden" name="id_mitra" value="<?= $mitra['id']; ?>"> <!-- ID mitra untuk identifikasi -->
                
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
                        <label for="disabledTextInput" class="form-label">Jenis Mitra</label>
                        <input class="form-control" type="text" value="<?= $mitra['jenis_mitra']; ?>" disabled readonly>
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
                        <input class="form-control" type="text" value="<?= $mitra['satker_upt']; ?>" disabled readonly>
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Bentuk Kerja Sama</label>
                        <input class="form-control" type="text" value="<?= $mitra['bentuk_kerjasama']; ?>" disabled readonly>
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Bentuk Kerja Sama Lain</label>
                        <input class="form-control" type="text" value="<?= $mitra['bentuk_kerjasama_lain']; ?>" disabled readonly>
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Bentuk Dukungan Program KKP</label>
                        <input class="form-control" type="text" value="<?= $mitra['bentuk_dukungan']; ?>" disabled readonly>
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Uraian</label>
                        <textarea class="form-control" type="text" rows="3" value="<?= $mitra['uraian']; ?>" disabled readonly></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="suratPermohonanDisabled" class="form-label">Surat Permohonan Kerja Sama</label>
                        <input class="form-control" type="file" id="suratPermohonanDisabled" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="profilMitraDisabled" class="form-label">Profil Mitra</label>
                        <input class="form-control" type="file" id="profilMitraDisabled" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="draftKerjasamaDisabled" class="form-label">Draft Kerja Sama</label>
                        <input class="form-control" type="file" id="draftKerjasamaDisabled" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="skKumhamDisabled" class="form-label">SK Kumham</label>
                        <input class="form-control" type="file" id="skKumhamDisabled" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="suratKomitmenDisabled" class="form-label">Surat Komitmen Kesediaan Anggaran</label>
                        <input class="form-control" type="file" id="suratKomitmenDisabled" disabled>
                    </div>
                </fieldset>
                
                <div class="form-check form-check-inline mb-3">
                    <input class="form-check-input" type="radio" name="status_verifikasi" id="terverifikasi" value="Terverifikasi" <?= $mitra['status_verifikasi'] == 'Terverifikasi' ? 'checked' : ''; ?>>
                    <label class="form-check-label" for="terverifikasi">Terverifikasi</label>
                </div>
                <div class="form-check form-check-inline mb-3">
                    <input class="form-check-input" type="radio" name="status_verifikasi" id="tidak_terverifikasi" value="Tidak Terverifikasi" <?= $mitra['status_verifikasi'] == 'Tidak Terverifikasi' ? 'checked' : ''; ?>>
                    <label class="form-check-label" for="tidak_terverifikasi">Revisi</label>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Catatan :</label>
                    <textarea type="text" class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
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