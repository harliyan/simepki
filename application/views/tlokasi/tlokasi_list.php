<div class="intro-y grid grid-cols-12 sm:gap-6 gap-y-6 box px-5 py-8 mt-5">
    <div class="intro-y col-span-12 flexjustify-center">
        <?php echo anchor(site_url('tlokasi/create'), 'Create', 'class="btn btn-primary"'); ?>
        <?php echo anchor(site_url('tlokasi/excel'), 'Excel', 'class="btn btn-twitter text-white"'); ?>
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
                    <th data-priority="2">Kode Lokasi</th>
                    <th data-priority="2">Lokasi</th>
                    <th data-priority="2">Singkatan</th>
                    <th data-priority="2">Alamat</th>
                    <th data-priority="2">No. Telp</th>
                    <th data-priority="2">Email</th>
                    <th data-priority="2">Website</th>
                    <th data-priority="7">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($tlokasi_data as $d) : ?>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $d['kdlokasi'] ?></td>
                        <td><?= $d['nmlokasi'] ?></td>
                        <td><?= $d['singkatan_lokasi'] ?></td>
                        <td><?= $d['almt_kantor'] ?></td>
                        <td><?= $d['no_telp_kantor'] ?></td>
                        <td><?= $d['email_kantor'] ?></td>
                        <td><?= $d['website_kantor'] ?></td>
                        <td style="text-align:center" width="120px">
                            <a href="<?php echo site_url('tlokasi/read/' . $d['id']) ?>" class="btn btn-sm btn-elevated-primary"><i data-lucide="align-left" class="w-4 h-4"></i></a>
                            <a href="<?php echo site_url('tlokasi/update/' . $d['id']) ?>" class="btn btn-sm btn-elevated-warning"><i data-lucide="edit-2" class="w-4 h-4"></i></a>
                            <a href="<?php echo site_url('tlokasi/delete/' . $d['id']) ?>" class="btn btn-sm btn-elevated-danger" onclick="return confirm('are you sure?')"><i data-lucide="trash-2" class="w-4 h-4"></i></a>
                            <?php $role = $this->session->userdata('role');
                            ?>
                            <!-- <a href="<?php echo site_url('tlokasi/delete/' . $d['id']) ?>" class="btn btn-sm btn-elevated-danger" onclick="return confirm('are you sure?')"><i data-lucide="trash-2" class="w-4 h-4"></i></a> -->
                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>

        </table>
    </div>
    <!-- END: General Report -->
</div>