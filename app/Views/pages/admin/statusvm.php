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
                <th scope="col">Aksi</th>
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
                <td> 
                    <div class="d-flex justify-content-between">
                        <button type="button" class="btn me-auto btn-success" onclick="window.location.href='<?= base_url('admin/verifikasim/'.$vm['id']); ?>';">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                            </svg>
                        </button>
                        <form action="statusvm/<?= $vm['id']; ?>" method="post">
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