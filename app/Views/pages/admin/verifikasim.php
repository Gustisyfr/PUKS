<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="my-4">Detail Data Mitra</h2>
            <form action="<?= base_url('admin/verifikasim/update'); ?>" method="post">
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
                </fieldset>
                
                <!-- radio button verifikasi -->
                <div class="form-check form-check-inline mb-4 mt-4">
                    <input class="form-check-input" type="radio" name="status_verifikasi" id="terverifikasi" value="Terverifikasi" <?= $mitra['status_verifikasi'] == 'Terverifikasi' ? 'checked' : ''; ?>>
                    <label class="form-check-label" for="terverifikasi">Terverifikasi</label>
                </div>
                <div class="form-check form-check-inline mb-4 mt-4">
                    <input class="form-check-input" type="radio" name="status_verifikasi" id="tidak_terverifikasi" value="Tidak Terverifikasi" <?= $mitra['status_verifikasi'] == 'Tidak Terverifikasi' ? 'checked' : ''; ?>>
                    <label class="form-check-label" for="tidak_terverifikasi">Tidak Terverifikasi</label>
                </div>
                
                <div>
                    <button type="submit" class="btn btn-success mb-3">Simpan</button>
                    <button type="button" class="btn btn-danger mb-3" onclick="history.back();">Kembali</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endsection(); ?>
