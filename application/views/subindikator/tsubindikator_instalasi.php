<div class="intro-y grid grid-cols-12 sm:gap-6 gap-y-6 box px-5 py-8">
    <div class="intro-y col-span-12 flexjustify-center">
        <div style="margin-top: 8px" id="message">
            <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
        </div>
        <div class="intro-y col-span-12 flexjustify-center">
            <?php echo anchor(site_url('insubindikator/create'), 'Create', 'class="btn btn-primary"'); ?>
            <?php echo anchor(site_url('insubindikator/excel'), 'Excel', 'class="btn btn-twitter text-white"'); ?>
        </div>
    </div>
    <!-- BEGIN: General Report -->
    <div class="col-span-12">
        <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
            <thead>
                <tr>
                    <th data-priority="1">No.</th>
                    <th data-priority="2">Indikator</th>
                    <th data-priority="2">Date_Created</th>
                    <th data-priority="7">Aksi</th>
                    <th data-priority="7">Isi Laporan</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($tsubindikator as $d) : ?>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $d['indikator'] ?></td>
                        <td><?= substr($d['date_created'], 0, 10)  ?></td>
                        <td style="text-align:center" width="120px">
                            <a href="<?php echo site_url('insubindikator/read/' . $d['id']) ?>" class="btn btn-sm btn-elevated-primary"><i data-lucide="align-left" class="w-4 h-4"></i></a>
                            <a href="<?php echo site_url('insubindikator/updatesub/' . $d['id']) ?>" class="btn btn-sm btn-elevated-warning"><i data-lucide="edit-2" class="w-4 h-4"></i></a>
                            <a href="<?php echo site_url('insubindikator/delete/' . $d['id']) ?>" class="btn btn-sm btn-elevated-danger" onclick="return confirm('are you sure?')"><i data-lucide="trash-2" class="w-4 h-4"></i></a>
                        </td>
                        <td style="text-align:center" width="100px">
                            <a href="<?php echo site_url('insubindikator/update/' . $d['kdindikator']) ?>" class="btn btn-sm btn-elevated-primary"> <i data-lucide="edit-2" class="w-4 h-4 mr-1"> </i> Isi Capaian</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>

        </table>
    </div>
    <!-- END: General Report -->
</div>