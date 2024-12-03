<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <a imgsrc="../public/favicon.ico"></a>
    <!-- bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
    <footer class="bg-primary">
      <p class="text-start my-3 mx-3">&copy; KKPRI</p>
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
            url: '/admin/statusr/getChartData', // URL endpoint untuk mendapatkan data chart
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
