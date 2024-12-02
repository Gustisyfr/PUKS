<?= $this->extend('auth/template_login/index'); ?>

<?= $this->section('content-login'); ?>

<div class="container">
<div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
            
        <div class="card text-center">
                <h2 class="card-header h2 text-gray-900 mb-4"><?=lang('Auth.forgotPassword', [], 'id')?></h2>
                <div class="card-body">

                    <?= view('Myth\Auth\Views\_message_block') ?>

                    <p><?=lang('Auth.enterEmailForInstructions', [], 'id')?></p>

                    <form action="<?= url_to('forgot') ?>" method="post">
                        <?= csrf_field() ?>

                        <div class="form-group">
                            <label for="email"><?=lang('Auth.emailAddress', [], 'id')?></label>
                            <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>"
                                   name="email" aria-describedby="emailHelp" placeholder="<?=lang('Auth.email', [], 'id')?>">
                            <div class="invalid-feedback">
                                <?= session('errors.email') ?>
                            </div>
                        </div>

                        <br>

                        <button type="submit" class="btn btn-primary btn-block"><?=lang('Auth.sendInstructions', [], 'id')?></button>
                    </form>

                </div>
            </div>
            </div>
        </div>
    </div>
</div>
</div>

<?= $this->endSection(); ?>