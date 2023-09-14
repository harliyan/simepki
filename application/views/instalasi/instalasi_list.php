<div class="intro-y grid grid-cols-12 sm:gap-6 gap-y-6 box px-5 py-8 mt-5">
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
                    <th data-priority="2">Lokasi</th>
                    <th data-priority="2">Role</th>
                    <th data-priority="7">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($instalasi as $d) : ?>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $d['nmlokasi'] ?></td>
                        <td><?= $d['role'] ?></td>
                        <td style="text-align:center" width="120px">
                            <a href="<?php echo site_url('instalasi/read/' . $d['kdlokasi']) ?>" class="btn btn-sm btn-elevated-primary"><i data-lucide="align-left" class="w-4 h-4"></i> Lihat Indikator</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>

        </table>
    </div>
    <!-- END: General Report -->
</div>