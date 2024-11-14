<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="my-3">Verfikasi Dokumen Mitra</h2>
            <form action="<?= base_url('/pages/admin/verifikasidok/update'); ?>" method="post">
                <?= csrf_field(); ?>
                <input type="hidden" name="id_mitravm" value="<?= $statusvm['id']; ?>"> <!-- ID mitra untuk identifikasi -->
                <input type="hidden" name="id_mitravd" value="<?= $statusvd['id']; ?>"> <!-- ID mitra untuk identifikasi -->
                
                <fieldset disabled>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">No Registrasi</label>
                        <input class="form-control" type="text" value="<?= $statusvm['nomor_registrasi']; ?>" disabled readonly>
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Nama Mitra</label>
                        <input class="form-control" type="text" value="<?= $statusvm['nama_mitra']; ?>" disabled readonly>
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Jenis Mitra</label>
                        <input class="form-control" type="text" value="<?= $statusvm['jenis_mitra']; ?>" disabled readonly>
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Alamat</label>
                        <input class="form-control" type="text" value="<?= $statusvm['alamat']; ?>" disabled readonly>
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Email</label>
                        <input class="form-control" type="text" value="<?= $statusvm['email']; ?>" disabled readonly>
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">No. Telepon</label>
                        <input class="form-control" type="text" value="<?= $statusvm['notel']; ?>" disabled readonly>
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Unit Organisasi Pelaksana</label>
                        <input class="form-control" type="text" value="<?= $statusvd['unit_organisasi']; ?>" disabled readonly>
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Satuan Kerja/UPT</label>
                        <input class="form-control" type="text" value="<?= $statusvd['satker_upt']; ?>" disabled readonly>
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Bentuk Kerja Sama</label>
                        <input class="form-control" type="text" value="<?= $statusvd['bentuk_kerjasama']; ?>" disabled readonly>
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Bentuk Kerja Sama Lain</label>
                        <input class="form-control" type="text" value="<?= $statusvd['bentuk_kerjasama_lain']; ?>" disabled readonly>
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Bentuk Dukungan Program KKP</label>
                        <input class="form-control" type="text" value="<?= $statusvd['bentuk_dukungan']; ?>" disabled readonly>
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Uraian</label>
                        <textarea class="form-control" type="text" rows="3" value="<?= $statusvd['uraian']; ?>" disabled readonly></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="suratPermohonanDisabled" class="form-label">Surat Permohonan Kerja Sama</label>
                        <input class="form-control" type="file" value="<?= $statusvd['surat_permohonan']; ?>" id="suratPermohonanDisabled" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="profilMitraDisabled" class="form-label">Profil Mitra</label>
                        <input class="form-control" type="file" value="<?= $statusvd['profil_mitra']; ?>" id="profilMitraDisabled" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="draftKerjasamaDisabled" class="form-label">Draft Kerja Sama</label>
                        <input class="form-control" type="file" value="<?= $statusvd['draft_kerjasama']; ?>" id="draftKerjasamaDisabled" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="skKumhamDisabled" class="form-label">SK Kumham</label>
                        <input class="form-control" type="file" value="<?= $statusvd['sk_kumham']; ?>" id="skKumhamDisabled" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="suratKomitmenDisabled" class="form-label">Surat Komitmen Kesediaan Anggaran</label>
                        <input class="form-control" type="file" value="<?= $statusvd['surat_komitmen']; ?>" id="suratKomitmenDisabled" disabled>
                    </div>
                </fieldset>
                
                <div class="form-check form-check-inline mb-3">
                    <input class="form-check-input" type="radio" name="status_verifikasi" id="terverifikasi" value="Terverifikasi" <?= $statusvd['status_verifikasi'] == 'Terverifikasi' ? 'checked' : ''; ?>>
                    <label class="form-check-label" for="terverifikasi">Terverifikasi</label>
                </div>
                <div class="form-check form-check-inline mb-3">
                    <input class="form-check-input" type="radio" name="status_verifikasi" id="revisi" value="Revisi" <?= $statusvd['status_verifikasi'] == 'Revisi' ? 'checked' : ''; ?>>
                    <label class="form-check-label" for="revisi">Revisi</label>
                </div>
                <!-- <div class="mb-3">
                    <label for="alamat" class="form-label">Catatan :</label>
                    <textarea type="text" class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
                </div> -->

                <div>
                    <button type="submit" class="btn btn-success mb-3">Simpan</button>
                    <button type="button" class="btn btn-danger mb-3" onclick="history.back();">Kembali</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endsection(''); ?>