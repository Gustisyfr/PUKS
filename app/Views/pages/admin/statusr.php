<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-3">Status Rekomendasi</h2>
            <table class="table">
            <thead>
                <tr>
                <th scope="col">No Registrasi</th>
                <th scope="col">Nama Mitra</th>
                <th scope="col">Bentuk Kerja Sama</th>
                <th scope="col">Jenis Mitra</th>
                <th scope="col">Bentuk Dukungan Program KKP</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1; ?>
                <?php foreach($statusr as $r) : ?>
                <tr>
                <th scope="row"><?= $i++; ?></th>
                <td><?= $r['nama_mitra']; ?></td>
                <td><?= $r['bentuk_kerja_sama']; ?></td>
                <td><?= $r['jenis_mitra']; ?></td>
                <td><?= $r['bentuk_dukungan_program_kkp']; ?></td>
                <td><a href="" class="btn btn-success">Terverifikasi</a></td>
                <td><a href="" class="btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                        </svg>
                    </a>
                </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            </table>
            <button type="button" class="btn btn-danger mb-3" onclick="window.location.href='<?= base_url('/') ?>';">Kembali</button>
        </div>
    </div>
</div>
<?= $this->endsection(''); ?>