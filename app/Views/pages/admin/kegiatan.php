<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="my-4">Upload Dokumentasi Kegiatan</h2>
            <form action="<?= base_url('/pages/admin/kegiatan/save') ?>" method="POST" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="form-group mb-3">
                    <label for="judul">Judul</label>
                    <input type="text" name="judul" id="judul" class="form-control" required oninput="updatePreview()">
                </div>
                <div class="form-group mb-3">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" class="form-control" required oninput="updatePreview()"></textarea>
                </div>
                <div class="form-horizontal mb-3">
                    <div class="row mb-3">
                        <label for="image" class="col-sm-1 col-form-label">Gambar</label>
                        <div class="col-sm-11">
                            <input type="file" name="image" id="image" class="form-control" required accept="image/*" onchange="previewImage(event)">
                        </div>
                    </div>
                </div>
                
                <h3 class="my-4">Pratinjau Kegiatan</h3>
                <div id="previewCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="card mb-3" style="background-color: darkgrey;">
                    <div class="card-body">
                        <div id="previewCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner mb-3">
                                <div class="carousel-item active c-item">
                                    <img id="image-preview" src="" class="d-block w-100 c-img" alt="Preview Gambar" style="max-height: 550px; object-fit: cover; display: none;">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5 id="preview-title">Judul Akan Muncul Di Sini</h5>
                                        <p id="preview-description">Deskripsi akan muncul di sini.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>

                <div>
                    <button type="submit" class="btn btn-success mb-3">Simpan</button>
                    <button type="button" class="btn btn-danger mb-3" onclick="window.location.href='<?= base_url('/home') ?>';">Kembali</button>
                </div>
            </form>
        </div>
    </div>

        

</div>

<script>
    // Fungsi untuk memperbarui preview gambar
    function previewImage(event) {
        const input = event.target;
        const preview = document.getElementById('image-preview');

        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function (e) {
                preview.src = e.target.result;
                preview.style.display = 'block'; 
            };
            reader.readAsDataURL(input.files[0]);
        } else {
            preview.src = '';
            preview.style.display = 'none'; 
        }
    }

    // untuk memperbarui judul dan deskripsi
    function updatePreview() {
        const titleInput = document.getElementById('judul').value;
        const descriptionInput = document.getElementById('deskripsi').value;

        document.getElementById('preview-title').textContent = titleInput || 'Judul Akan Muncul Di Sini';
        document.getElementById('preview-description').textContent = descriptionInput || 'Deskripsi akan muncul di sini.';
    }
</script>
<?= $this->endsection(); ?>
