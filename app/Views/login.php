<?= $this->extend('template_login/index'); ?>

<?= $this->section('content-login'); ?>
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Selamat Datang!</h1>
                                    </div> 
                                    <form class="user">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputUsername" aria-describedby="UsernameHelp"
                                                placeholder="Username atau Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Ingat saya</label>
                                            </div>
                                        </div>
                                        <a href="<?= base_url('/home') ?>" class="btn btn-primary btn-user btn-block">
                                            Masuk
                                        </a>
                                    </form>
                                    
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url('/forgot') ?>">Lupa Password</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url('/register') ?>">Belum punya akun? Daftar</a>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
<?= $this->endSection(); ?>