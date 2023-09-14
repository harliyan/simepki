<div id="auth">

    <div class="row h-100">
        <div class="col-lg-5 col-12">
            <div id="auth-left">
                <div class="auth-logo">
                    <a href="index.html"><img src="<?= base_url('vendor/')  ?>mazer/dist/assets/images/logo/logo.png" alt="Logo"></a>
                </div>
                <h1 class="auth-title">Registration</h1>
                <p class="auth-subtitle mb-5">Registration with your data that you entered during registration.</p>
                <form method="POST" action="<?= base_url('auth/registration') ?>">
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="text" class="form-control form-control-xl" placeholder="Full Name" id="name" name="name" value="<?= set_value('name'); ?>">
                        <div class="form-control-icon">
                            <i class="bi bi-people"></i>
                        </div>
                    </div>
                    <small class="text-danger"> <?= form_error('name') ?></small>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="text" class="form-control form-control-xl" placeholder="Email" id="email" name="email" value="<?= set_value('email'); ?>">
                        <div class="form-control-icon">
                            <i class="bi bi-laptop"></i>
                        </div>
                    </div>
                    <small class="text-danger"> <?= form_error('username') ?></small>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="text" class="form-control form-control-xl" placeholder="Username" id="username" name="username" value="<?= set_value('username'); ?>">
                        <div class="form-control-icon">
                            <i class="bi bi-person"></i>
                        </div>
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <select class="form-control form-control-xl form-select" name="id_opd">
                            <?php foreach ($dropdown_peserta as $each) { ?>
                                <option value="<?php echo $each->id_opd; ?>"><?php echo $each->opd; ?></option>';
                            <?php } ?>
                        </select>
                        <div class="form-control-icon">
                            <i class="bi bi-arrow-left-circle"></i>
                        </div>
                    </div>
                    <small class="text-danger"> <?= form_error('username') ?></small>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="password" class="form-control form-control-xl" placeholder="Password" id="password1" name="password1">
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                    </div>
                    <small class="text-danger"> <?= form_error('password1') ?></small>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="password" class="form-control form-control-xl" placeholder="Repeat Password" id="password2" name="password2">
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                    </div>
                    <!-- <small class="text-danger"> <?= form_error('password2') ?></small> -->
                    <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5" type="submit">Register Account </button>
                    <div class="text-center mt-5 text-lg fs-4">
                        <p class="text-gray-600">have an account? <a href="<?= base_url('auth/index') ?>" class="font-bold">Log in</a>.</p>
                    </div>
                </form>

            </div>
        </div>
        <div class="col-lg-7 d-none d-lg-block">
            <div id="auth-right">

            </div>
        </div>
    </div>

</div>