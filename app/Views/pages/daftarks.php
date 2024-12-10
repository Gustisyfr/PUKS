<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="my-4">Daftar Kerja Sama</h2>
            
            <form action="/daftarks/save" method="post">
                <?= csrf_field(); ?>
                <!-- nama mitra -->
                <div class="form-group mb-3">
                    <label for="nama_mitra" class="form-label">Nama Mitra</label>
                    <input type="text" class="form-control" id="nama_mitra" name="nama_mitra" placeholder="Masukan Nama Mitra" autofocus>
                </div>
                <!-- jenis mitra -->
                <div class="form-group mb-3">
                <label for="jenis_mitra" class="form-label">Jenis Mitra</label>
                <select class="form-select" id="jenis_mitra" name="jenis_mitra" aria-label="Default select example">
                    <option value="">Pilih Jenis Mitra</option>
                    <option value="Kementrian/Lembaga">Kementrian/Lembaga</option>
                    <option value="Pemerintah Daerah">Pemerintah Daerah</option>
                    <option value="Badan Usaha Milik Negara">Badan Usaha Milik Negara</option>
                    <option value="Universitas/Perguruan Tinggi">Universitas/Perguruan Tinggi</option>
                    <option value="Swasta">Swasta</option>
                    <option value="Organisasi Masyarakat/Lembaga Swadaya Masyarakat">Organisasi Masyarakat/Lembaga Swadaya Masyarakat</option>
                </select>
                </div>
                <!-- alamat -->
                <div class="form-group mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat Lengkap" rows="3"></textarea>
                </div>
                <!-- email -->
                <div class="form-group mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukan email Aktif">
                </div>
                <!-- no telepon -->
                <div class="form-group mb-3">
                    <label for="notel" class="form-label">Nomor Telepon</label>
                    <input type="tel" class="form-control" id="notel" name="notel" placeholder="Masukan Nomor Telepon Aktif">
                </div>
            
                <div>
                    <button type="submit" class="btn btn-success mb-3">Simpan</button>
                    <button type="button" class="btn btn-danger mb-3" onclick="window.location.href='<?= base_url('/home') ?>';">Kembali</button>
                </div>

            </form>

        </div>
    </div>
</div>
<?= $this->endsection(''); ?>