<?= $this->extend('layout/template') ?>


<?= $this->section('content') ?>
<!-- carousel -->
    <div class="row">
        <div class="col">
            <div id="carouselExampleCaptions" class="carousel slide carousel-slide-custom">
                <div class="carousel-indicators">
                    <?php foreach ($kegiatan as $index => $k) : ?>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?= $index ?>" class="<?= $index === 0 ? 'active' : '' ?>" aria-current="true" aria-label="Slide <?= $index + 1 ?>"></button>
                    <?php endforeach; ?>
                </div>
                <div class="carousel-inner">
                    <?php foreach ($kegiatan as $index => $k) : ?>
                    <div class="carousel-item <?= $index === 0 ? 'active' : '' ?> c-item">
                    <img src="<?= base_url('/uploads/images/' . $k['gambar']) ?>" class="d-block w-100 c-img" alt="slide <?= $index + 1 ?>">
                    <div class="carousel-caption d-none d-md-block" style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); background-color: rgba(0, 0, 0, 0.5); color: #fff;">
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

    <!-- <div class="container-progress">
        <h1 class="text-center align-middle my-5" style="color: aliceblue; padding-top: 60px;">Status Proses Persetujuan</h1>
        <div class="card-container">
            <div class="progress progress-custom" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar bg-primary" style="width: 25%">25%</div>
            </div>
        </div>
    </div> -->
 
<!-- blue economy -->
<div class="container-custom">
    <h1 class="text-center align-middle mb-3" style="color: aliceblue; padding-top: 60px;">5 Kebijakan Ekonomi Biru</h1>
    <div class="card-container-custom">
      <div class="card-custom">
        <img src="https://kkp.go.id/assets/5_kebijakan_ekonomi_biru/1.png" alt="Icon 1" class="card-img-custom">
        <div class="card-body-custom">
          <h5 class="card-title-custom">Memperluas Kawasan Konservasi Laut</h5>
        </div>
      </div>
      <div class="card-custom">
        <img src="https://kkp.go.id/assets/5_kebijakan_ekonomi_biru/2.png" alt="Icon 2" class="card-img-custom">
        <div class="card-body-custom">
          <h5 class="card-title-custom">Penangkapan Ikan Terukur Berbasis Kuota</h5>
        </div>
      </div>
      <div class="card-custom">
        <img src="https://kkp.go.id/assets/5_kebijakan_ekonomi_biru/3.png" alt="Icon 3" class="card-img-custom">
        <div class="card-body-custom">
          <h5 class="card-title-custom">Pengembangan Budidaya Laut, Pesisir, dan Darat Secara Berkelanjutan</h5>
        </div>
      </div>
      <div class="card-custom">
        <img src="https://kkp.go.id/assets/5_kebijakan_ekonomi_biru/4.png" alt="Icon 4" class="card-img-custom">
        <div class="card-body-custom">
          <h5 class="card-title-custom">Pengawasan dan Pengendalian Pesisir dan Pulau-Pulau Kecil</h5>
        </div>
      </div>
      <div class="card-custom">
        <img src="https://kkp.go.id/assets/5_kebijakan_ekonomi_biru/5.png" alt="Icon 5" class="card-img-custom">
        <div class="card-body-custom">
          <h5 class="card-title-custom">Pengelolaan Sampah Plastik di Laut</h5>
        </div>
      </div>
    </div>
</div>

<!-- chart -->
<div class="container my-5">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header" style="background-color: rgb(0, 42, 82);">
                    <h3 class="text-center" style="color: aliceblue;">Jenis Mitra</h3>
                </div>
                <div class="card-body">
                    <canvas id="jenisMitraChart"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header" style="background-color: rgb(0, 42, 82);">
                    <h3 class="text-center" style="color: aliceblue;">Bentuk Kerjasama</h3>
                </div>
                <div class="card-body-chart">
                    <canvas id="bentukKerjasamaChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- daftar mitra yang memberikan dukungan -->
