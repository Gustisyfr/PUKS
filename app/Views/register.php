<?= $this->extend('template_login/index'); ?>

<?= $this->section('content-login'); ?>
    <div class="container">
    <div class="row justify-content-center align-items-center" style="height: 100vh;">
        <div class="col-md-6">
            <div class="card o-hidden border-0 shadow-lg my-5" style="background-color: rgba(255, 255, 255, 0.9);">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                        <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Daftar</h1>
                            </div>
                            <form class="user" action="<?= base_url('/register') ?>" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputUsername" name="username"
                                        placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail" name="email"
                                        placeholder="Email">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" id="exampleInputPassword" name="password"
                                            placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" name="repeat_password"
                                            placeholder="Ulangi Password">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Daftar
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?= base_url('/forgot') ?>">Lupa password</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="<?= base_url('/login') ?>">Sudah punya akun? Masuk!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    </div>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?= base_url('/forgot') ?>">Lupa password</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="<?= base_url('/login') ?>">Sudah punya akun? Masuk!</a>
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