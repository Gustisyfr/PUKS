<?= $this->extend('template_login/index'); ?>

<?= $this->section('content-login'); ?>
    <div class="container">
        <!-- Outer Row -->
         <div class="row justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-md-6">
                <div class="card o-hidden border-0 shadow-lg my-5" style="background-color: rgba(255, 255, 255, 0.9);">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Pengajuan Usulan Kerja Sama</h1>
                                        <h1 class="h4 text-gray-900 mb-4">Kementrian Kelautan dan Perikanan</h1>
                                    </div>
                                    <!-- Form Login -->
                                    <form class="user" method="POST" action="<?= base_url('/login/processLogin'); ?>">
                                        <?= csrf_field(); ?> <!-- CSRF Protection -->
                                        <!-- Username or Email -->
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputUsername" aria-describedby="UsernameHelp"
                                                placeholder="Username atau Email" name="username" value="<?= old('username'); ?>">
                                        </div>
                                        <!-- Password -->
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password" name="password">
                                        </div>
                                        <!-- Remember Me Checkbox -->
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Ingat saya</label>
                                            </div>
                                        </div>
                                        <!-- Login Button -->
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Masuk
                                        </button>
                                    </form>
                                    
                                    <!-- Error Message -->
                                    <?php if(session()->getFlashdata('error')): ?>
                                        <div class="alert alert-danger mt-3">
                                            <?= session()->getFlashdata('error'); ?>
                                        </div>
                                    <?php endif; ?>

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
    </div>
<?= $this->endSection(); ?>
