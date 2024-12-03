<?= $this->extend('layout/template') ?>


<?= $this->section('content') ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div id="carouselExampleCaptions" class="carousel slide my-5">
                <div class="carousel-indicators">
                    <?php foreach ($kegiatan as $index => $k) : ?>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?= $index ?>" class="<?= $index === 0 ? 'active' : '' ?>" aria-current="true" aria-label="Slide <?= $index + 1 ?>"></button>
                    <?php endforeach; ?>
                </div>
                <div class="carousel-inner">
                    <?php foreach ($kegiatan as $index => $k) : ?>
                    <div class="carousel-item <?= $index === 0 ? 'active' : '' ?> c-item">
                    <img src="<?= base_url('/uploads/images/' . $k['gambar']) ?>" class="d-block w-100 c-img" alt="slide <?= $index + 1 ?>">
                    <div class="carousel-caption d-none d-md-block">
                    <h5><?= esc($k['judul']) ?></h5>
                    <p><?= esc($k['deskripsi']) ?></p>
                    </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>


