<div class="intro-y grid grid-cols-12 sm:gap-6 gap-y-6 box px-5 py-8 mt-5">
    <div class="intro-y col-span-12 flexjustify-center">
        <?php echo anchor(site_url('tuser/create'), 'Create', 'class="btn btn-primary"'); ?>
        <?php echo anchor(site_url('tuser/excel'), 'Excel', 'class="btn btn-twitter text-white"'); ?>
    </div>
    <div class="intro-y col-span-12 flexjustify-center">
        <div style="margin-top: 8px" id="message">
            <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
        </div>
    </div>
    <!-- BEGIN: General Report -->
    <div class="col-span-12 mt-4">
        <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
            <thead>
                <tr>
                    <th data-priority="1">No.</th>
                    <th data-priority="2">Username</th>
                    <th data-priority="2">Lokasi</th>
                    <th data-priority="2">Role</th>
                    <th data-priority="2">Status</th>
                    <th data-priority="7">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($tuser_data as $d) : ?>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $d['username'] ?></td>
                        <td><?= $d['nmlokasi'] ?></td>
                        <td><?= $d['role'] ?></td>
                        <td>
                            <?php
                            if ($d['status'] == 1) {
                                echo 'AKTIF';
                            } else {
                                echo 'TIDAK AKTIF';
                            }
                            ?>
                        </td>
                        <td style="text-align:center" width="150px">
                            <a href="<?php echo site_url('tuser/read/' . $d['id']) ?>" class="btn btn-sm btn-elevated-primary"><i data-lucide="align-left" class="w-4 h-4"></i></a>
                            <a href="<?php echo site_url('tuser/update/' . $d['id']) ?>" class="btn btn-sm btn-elevated-warning"><i data-lucide="edit-2" class="w-4 h-4"></i></a>
                            <a href="<?php echo site_url('tuser/delete/' . $d['id']) ?>" class="btn btn-sm btn-elevated-danger" onclick="return confirm('are you sure?')"><i data-lucide="trash-2" class="w-4 h-4"></i></a>
                            <a href="<?php echo site_url('tuser/resetpassword/' . $d['id']) ?>" class="btn btn-sm btn-elevated-success" onclick="return confirm('Reset Default Password : 123456789 ?')"><i data-lucide="refresh-cw" class="w-4 h-4"></i></a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>

        </table>
    </div>
    <!-- END: General Report -->
</div>