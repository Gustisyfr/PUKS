<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <a imgsrc="../public/favicon.ico"></a>
    <!-- bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    
  </head>
  <body>
    <?= $this->include('layout/navbar') ?>
    <?= $this->include('layout/sidebar') ?>
    
    <?php if (session()->getFlashdata('message')): ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= session()->getFlashdata('message'); ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')): ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?= session()->getFlashdata('error'); ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif; ?>

    <div class="wrapper">
    
    <main class="content container">
      <?= $this->renderSection('content') ?>  
    </main>

    <!-- footer -->
    <footer class="bg-primary mt-5 py-4">
    <div class="container text-white">
        <div class="row justify-content-center small-text">
          <div class="col-md-6">
            <div class="d-flex align-items-center mb-2">
             <img src="<?= base_url('../img/logo.svg'); ?>" alt="Logo KKP" style="width: 50px; height: auto; margin-right: 10px;">
              <h5 class="text-white text-wrap fw-bold fw-bolder small-text"style="max-width: 300px;">Kementerian Kelautan Dan Perikanan | Biro Perencanaan</h5>
            </div>
            <div>
            <p class="text-left small-text">
            JL. Medan Merdeka Timur No.16 Jakarta Pusat<br>
            Telp. (021) 3519070 EXT. 7433 – Fax. (021) 3864293<br>
            Email: humas.kkp@kkp.go.id<br>
            Call Center KKP: 141<br>
            </p>
            </div>
          </div>
            <!-- Bagian Ikon Sosial Media -->
            <div class="col-md-6 mb-3">
                <p class="text-right small-text fw-bold fw-bolder">Ikuti Kami</p>
                <div>
                    <!-- Icon Sosial Media (gunakan font awesome atau ikon lain sesuai keperluan) -->
                    <a href="https://www.facebook.com/KementerianKelautandanPerikananRI/" class="text-white me-3"><i class="bi bi-facebook"></i></a>
                    <a href="https://x.com/kkpgoid" class="text-white me-3"><i class="bi bi-twitter"></i></a>
                    <a href="https://www.instagram.com/birorenkkp/" class="text-white"><i class="bi bi-instagram"></i></a>
                </div>
            </div>
            
            <!-- Bagian Hak Cipta -->
            <div class="col-12 mt-3 text-center small-text">
                <span>&#169; <?= date('Y'); ?> Kementerian Kelautan Dan Perikanan</span>
            </div>
        </div>
    </div>
   </footer>
    
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" integrity="sha384-qlmct0AOBiA2VPZkMY3+2WqkHtIQ9lSdAsAn5RUJD/3vA5MKDgSGcdmIv4ycVxyn" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js"></script>
    <script>
    $(document).ready(function () {
        // Fetch data untuk jenis_mitra dan bentuk_kerjasama dari server
        $.ajax({
            url: 'admin/statusr/getChartData', // URL endpoint untuk mendapatkan data chart
            method: 'GET',
            dataType: 'json',
            success: function (response) {
                if (response.success) {
                    // Render Pie Chart untuk jenis_mitra
                    renderPieChart(response.jenis_mitra);

                    // Render Bar Chart untuk bentuk_kerjasama
                    renderBarChart(response.bentuk_kerjasama);
                } else {
                    console.error('Gagal mengambil data chart:', response.message);
                }
            },
            error: function (xhr, status, error) {
                console.error('Error AJAX:', error);
            }
        });

        function renderPieChart(data) {
            const ctx = document.getElementById('jenisMitraChart').getContext('2d');
            const labels = Object.keys(data);
            const values = Object.values(data);

            new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: labels,
                    datasets: [{
                        data: values,
                        backgroundColor: [
                            '#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF', '#FF9F40'
                        ],
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'bottom',
                        },
                        title: {
                            display: true,
                            text: 'Distribusi Jenis Mitra'
                        }
                    }
                }
            });
        }

        function renderBarChart(data) {
            const ctx = document.getElementById('bentukKerjasamaChart').getContext('2d');
            const labels = Object.keys(data);
            const values = Object.values(data);

            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        data: values,
                        backgroundColor: [
                            '#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF', '#FF9F40'
                        ],
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            display: false
                        },
                        title: {
                            display: true,
                            text: 'Distribusi Bentuk Kerjasama'
                        }
                    },
                    scales: {
                        y: {
                            min: 0,
                            max: 100,
                            beginAtZero: true
                        }
                    }                    
                }
            });
        }
    });
</script>

</body>
</html>
