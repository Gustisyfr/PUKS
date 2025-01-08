<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="my-4">Status Verifikasi Dokumen</h2>
            <table class="table table-bordered">
            <thead class="table-dark text-center align-middle">
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nomor Registrasi</th>
                <th scope="col">Nama Mitra</th>
                <th scope="col">Jenis Mitra</th>
                <th scope="col">Unit Organisasi Pelaksana</th>
                <th scope="col">Satker/UPT</th>
                <th scope="col">Bentuk Kerja Sama</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody class="table-light">
                <?php if (empty($statusvd)): ?>
                    <tr>
                        <td colspan="12" class="text-center" style="font-size: xx-large; font-weight: bold; color: red;">Tidak ada data!</td>
                    </tr>
                <?php else: ?>
                <?php $i=1; ?>
                <?php foreach($statusvd as $vd) : ?>
                <tr>
                <th scope="row" class="text-center"><?= $i++; ?></th>
                <td style="font-size: small;"><?= $vd['nomor_registrasi']; ?></td>
                <td><?= $vd['nama_mitra']; ?></td>
                <td><?= $vd['jenis_mitra']; ?></td>
                <td><?= $vd['unit_organisasi']; ?></td>
                <td>
                    <?php 
                        $satker_upt = [
                            $vd['satker_upt_1'],
                            $vd['satker_upt_2'],
                            $vd['satker_upt_3'],
                            $vd['satker_upt_4'],
                            $vd['satker_upt_5'],
                            $vd['satker_upt_6'],
                            $vd['satker_upt_7'],
                            $vd['satker_upt_8'],
                            $vd['satker_upt_9']
                        ];
                        
                        $satker_upt = array_filter($satker_upt);
                        
                        if (!empty($satker_upt)) {
                            $first_satker_upt = reset($satker_upt);
                            echo $first_satker_upt;
                        } else {
                            echo "Tidak ada Satker/UPT yang dipilih.";
                        }
                    ?>
                </td>
                <td><?= $vd['bentuk_kerjasama']; ?></td>
                <td>
                    <?php if($vd['status_verifikasi'] == 'Terverifikasi'): ?>
                        <button type="button" class="btn btn-success me-auto btn-custom">Terverifikasi</button>
                    <?php elseif($vd['status_verifikasi'] == 'Revisi'): ?>
                        <button type="button" class="btn btn-danger me-auto btn-custom">Revisi</button>
                    <?php else: ?>
                        <button type="button" class="btn btn-secondary me-auto btn-custom">Menunggu Verifikasi</button>
                    <?php endif; ?>
                </td>
                <td> 
                    <div class="d-flex justify-content-between">
                        <form action="statusvd/<?= $vd['id']; ?>" method="post">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn me-auto btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');" >
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                </svg>
                            </button>
                        </form>
                    </div>
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