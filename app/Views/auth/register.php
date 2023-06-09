<?= $this->extend('auth/template'); ?>
<!-- Outer Row -->
<?= $this->Section('content'); ?>
<div class="row justify-content-center">
    <div class="col-xl-5 col-lg-12 col-md-9 ">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">

                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" action="<?= url_to('register') ?>" method="post">
                                <?= csrf_field() ?>
                                <div class="form-group">
                                    <input type="email" id="exampleInputEmail" class="form-control form-control-user  <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>">
                                </div>
                                <div class="form-group ">

                                    <input type="text" id="exampleFirstName" class="form-control form-control-user  <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>">


                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" name="password" id="exampleInputPassword" class="form-control form-control-user  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" name="pass_confirm" id="exampleRepeatPassword" class="form-control form-control-user<?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    <?= lang('Auth.register') ?>
                                </button>
                                <hr>

                            </form>
                            <hr>

                            <div class="text-center">
                                <a class="small" href="<?= base_url('forgot') ?>">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="<?= base_url('login') ?>">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>