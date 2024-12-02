<?= $this->extend('layout/template') ?>


<?= $this->section('content') ?>
<div class="container mt-5 container-custom">
    <h2 class="text-center mb-4" style="color: #007bff; font-weight: bold;">Galeri Kegiatan Kami</h2>
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <?php foreach ($kegiatan as $index => $kegiatan): ?>
            <div class="col">
                <div class="card h-100 shadow-sm d-flex flex-column">
                    <img src="<?= base_url('uploads/' . $kegiatan['image_path']); ?>" class="card-img-top" alt="<?= esc($kegiatan['judul']) ?>">
                    <div class="card-body flex-grow-1">
                        <h5 class="card-title"><?= esc($kegiatan['judul']) ?></h5>
                        <p class="card-text"><?= esc($kegiatan['deskripsi']) ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?= $this->endSection() ?>

<style>
    /* Gaya tambahan untuk mengatur tinggi minimum gambar */
    .card-img-top {
        height: 220px;
        object-fit: cover;
    }
</style>