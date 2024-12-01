<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h3 class="my-3">"Selamat Anda Telah Terdaftar"</h3>
            <form>
            <fieldset disabled>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">No Registrasi</label>
                    <input class="form-control" type="text" value="<?= $nomor_registrasi; ?>" aria-label="Disabled input example" disabled readonly>
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Nama Mitra</label>
                    <input class="form-control" type="text" value="<?= $nama_mitra; ?>" aria-label="Disabled input example" disabled readonly>
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Jenis Mitra</label>
                    <input class="form-control" type="text" value="<?= $jenis_mitra; ?>" aria-label="Disabled input example" disabled readonly>
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Alamat</label>
                    <input class="form-control" type="text" value="<?= $alamat; ?>" aria-label="Disabled input example" disabled readonly>
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Email</label>
                    <input class="form-control" type="text" value="<?= $email; ?>" aria-label="Disabled input example" disabled readonly>
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">No. Telepon</label>
                    <input class="form-control" type="text" value="<?= $notel; ?>" aria-label="Disabled input example" disabled readonly>
                </div>
            </fieldset>
            </form>
            
            <div>
                <button type="button" class="btn btn-success mb-3" onclick="window.location.href='<?= base_url('/pages/admin/statusvm') ?>';">Selesai</button>
            </div>
        </div>
    </div>
</div>
<?= $this->endsection(''); ?>