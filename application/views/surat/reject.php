<div class="grid grid-cols-12 gap-6">
    <div class="col-span-12 2xl:col-span-12">
        <div class="grid grid-cols-12 gap-6">
            <!-- BEGIN: General Report -->
            <div class="col-span-12 mt-4">
                <h2 class="font-medium text-center text-lg">Surat Ditolak</h2>
                <h3 class="text-gray-600 text-center mt-2 mb-4">Daftar Surat yang Ditolak oleh Verifikator</h3>
                <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                    <thead>
                        <tr>
                            <th data-priority="1">No.</th>
                            <th data-priority="2">No. Surat</th>
                            <th data-priority="3">No. Identitas</th>
                            <th data-priority="4">Nama</th>
                            <th data-priority="5">Keperluan</th>
                            <th data-priority="6">Legitimator</th>
                            <th data-priority="7">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($draft as $d) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $d['no_surat'] ?></td>
                                <td><?= $d['no_identitas'] ?></td>
                                <td><?= $d['nama_lengkap'] ?></td>
                                <td><?= $d['keperluan'] ?></td>
                                <td><?= $d['last_updated_by'] ?></td>
                                <td width="220" class="text-center">
                                    <a href="" class="btn btn-sm btn-elevated-primary"> <i data-lucide="user" class="w-4 h-4 mr-2"></i> Detail</a>
                                    <a href="" class="btn btn-sm btn-elevated-dark"> <i data-lucide="user" class="w-4 h-4 mr-2"></i> Log</a>
                                    <a href="" class="btn btn-sm btn-elevated-warning"><i data-lucide="user" class="w-4 h-4 mr-2"></i> Revisi</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>

                </table>
            </div>
            <!-- END: General Report -->
        </div>
    </div>
</div>
</div>
<!-- END: Content -->