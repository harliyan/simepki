<div class="intro-y grid grid-cols-12 sm:gap-6 gap-y-6 box px-5 py-8 mt-5">
    <div class="intro-y col-span-12 flexjustify-center">
        <?php echo anchor(site_url('utama/create'), 'Tambah Data', 'class="btn btn-primary"'); ?>
    </div>
    <!-- BEGIN: General Report -->
    <div class="col-span-12 mt-4">
        <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
            <thead>
                <tr>
                    <th data-priority="1">No.</th>
                    <th data-priority="2">Kode Jabatan</th>
                    <th data-priority="2">Nama Jabatan</th>
                    <th data-priority="7">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($tutama as $d) : ?>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $d['kode_jabatan'] ?></td>
                        <td><?= $d['nama_jabatan'] ?></td>
                        <td style="text-align:center" width="200px">
                            <a href="<?php echo site_url('utama/read/' . $d['id']) ?>" class="btn btn-sm btn-elevated-primary"><i data-lucide="align-left" class="w-4 h-4"></i></a>
                            <a href="<?php echo site_url('utama/update/' . $d['id']) ?>" class="btn btn-sm btn-elevated-warning"><i data-lucide="edit-2" class="w-4 h-4"></i></a>
                            <a href="<?php echo site_url('utama/delete/' . $d['id']) ?>" class="btn btn-sm btn-elevated-danger" onclick="return confirm('are you sure?')"><i data-lucide="trash-2" class="w-4 h-4"></i></a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>

        </table>
    </div>
    <!-- END: General Report -->
</div>

<!-- BEGIN: Modal Content -->
<div id="tambah-data" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title">
                    Tambah Data
                </h1>
            </div>
            <form action="<?= base_url('abk/utama') ?>" method="post">
                <div class="modal-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="whitespace-nowrap">Keterangan</th>
                                <th class="whitespace-nowrap">Isian</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th width="200px">1. Nama Jabatan</th>
                                <td><input type="text" class="form-control" id="nama_jabatan" name="nama_jabatan" required></td>
                            </tr>
                            <tr>
                                <th class="whitespace-nowrap">2. Kode Jabatan</th>
                                <td class="align-top"><input type="text" class="form-control" id="kode_jabatan" name="kode_jabatan" required></td>
                            </tr>
                            <tr>
                                <th class="whitespace-nowrap">3. Unit Kerja</th>
                                <th class="whitespace-nowrap"></th>
                            </tr>
                            <tr>
                                <th class="whitespace-nowrap"><span class="ml-4">a. JPT Utama</span></th>
                                <td class="align-top"><input type="text" class="form-control" id="kode_jabatan" name="kode_jabatan" required></td>
                            </tr>
                            <tr>
                                <th class="whitespace-nowrap"><span class="ml-4">a. JPT Utama</span></th>
                                <td class="align-top"><input type="text" class="form-control" id="kode_jabatan" name="kode_jabatan" required></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Cancel</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
            <!-- <form action="<?= base_url('users') ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama Instansi</label>
                        <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Nama Instansi" required>
                    </div>
                    <div class="form-group">
                        <label>Email Instansi</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control" id="password" name="password" value="pekalongan" readonly>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form> -->
        </div>
    </div>
</div>
<!-- END: Modal Content -->

<!-- BEGIN: Modal Content -->
<div id="detail" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body p-10 text-center">
                Detail Data
            </div>
        </div>
    </div>
</div>
<!-- END: Modal Content -->

<script>
    function validateForm() {
        event.preventDefault(); // prevent form submit
        var form = document.forms["myForm"]; // storing the form
        swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this imaginary file!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    form.submit();
                } else {
                    swal("Your imaginary file is safe!");
                }
            });
    }
</script>