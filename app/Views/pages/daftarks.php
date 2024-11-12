<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="my-3">Daftar Kerja Sama</h2>
            <form action="/daftarks/save" method="post">
                <?= csrf_field(); ?>
                <!-- nama mitra -->
                <div class="form-group mb-3">
                    <label for="nama_mitra" class="form-label">Nama Mitra</label>
                    <input type="text" class="form-control <?= ($validation->hasError('nama_mitra')) ? 'is-invalid' : ''; ?>" id="nama_mitra" name="nama_mitra" placeholder="Masukan Nama Mitra"  value="<?= old('nama_mitra'); ?>" autofocus>
                    <div class="invalid-feedback"><?= $validation->getError('nama_mitra'); ?></div>
                </div>
                <!-- jenis mitra -->
                <div class="form-group mb-3">
                <label for="jenis_mitra" class="form-label">Jenis Mitra</label>
                <select class="form-select <?= ($validation->hasError('jenis_mitra')) ? 'is-invalid' : ''; ?>" id="jenis_mitra" name="jenis_mitra" aria-label="Default select example">
                    <option value="">Pilih Jenis Mitra</option>
                    <option value="Kementrian/Lembaga">Kementrian/Lembaga</option>
                    <option value="Universitas/Perguruan Tinggi">Universitas/Perguruan Tinggi</option>
                    <option value="Ormas/LSM">Ormas/LSM</option>
                </select>
                <div class="invalid-feedback"><?= $validation->getError('jenis_mitra'); ?></div>
                </div>
                <div class="form-group mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea type="text" class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>" id="alamat" name="alamat" placeholder="Masukan Alamat Lengkap" rows="3"></textarea>
                    <div class="invalid-feedback"><?= $validation->getError('alamat'); ?></div>
                </div>
                <div class="form-group mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" id="email" name="email" placeholder="Masukan email Aktif" value="<?= old('email'); ?>">
                    <div class="invalid-feedback"><?= $validation->getError('email'); ?></div>
                </div>
                <div class="form-group mb-3">
                    <label for="notel" class="form-label">Nomor Telepon</label>
                    <input type="tel" class="form-control <?= ($validation->hasError('notel')) ? 'is-invalid' : ''; ?>" id="notel" name="notel" placeholder="Masukan Nomor Telepon Aktif" value="<?= old('notel'); ?>">
                    <div class="invalid-feedback"><?= $validation->getError('notel'); ?></div>
                </div>
                
                <button type="submit" class="btn btn-success mb-3">Simpan</button>
                <button type="button" class="btn btn-danger mb-3" onclick="window.location.href='<?= base_url('/') ?>';">Kembali</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endsection(''); ?>