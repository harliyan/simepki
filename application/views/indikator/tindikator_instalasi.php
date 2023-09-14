<div class="intro-y grid grid-cols-12 sm:gap-6 gap-y-6 box px-5 py-8 mt-5">
    <!-- BEGIN: General Report -->
    <div class="col-span-12 mt-4">
        <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
            <thead>
                <tr>
                    <th data-priority="1">No.</th>
                    <th data-priority="2">Kode Indikator</th>
                    <th data-priority="2">Indikator</th>
                    <th data-priority="2">Date_Created</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($tindikator as $d) : ?>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $d['kdindikator'] ?></td>
                        <td><?= $d['indikator'] ?></td>
                        <td><?= substr($d['date_created'], 0, 10)  ?></td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>

        </table>
    </div>
    <!-- END: General Report -->
</div>