<div id="main-content">
    <div class="page-heading">
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <?= $this->session->flashdata('message'); ?>
                            <form action="<?= base_url('user/changepassword') ?>" method="post">
                                <div class="form-group mt-4">
                                    <label for="current_password">Current Password</label>
                                    <input type="password" class="form-control" id="current_password" name="current_password">
                                    <?php echo form_error('current_password', '<p class="text-danger pl-3">', ' </p>'); ?>
                                </div>
                                <div class="form-group mt-2">
                                    <label for="new_password1">New Password</label>
                                    <input type="password" class="form-control" id="new_password1" name="new_password1">
                                    <?php echo form_error('new_password1', '<p class="text-danger pl-3">', ' </p>'); ?>
                                </div>
                                <div class="form-group mt-2">
                                    <label for="new_password2">Repeat Password</label>
                                    <input type="password" class="form-control" id="new_password2" name="new_password2">
                                    <?php echo form_error('new_password2', '<p class="text-danger pl-3">', ' </p>'); ?>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary mt-5">Change Password</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>