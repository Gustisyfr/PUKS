<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-3">Rekomendasi dan Upload Memo </h2>
            <form>
            <fieldset disabled>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">No Registrasi</label>
                    <input class="form-control" type="text" value="#" aria-label="Disabled input example" disabled readonly>
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Nama Mitra</label>
                    <input class="form-control" type="text" value="#" aria-label="Disabled input example" disabled readonly>
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Jenis Mitra</label>
                    <input class="form-control" type="text" value="#" aria-label="Disabled input example" disabled readonly>
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Alamat</label>
                    <input class="form-control" type="text" value="#" aria-label="Disabled input example" disabled readonly>
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Email</label>
                    <input class="form-control" type="text" value="#" aria-label="Disabled input example" disabled readonly>
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">No. Telepon</label>
                    <input class="form-control" type="text" value="#" aria-label="Disabled input example" disabled readonly>
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Unit Organisasi Pelaksana</label>
                    <input class="form-control" type="text" value="#" aria-label="Disabled input example" disabled readonly>
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Bentuk Kerja Sama</label>
                    <input class="form-control" type="text" value="#" aria-label="Disabled input example" disabled readonly>
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Bentuk Dukungan Program KKP</label>
                    <input class="form-control" type="text" value="#" aria-label="Disabled input example" disabled readonly>
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Uraian</label>
                    <input class="form-control" type="text" value="#" aria-label="Disabled input example" disabled readonly>
                </div>
                <div class="mb-3">
                    <label for="disabledFileSuratPermohonan" class="form-label">Surat Permohonan Kerja Sama</label>
                    <input type="file" class="form-control" placeholder="Disabled input" aria-label="Disabled file example" disabled>
                </div>
                <div class="mb-3">
                    <label for="disabledFileProfilMitra" class="form-label">Profil Mitra</label>
                    <input type="file" class="form-control" placeholder="Disabled input" aria-label="Disabled file example" disabled>
                </div>
                <div class="mb-3">
                    <label for="disabledFileDraft" class="form-label">Draft Kerja Sama</label>
                    <input type="file" class="form-control" placeholder="Disabled input" aria-label="Disabled file example" disabled>
                </div>
                <div class="mb-3">
                    <label for="disabledFileSKKumham" class="form-label">SK Kumham</label>
                    <input type="file" class="form-control" placeholder="Disabled input" aria-label="Disabled file example" disabled>
                </div>
                <div class="mb-3">
                    <label for="disabledFileSuratKomitmen" class="form-label">Surat Komitmen Kesediaan Anggaran</label>
                    <input type="file" class="form-control" placeholder="Disabled input" aria-label="Disabled file example" disabled>
                </div>
            </fieldset>
            </form>
                <div class="form-check form-check-inline mb-3">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="direkomendasikan">
                    <label class="form-check-label" for="inlineRadio1">Direkomendasikan</label>
                </div>
                <div class="form-check form-check-inline mb-3">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="belumdirekomendasikan">
                    <label class="form-check-label" for="inlineRadio2">Belum Direkomendasikan</label>
                </div>
                <div class="form-check form-check-inline mb-3">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="revisi">
                    <label class="form-check-label" for="inlineRadio2">Revisi</label>
                </div>
                <div class="mb-3">
                    <label for="catatanFormControlTextarea1" class="form-label">Catatan :</label>
                    <textarea class="form-control" id="CatatanTextarea1" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="InputMemo" class="form-label">Upload Memo</label>
                    <input type="file" class="form-control" aria-label="file example" required>
                <div class="invalid-feedback">Format file harus .PDF</div>
            </div>
            <button type="submit" class="btn btn-success mb-3" onclick="window.location.href='<?= base_url('pages/admin/statusr') ?>';">Simpan</button>
            <button type="button" class="btn btn-danger mb-3" onclick="window.location.href='<?= base_url('/pages/ses/statusvd') ?>';">Kembali</button>
        </div>
    </div>
</div>
<?= $this->endsection(''); ?>