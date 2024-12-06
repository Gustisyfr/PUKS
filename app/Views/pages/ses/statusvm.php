<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="my-4">Status Verifikasi Mitra</h2>
            <table class="table table-bordered">
            <thead class="table-dark text-center align-middle">
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nomor Registrasi</th>
                <th scope="col">Nama Mitra</th>
                <th scope="col">Jenis Mitra</th>
                <th scope="col">Alamat</th>
                <th scope="col">Kontak</th>
                <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody class="table-light">
                <?php if (empty($statusvm)): ?>
                    <tr>
                        <td colspan="12" class="text-center" style="font-size: xx-large; font-weight: bold; color: red;">Tidak ada data!</td>
                    </tr>
                <?php else: ?>
                <?php $i=1; ?>
                <?php foreach($statusvm as $vm) : ?>
                <tr>
                <th scope="row" class="text-center"><?= $i++; ?></th>
                <td style="font-size: small;"><?= $vm['nomor_registrasi']; ?></td>
                <td><?= $vm['nama_mitra']; ?></td>
                <td><?= $vm['jenis_mitra']; ?></td>
                <td><?= $vm['alamat']; ?></td>
                <td><?= $vm['email']; ?><p><?= $vm['notel']; ?></p></td>
                <td>
                    <?php if($vm['status_verifikasi'] == 'Terverifikasi'): ?>
                        <button type="button" class="btn btn-success me-auto btn-custom">Terverifikasi</button>
                    <?php elseif($vm['status_verifikasi'] == 'Tidak Terverifikasi'): ?>
                        <button type="button" class="btn btn-danger me-auto btn-custom">Tidak Terverifikasi</button>
                    <?php else: ?>
                        <button type="button" class="btn btn-secondary me-auto btn-custom">Menunggu Verifikasi</button>
                    <?php endif; ?>
                </td>   
                </tr>
                <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
            </table>
            
            <div>
                <button type="button" class="btn btn-danger mb-3" onclick="window.location.href='<?= base_url('/pages/ses/home') ?>';">Kembali</button>
            </div>
        </div>
    </div>
</div>
<?= $this->endsection(''); ?>