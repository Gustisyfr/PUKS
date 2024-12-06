<?= $this->extend('auth/template_login/index'); ?>

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
                                        <h1 class="h4 text-gray-900 mb-4"><?=lang('Auth.loginTitle', [], 'id')?></h1>
                                    </div>

                                    <?= view('Myth\Auth\Views\_message_block') ?>

                                    <form action="<?= route_to('/login') ?>" method="post" class="user">
                                        <?= csrf_field() ?>
                                    
                                    <?php if ($config->validFields === ['email']): ?>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
                                            name="login" placeholder="<?=lang('Auth.email', [], 'id')?>">
                                            <div class="invalid-feedback">
                                                <?= session('errors.login') ?>
                                            </div>
                                        </div>
                                    <?php else: ?>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
                                                name="login" placeholder="<?=lang('Auth.emailOrUsername', [], 'id')?>">
                                            <div class="invalid-feedback">
                                                <?= session('errors.login') ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>            
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" name="password" placeholder="<?=lang('Auth.password', [], 'id')?>">
                                            <div class="invalid-feedback">
                                                <?= session('errors.password') ?>
                                            </div>
                                        </div>
                                    <?php if ($config->allowRemembering): ?>    
                                        <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <label class="form-check-label">
                                            <input type="checkbox" class="custom-control-input" name="remembering" <?php if (old('remember')) : ?> checked <?php endif ?>>
                                                <?=lang('Auth.rememberMe', [], 'id')?>
                                            </label>
                                        </div>
                                    <?php endif; ?>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                        <?=lang('Auth.loginAction', [], 'id')?>
                                        </button>
                                    </form>
                                    
                                    <hr>

                                    <?php if ($config->activeResetter): ?>
                                        <div class="text-center">
                                        <p><a href="<?= url_to('auth/forgot') ?>"><?=lang('Auth.forgotYourPassword', [], 'id')?></a></p>
                                        </div>
                                    <?php endif; ?>

                                    <?php if ($config->allowRegistration) : ?>
                                        <div class="text-center">
                                        <p><a href="<?= url_to('auth/register') ?>"><?=lang('Auth.needAnAccount', [], 'id')?></a></p>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
<?= $this->endSection(); ?>