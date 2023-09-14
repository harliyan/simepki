<div class="grid grid-cols-12 gap-6">
    <div class="col-span-12 2xl:col-span-12">
        <div class="grid grid-cols-12 gap-6">
            <!-- BEGIN: General Report -->
            <div class="col-span-12 mt-8">
                <div class="intro-y flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">
                        Selamat Datangss, <a href="" class="font-extrabold text-theme-17">
                            <?php $role = $this->session->userdata('role');
                            echo $role; ?> ::
                            <?php
                            echo $getKdlokasi[0]["singkatan_lokasi"];
                            ?>
                        </a>
                    </h2>
                    <a href="<?= base_url('/beranda') ?>" class="ml-auto flex items-center text-primary"> <i data-lucide="refresh-ccw" class="w-4 h-4 mr-3"></i> Muat Ulang </a>
                </div>
                <div class="row">
                    <?php
                    $kdlokasi = $this->session->userdata('kdlokasi');
                    $januari =  $this->db->query("SELECT * FROM `tlaporan` JOIN `tindikator` ON `tindikator`.`kdindikator` = `tlaporan`.`kdindikator` WHERE `januaric` != '' AND `kdlokasi` = '$kdlokasi';");
                    $num = $januari->num_rows();
                    if ($num == 1) {
                        echo '<div class="alert alert-success alert-dismissible show flex items-center mb-2" role="alert">
                        <span style="color: white;">Bidang Telah Memberikan Catatan Bulan Januari</span></div>';
                    } else {
                    } ?>
                    <?php
                    $kdlokasi = $this->session->userdata('kdlokasi');
                    $februari =  $this->db->query("SELECT * FROM `tlaporan` JOIN `tindikator` ON `tindikator`.`kdindikator` = `tlaporan`.`kdindikator` WHERE `februaric` != '' AND `kdlokasi` = '$kdlokasi';");
                    // var_dump($februari);
                    // die();
                    $num = $februari->num_rows();
                    if ($num == 1) {
                        echo '<div class="alert alert-success alert-dismissible show flex items-center mb-2" role="alert">
                        <span style="color: white;">Bidang Telah Memberikan Catatan Bulan Februari</span></div>';
                    } else {
                    } ?>
                    <?php
                    $kdlokasi = $this->session->userdata('kdlokasi');
                    $maret =  $this->db->query("SELECT * FROM `tlaporan` JOIN `tindikator` ON `tindikator`.`kdindikator` = `tlaporan`.`kdindikator` WHERE `maretc` != '' AND `kdlokasi` = '$kdlokasi';");
                    $num = $maret->num_rows();
                    if ($num == 1) {
                        echo '<div class="alert alert-success alert-dismissible show flex items-center mb-2" role="alert">
                        <span style="color: white;">Bidang Telah Memberikan Catatan Bulan maret</span></div>';
                    } else {
                    } ?>
                    <?php
                    $kdlokasi = $this->session->userdata('kdlokasi');
                    $april =  $this->db->query("SELECT * FROM `tlaporan` JOIN `tindikator` ON `tindikator`.`kdindikator` = `tlaporan`.`kdindikator` WHERE `aprilc` != '' AND `kdlokasi` = '$kdlokasi';");
                    $num = $april->num_rows();
                    if ($num == 1) {
                        echo '<div class="alert alert-success alert-dismissible show flex items-center mb-2" role="alert">
                        <span style="color: white;">Bidang Telah Memberikan Catatan Bulan april</span></div>';
                    } else {
                    } ?>
                    <?php
                    $kdlokasi = $this->session->userdata('kdlokasi');
                    $mei =  $this->db->query("SELECT * FROM `tlaporan` JOIN `tindikator` ON `tindikator`.`kdindikator` = `tlaporan`.`kdindikator` WHERE `meic` != '' AND `kdlokasi` = '$kdlokasi';");
                    $num = $mei->num_rows();
                    if ($num == 1) {
                        echo '<div class="alert alert-success alert-dismissible show flex items-center mb-2" role="alert">
                        <span style="color: white;">Bidang Telah Memberikan Catatan Bulan mei</span></div>';
                    } else {
                    } ?>
                    <?php
                    $kdlokasi = $this->session->userdata('kdlokasi');
                    $juni =  $this->db->query("SELECT * FROM `tlaporan` JOIN `tindikator` ON `tindikator`.`kdindikator` = `tlaporan`.`kdindikator` WHERE `junic` != '' AND `kdlokasi` = '$kdlokasi';");
                    $num = $juni->num_rows();
                    if ($num == 1) {
                        echo '<div class="alert alert-success alert-dismissible show flex items-center mb-2" role="alert">
                        <span style="color: white;">Bidang Telah Memberikan Catatan Bulan juni</span></div>';
                    } else {
                    } ?>
                    <?php
                    $kdlokasi = $this->session->userdata('kdlokasi');
                    $juli =  $this->db->query("SELECT * FROM `tlaporan` JOIN `tindikator` ON `tindikator`.`kdindikator` = `tlaporan`.`kdindikator` WHERE `julic` != '' AND `kdlokasi` = '$kdlokasi';");
                    $num = $juli->num_rows();
                    if ($num == 1) {
                        echo '<div class="alert alert-success alert-dismissible show flex items-center mb-2" role="alert">
                        <span style="color: white;">Bidang Telah Memberikan Catatan Bulan juli</span></div>';
                    } else {
                    } ?>
                    <?php
                    $kdlokasi = $this->session->userdata('kdlokasi');
                    $agustus =  $this->db->query("SELECT * FROM `tlaporan` JOIN `tindikator` ON `tindikator`.`kdindikator` = `tlaporan`.`kdindikator` WHERE `agustusc` != '' AND `kdlokasi` = '$kdlokasi';");
                    $num = $agustus->num_rows();
                    if ($num == 1) {
                        echo '<div class="alert alert-success alert-dismissible show flex items-center mb-2" role="alert">
                        <span style="color: white;">Bidang Telah Memberikan Catatan Bulan agustus</span></div>';
                    } else {
                    } ?>
                    <?php
                    $kdlokasi = $this->session->userdata('kdlokasi');
                    $september =  $this->db->query("SELECT * FROM `tlaporan` JOIN `tindikator` ON `tindikator`.`kdindikator` = `tlaporan`.`kdindikator` WHERE `septemberc` != '' AND `kdlokasi` = '$kdlokasi';");
                    $num = $september->num_rows();
                    if ($num == 1) {
                        echo '<div class="alert alert-success alert-dismissible show flex items-center mb-2" role="alert">
                        <span style="color: white;">Bidang Telah Memberikan Catatan Bulan september</span></div>';
                    } else {
                    } ?>
                    <?php
                    $kdlokasi = $this->session->userdata('kdlokasi');
                    $oktober =  $this->db->query("SELECT * FROM `tlaporan` JOIN `tindikator` ON `tindikator`.`kdindikator` = `tlaporan`.`kdindikator` WHERE `oktoberc` != '' AND `kdlokasi` = '$kdlokasi';");
                    $num = $oktober->num_rows();
                    if ($num == 1) {
                        echo '<div class="alert alert-success alert-dismissible show flex items-center mb-2" role="alert">
                        <span style="color: white;">Bidang Telah Memberikan Catatan Bulan oktober</span></div>';
                    } else {
                    } ?>
                    <?php
                    $kdlokasi = $this->session->userdata('kdlokasi');
                    $november =  $this->db->query("SELECT * FROM `tlaporan` JOIN `tindikator` ON `tindikator`.`kdindikator` = `tlaporan`.`kdindikator` WHERE `novemberc` != '' AND `kdlokasi` = '$kdlokasi';");
                    $num = $november->num_rows();
                    if ($num == 1) {
                        echo '<div class="alert alert-success alert-dismissible show flex items-center mb-2" role="alert">
                        <span style="color: white;">Bidang Telah Memberikan Catatan Bulan november</span></div>';
                    } else {
                    } ?>
                    <?php
                    $kdlokasi = $this->session->userdata('kdlokasi');
                    $desember =  $this->db->query("SELECT * FROM `tlaporan` JOIN `tindikator` ON `tindikator`.`kdindikator` = `tlaporan`.`kdindikator` WHERE `desemberc` != '' AND `kdlokasi` = '$kdlokasi';");
                    $num = $desember->num_rows();
                    if ($num == 1) {
                        echo '<div class="alert alert-success alert-dismissible show flex items-center mb-2" role="alert">
                        <span style="color: white;">Bidang Telah Memberikan Catatan Bulan desember</span></div>';
                    } else {
                    } ?>
                </div>
                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="col-span-12 sm:col-span-6 xl:col-span-6 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-lucide="shopping-cart" class="report-box__icon text-primary"></i>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6">
                                    <?php
                                    $user = $this->session->userdata('kdlokasi');
                                    $this->db->from('tindikator');
                                    $this->db->where('kdlokasi', $user);
                                    $aa = $this->db->count_all_results();
                                    echo $aa;
                                    ?>
                                </div>
                                <div class="text-base text-slate-500 mt-1"> Jumlah Indikator</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-6 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-lucide="credit-card" class="report-box__icon text-pending"></i>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6">
                                    <?php
                                    $user = $this->session->userdata('kdlokasi');
                                    $this->db->select('*');
                                    $this->db->from('tindikator');
                                    $this->db->join('tsubindikator', 'tsubindikator.kdindikator = tindikator.kdindikator');
                                    $this->db->where('kdlokasi', $user);
                                    $aa = $this->db->count_all_results();
                                    echo $aa;
                                    ?>
                                </div>
                                <div class="text-base text-slate-500 mt-1"> Jumlah Subindikator</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- END: General Report -->



            <!-- <div class="col-span-12 grid grid-cols-12 gap-6 mt-8">
                <div class="col-span-12 sm:col-span-6 2xl:col-span-3 intro-y">
                    <div class="box p-5 zoom-in">
                        <div class="flex items-center">
                            <div class="flex-none">
                                <div class="text-lg font-medium truncate">:: List Instalasi ::</div>
                                <?php foreach ($getKdlokasi as $a) : ?>
                                    <div class="text-lg mt-1 ml-4">
                                        <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#detail<?= $a['kdlokasi']; ?>" class="btn btn-sm btn-elevated-primary"><i data-lucide="align-left" class="w-4 h-4 mr-1"></i> <?= $a['nmlokasi']; ?></a>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <!-- END: Content -->

    <!-- <div class="col-span-12 2xl:col-span-12">
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12 mt-8">
                <div class="intro-y flex items-center h-10">
                    <center>
                        <h2 class="text-lg font-medium truncate mr-5 text-center">
                            Keterisian Catatan Bidang pada <a href="" class="font-extrabold text-theme-17">
                                <?php $role = $this->session->userdata('role');
                                echo $role; ?> ::
                                <?php
                                echo $getKdlokasi[0]["singkatan_lokasi"];
                                ?>
                            </a>
                        </h2>
                    </center>
                    <a href="<?= base_url('/beranda') ?>" class="ml-auto flex items-center text-primary"> <i data-lucide="refresh-ccw" class="w-4 h-4 mr-3"></i> Muat Ulang </a>
                </div>
                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="col-span-12 sm:col-span-12 xl:col-span-12 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Bulan</th>
                                            <th>Keterisian</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td>Januari</td>
                                            <td>Isi</td>
                                        </tr>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->



    <!-- <div class="col-span-12 grid grid-cols-12 gap-6 mt-8">
                <div class="col-span-12 sm:col-span-6 2xl:col-span-3 intro-y">
                    <div class="box p-5 zoom-in">
                        <div class="flex items-center">
                            <div class="flex-none">
                                <div class="text-lg font-medium truncate">:: List Instalasi ::</div>
                                <?php foreach ($getKdlokasi as $a) : ?>
                                    <div class="text-lg mt-1 ml-4">
                                        <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#detail<?= $a['kdlokasi']; ?>" class="btn btn-sm btn-elevated-primary"><i data-lucide="align-left" class="w-4 h-4 mr-1"></i> <?= $a['nmlokasi']; ?></a>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->




</div>
</div>



<!-- BEGIN: Modal Content -->
<?php foreach ($getKdlokasi as $a) : ?>
    <div id="detail<?= $a['kdlokasi']; ?>" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <h2 class="text-lg font-medium truncate"><?php echo $a['nmlokasi'] ?></h2>
                </div>
                <div class="p-5">
                    <?php
                    $kdlokasi = $a['kdlokasi'];
                    $qindikator = $this->db->query("SELECT `tindikator`.`id`, `tindikator`.`kdindikator`, `tindikator`.`indikator`, `tindikator`.`kdlokasi`, `tsubindikator`.`kdsubindikator`, `tsubindikator`.`subindikator` FROM `tindikator` LEFT JOIN `tsubindikator` ON `tindikator`.`kdindikator` = `tsubindikator`.`kdindikator` WHERE kdlokasi = '$kdlokasi';")->result_array();
                    ?>
                    <h4 class="text-lg font-medium truncate">SUB INDIKATOR</h4>
                    <?php foreach ($qindikator as $c) : ?>
                        <p>- <?php echo $c['subindikator'] ?></p>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- END: Modal Content -->