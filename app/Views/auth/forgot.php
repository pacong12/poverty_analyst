<?= $this->extend('auth/template'); ?>
<!-- Outer Row -->
<?= $this->Section('content'); ?>
<div class="row justify-content-center">

    <div class="col-xl-6 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <!-- <div class="col-lg-6 d-none d-lg-block bg-password-image"></div> -->
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h2 class="card-header">Lupa Kata Sandi?
                                </h2>
                                <p class="mb-4">We get it, stuff happens. Just enter your email address below
                                    and we'll send you a link to reset your password!</p>
                                <?= view('Myth\Auth\Views\_message_block') ?>


                            </div>

                            <form class="user" action="<?= url_to('forgot') ?>" method="post">
                                <?= csrf_field() ?>
                                <div class="form-group">
                                    <label for="email">Lupa Sandi </label>

                                    <input type="email" class="form-control form-control-user  <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" id="exampleInputEmail" name="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>">
                                    <div class="invalid-feedback">
                                        <?= session('errors.email') ?>
                                    </div>
                                </div>
                                <button href=" login.html" type="submit" class="btn btn-primary btn-user btn-block">
                                    RESET SANDI
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?= base_url('register') ?>">Buat Akun Baru</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="<?= base_url('login') ?>">Sudah Punya Akun? Masuk!!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
<?= $this->endSection('content'); ?>