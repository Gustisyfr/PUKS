<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="my-4">Status Rekomendasi</h2>
            <table class="table table-bordered">
            <thead class="table-dark text-center align-middle">
                <tr>
                <th scope="col">No</th>
                <th scope="col">No Registrasi</th>
                <th scope="col">Nama Mitra</th>
                <th scope="col">Jenis Mitra</th>
                <th scope="col">Bentuk Kerja Sama</th>
                <th scope="col">Dukungan Program</th>
                <th scope="col">Memo</th>
                <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody class="table-light">
                <?php if (empty($statusr)): ?>
                    <tr>
                        <td colspan="12" class="text-center" style="font-size: xx-large; font-weight: bold; color: red;">Tidak ada data!</td>
                    </tr>
                <?php else: ?>
                <?php $i=1; ?>
                <?php foreach($statusr as $r) : ?>
                <tr>
                <th scope="row" class="text-center"><?= $i++; ?></th>
                <td style="font-size: small;"><?= $r['nomor_registrasi']; ?></td>
                <td><?= $r['nama_mitra']; ?></td>
                <td><?= $r['jenis_mitra']; ?></td>
                <td><?= $r['bentuk_kerjasama']; ?></td>
                <td><?= $r['bentuk_dukungan']; ?> / <p><?= $r['bentuk_dukungan_opsional']; ?></p></td>
                <td><a href="<?= base_url('uploads/' . $r['file_memo']); ?>" target="_blank" class="form-control bg-light"><?= $r['file_memo']; ?></a></td>
                <td>
                    <?php if($r['status_rekomendasi'] == 'Direkomendasikan'): ?>
                        <button type="button" class="btn btn-success me-auto btn-custom">Direkomendasikan</button>
                    <?php elseif($r['status_rekomendasi'] == 'Belum Direkomendasikan'): ?>
                        <button type="button" class="btn btn-danger me-auto btn-custom" style="font-size: small;">Belum Direkomendasikan</button>
                    <?php elseif($r['status_rekomendasi'] == 'Revisi'): ?>
                        <button type="button" class="btn btn-danger me-auto btn-custom">Revisi</button>
                    <?php else: ?>
                        <button type="button" class="btn btn-secondary me-auto btn-custom" style="font-size: small;">Menunggu Rekomendasi</button>
                    <?php endif; ?>
                </td>
                </tr>
                <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
            </table>
            
            <div>
                <button type="button" class="btn btn-danger mb-3" onclick="window.location.href='<?= base_url('/home') ?>';">Kembali</button>
            </div>
        </div>
    </div>
</div>
<?= $this->endsection(''); ?>