<div class="container-my5">
  <div class="row">
    <div class="col-md-12">
      <div class="card content-justify-center">
        <div class="card-header" style="background-color: rgb(0, 42, 82);">
          <h3 class="text-center mt-3" style="color: aliceblue;">Dukungan Mitra dalam Kebijakan Ekonomi Biru</h3>
          <!-- Memperluas Kawasan Konservasi Laut -->
          <div class="row">
            <div class="col-md-6">
              <div class="card mt-4 mb-4 mx-3">
                <div class="card-header" style="background-color: rgb(0, 42, 82);">
                  <h6 class="text-center" style="color: aliceblue;">Memperluas Kawasan Konservasi Laut</h6>
                </div>
                <div class="card-body">
                  <div class="table-responsive" style="max-height: 300px; overflow-y: auto;">
                    <table class="table table-bordered table-striped">
                      <thead class="table-primary text-center align-middle">
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Nama Mitra</th>
                        </tr>
                      </thead>
                      <tbody class="table-light">
                        <?php for ($i = 0; $i < 10; $i++) : ?>
                          <tr>
                            <th scope="row" class="text-center"><?= $i + 1 ?></th>
                            <td>Lorem Ipsum</td>
                          </tr>
                        <?php endfor; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- Penangkapan Ikan Terukur Berbasis Kuota -->
            <div class="col-md-6">
              <div class="card mt-4 mb-4 mx-3">
                <div class="card-header" style="background-color: rgb(0, 42, 82);">
                  <h6 class="text-center" style="color: aliceblue;">Penangkapan Ikan Terukur Berbasis Kuota</h6>
                </div>
                <div class="card-body">
                  <div class="table-responsive" style="max-height: 300px; overflow-y: auto;">
                    <table class="table table-bordered table-striped">
                      <thead class="table-primary text-center align-middle">
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Nama Mitra</th>
                        </tr>
                      </thead>
                      <tbody class="table-light">
                        <?php for ($i = 0; $i < 10; $i++) : ?>
                          <tr>
                            <th scope="row" class="text-center"><?= $i + 1 ?></th>
                            <td>Lorem Ipsum</td>
                          </tr>
                        <?php endfor; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Pengembangan Budidaya Laut, Pesisir, dan Darat Secara Berkelanjutan -->
          <div class="row">
          <div class="col-md-6">
            <div class="card mt-4 mb-4 mx-3">
              <div class="card-header" style="background-color: rgb(0, 42, 82);">
                <h6 class="text-center text-white">Pengembangan Budidaya Laut, Pesisir, dan Darat Secara Berkelanjutan</h6>
              </div>
              <div class="card-body">
                <div class="table-responsive" style="max-height: 300px; overflow-y: auto;">
                  <table class="table table-bordered table-striped">
                    <thead class="table-primary text-center align-middle">
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Mitra</th>
                      </tr>
                    </thead>
                    <tbody class="table-light">
                      <?php for ($i = 0; $i < 10; $i++) : ?>
                        <tr>
                          <th scope="row" class="text-center"><?= $i + 1 ?></th>
                          <td>Lorem Ipsum</td>
                        </tr>
                      <?php endfor; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- Pengawasan dan Pengendalian Pesisir dan Pulau-Pulau Kecil -->
          <div class="col-md-6">
            <div class="card mt-4 mb-4 mx-3">
              <div class="card-header" style="background-color: rgb(0, 42, 82);">
                <h6 class="text-center text-white">Pengawasan dan Pengendalian Pesisir dan Pulau-Pulau Kecil</h6>
              </div>
              <div class="card-body">
                <div class="table-responsive" style="max-height: 300px; overflow-y: auto;">
                  <table class="table table-bordered table-striped">
                    <thead class="table-primary text-center align-middle">
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Mitra</th>
                      </tr>
                    </thead>
                    <tbody class="table-light">
                      <?php for ($i = 0; $i < 10; $i++) : ?>
                        <tr>
                          <th scope="row" class="text-center"><?= $i + 1 ?></th>
                          <td>Lorem Ipsum</td>
                        </tr>
                      <?php endfor; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Pengelolaan Sampah Plastik di Laut -->
        <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="card mt-4 mb-4 mx-3">
              <div class="card-header" style="background-color: rgb(0, 42, 82);">
                <h6 class="text-center text-white">Pengelolaan Sampah Plastik di Laut</h6>
              </div>
              <div class="card-body">
                <div class="table-responsive" style="max-height: 300px; overflow-y: auto;">
                  <table class="table table-bordered table-striped">
                    <thead class="table-primary text-center align-middle">
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Mitra</th>
                      </tr>
                    </thead>
                    <tbody class="table-light">
                      <?php for ($i = 0; $i < 10; $i++) : ?>
                        <tr>
                          <th scope="row" class="text-center"><?= $i + 1 ?></th>
                          <td>Lorem Ipsum</td>
                        </tr>
                      <?php endfor; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>

<!-- script chart -->
<script>
    $(document).ready(function() {
        // Ambil data dari server
        $.ajax({
            url: "<?= base_url('admin/statusr/chart-data') ?>",
            type: "GET",
            dataType: "json",
            success: function(data) {
                // data untuk Pie Chart (jenis mitra)
                const jenisMitraLabels = data.jenis_mitra.map(item => item.jenis_mitra);
                const jenisMitraCounts = data.jenis_mitra.map(item => item.count);

                const pieCtx = document.getElementById('jenisMitraChart').getContext('2d');
                new Chart(pieCtx, {
                    type: 'pie',
                    data: {
                        labels: jenisMitraLabels,
                        datasets: [{
                            label: 'Jenis Mitra',
                            data: jenisMitraCounts,
                            backgroundColor: ['#ff6384', '#36a2eb', '#ffce56', '#4bc0c0', '#9966ff']
                        }]
                    }
                });

                // data untuk bar chart (bentuk kerjasama)
                const bentukLabels = data.bentuk_kerjasama.map(item => item.bentuk_kerjasama);
                const bentukCounts = data.bentuk_kerjasama.map(item => item.count);

                const barCtx = document.getElementById('bentukKerjasamaChart').getContext('2d');
                new Chart(barCtx, {
                    type: 'bar',
                    data: {
                        labels: bentukLabels,
                        datasets: [{
                            label: 'Bentuk Kerjasama',
                            data: bentukCounts,
                            backgroundColor: '#4caf50',
                            borderColor: '#2e7d32',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            }
        });
    });
</script>

<?= $this->endSection() ?>


