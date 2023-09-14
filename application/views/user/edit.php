<div id="main-content">
    <div class="page-heading">
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-8">
                            <form action="<?= base_url('user/edit') ?>" method="post" enctype="multipart/form-data" role="form">
                                <div id="input" class="p-5">
                                    <div class="preview">
                                        <div>
                                            <label for="regular-form-1" class="form-label">Username</label>
                                            <input type="text" class="form-control" id="username" name="username" value="<?= $user['username']; ?>">
                                        </div>
                                        <div>
                                            <label for="regular-form-1" class="form-label mt-2">Nama Instalasi</label>
                                            <input type="text" class="form-control" id="nmlokasi" name="nmlokasi" value="<?= $user['nmlokasi']; ?>">
                                        </div>
                                        <div>
                                            <label for="regular-form-1" class="form-label mt-2">Singkatan Instalasi</label>
                                            <input type="text" class="form-control" id="singkatan_lokasi" name="singkatan_lokasi" value="<?= $user['singkatan_lokasi']; ?>">
                                        </div>
                                        <div>
                                            <label for="regular-form-1" class="form-label mt-2">Gambar Profil</label>
                                            <div class="intro-y flex items-center">
                                                <div class="intro-y col-span-12">
                                                    <input type="file" class="form-control" id="gambar" name="gambar" value="<?= $user['gambar']; ?>">
                                                </div>
                                                <div class="intro-y col-span-12">
                                                    <input type="text" class="form-control" id="gambar" name="gambar" value="<?= $user['gambar']; ?>" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <label for="regular-form-1" class="form-label">Role</label>
                                            <input type="text" class="form-control" id="role" name="role" value="<?= $user['role']; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row justify-content-end">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary mt-5">Edit</button>
                                            <a href="<?php echo site_url('profil') ?>" class="btn btn-default">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>