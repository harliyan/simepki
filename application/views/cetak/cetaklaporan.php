<div class="intro-y grid grid-cols-12 sm:gap-6 gap-y-6 box px-5 py-8">
    <div class="intro-y col-span-12 flexjustify-center">
        <center>
            <h2>
                LAPORAN PROGRAM KERJA <?php echo $instalasi[0]["nmlokasi"]; ?>
                <br>
                TAHUN <?php echo date("Y"); ?>
            </h2>

        </center>
        <div style="margin-top: 8px" id="message">
            <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
        </div>
    </div>
    <!-- BEGIN: General Report -->

    <script>
        function exportTableToExcel(tableID, filename = '') {
            var downloadLink;
            var dataType = 'application/vnd.ms-excel';
            var tableSelect = document.getElementById(tableID);
            var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');

            // Specify file name
            filename = filename ? filename + '.xls' : 'excel_data.xls';

            // Create download link element
            downloadLink = document.createElement("a");

            document.body.appendChild(downloadLink);

            if (navigator.msSaveOrOpenBlob) {
                var blob = new Blob(['\ufeff', tableHTML], {
                    type: dataType
                });
                navigator.msSaveOrOpenBlob(blob, filename);
            } else {
                // Create a link to the file
                downloadLink.href = 'data:' + dataType + ', ' + tableHTML;

                // Setting the file name
                downloadLink.download = filename;

                //triggering the function
                downloadLink.click();
            }
        }
    </script>

    <div class="col-span-12">
        <style>
            table,
            td,
            th,
            tr {
                border: 1px solid #000000;
                padding: 4px;
            }

            table {
                display: block;
                overflow-x: auto;
                /* white-space: nowrap; */
            }
        </style>
        <button class="btn btn-twitter mb-4" onclick="exportTableToExcel('coba', 'Download Excel')">Export Excel</button>

        <table class="display nowrap" style="width: 100%;" id="coba">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Indikator</th>
                    <th colspan="6">Januari</th>
                    <th colspan="6">Februari</th>
                    <th colspan="6">Maret</th>
                    <th colspan="6">April</th>
                    <th colspan="6">Mei</th>
                    <th colspan="6">Juni</th>
                    <th colspan="6">Juli</th>
                    <th colspan="6">Agustus</th>
                    <th colspan="6">September</th>
                    <th colspan="6">Oktober</th>
                    <th colspan="6">November</th>
                    <th colspan="6">Desember</th>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <th><small>KUANTITAS</small></th>
                    <th><small>KUALITAS</small></th>
                    <th><small>WAKTU</small></th>
                    <th><small>PROGRES/KENDALA</small></th>
                    <th><small>BUKTI DUKUNG</small></th>
                    <th><small>CATATAN BIDANG</small></th>
                    <th><small>KUANTITAS</small></th>
                    <th><small>KUALITAS</small></th>
                    <th><small>WAKTU</small></th>
                    <th><small>PROGRES/KENDALA</small></th>
                    <th><small>BUKTI DUKUNG</small></th>
                    <th><small>CATATAN BIDANG</small></th>
                    <th><small>KUANTITAS</small></th>
                    <th><small>KUALITAS</small></th>
                    <th><small>WAKTU</small></th>
                    <th><small>PROGRES/KENDALA</small></th>
                    <th><small>BUKTI DUKUNG</small></th>
                    <th><small>CATATAN BIDANG</small></th>
                    <th><small>KUANTITAS</small></th>
                    <th><small>KUALITAS</small></th>
                    <th><small>WAKTU</small></th>
                    <th><small>PROGRES/KENDALA</small></th>
                    <th><small>BUKTI DUKUNG</small></th>
                    <th><small>CATATAN BIDANG</small></th>
                    <th><small>KUANTITAS</small></th>
                    <th><small>KUALITAS</small></th>
                    <th><small>WAKTU</small></th>
                    <th><small>PROGRES/KENDALA</small></th>
                    <th><small>BUKTI DUKUNG</small></th>
                    <th><small>CATATAN BIDANG</small></th>
                    <th><small>KUANTITAS</small></th>
                    <th><small>KUALITAS</small></th>
                    <th><small>WAKTU</small></th>
                    <th><small>PROGRES/KENDALA</small></th>
                    <th><small>BUKTI DUKUNG</small></th>
                    <th><small>CATATAN BIDANG</small></th>
                    <th><small>KUANTITAS</small></th>
                    <th><small>KUALITAS</small></th>
                    <th><small>WAKTU</small></th>
                    <th><small>PROGRES/KENDALA</small></th>
                    <th><small>BUKTI DUKUNG</small></th>
                    <th><small>CATATAN BIDANG</small></th>
                    <th><small>KUANTITAS</small></th>
                    <th><small>KUALITAS</small></th>
                    <th><small>WAKTU</small></th>
                    <th><small>PROGRES/KENDALA</small></th>
                    <th><small>BUKTI DUKUNG</small></th>
                    <th><small>CATATAN BIDANG</small></th>
                    <th><small>KUANTITAS</small></th>
                    <th><small>KUALITAS</small></th>
                    <th><small>WAKTU</small></th>
                    <th><small>PROGRES/KENDALA</small></th>
                    <th><small>BUKTI DUKUNG</small></th>
                    <th><small>CATATAN BIDANG</small></th>
                    <th><small>KUANTITAS</small></th>
                    <th><small>KUALITAS</small></th>
                    <th><small>WAKTU</small></th>
                    <th><small>PROGRES/KENDALA</small></th>
                    <th><small>BUKTI DUKUNG</small></th>
                    <th><small>CATATAN BIDANG</small></th>
                    <th><small>KUANTITAS</small></th>
                    <th><small>KUALITAS</small></th>
                    <th><small>WAKTU</small></th>
                    <th><small>PROGRES/KENDALA</small></th>
                    <th><small>BUKTI DUKUNG</small></th>
                    <th><small>CATATAN BIDANG</small></th>
                    <th><small>KUANTITAS</small></th>
                    <th><small>KUALITAS</small></th>
                    <th><small>WAKTU</small></th>
                    <th><small>PROGRES/KENDALA</small></th>
                    <th><small>BUKTI DUKUNG</small></th>
                    <th><small>CATATAN BIDANG</small></th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($tsubindikator as $d) : ?>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $d['indikator'] ?></td>
                        <td><?= $d['januari1'] ?></td>
                        <td><?= $d['januari1a'] ?></td>
                        <td><?= $d['januari1b'] ?></td>
                        <td><?= $d['januari2'] ?></td>
                        <td><a href="<?= $d['januarib'] ?>" target="_blank"><?= $d['januarib'] ?></a></td>
                        <td><?= $d['januaric'] ?></td>
                        <td><?= $d['februari1'] ?></td>
                        <td><?= $d['februari1a'] ?></td>
                        <td><?= $d['februari1b'] ?></td>
                        <td><?= $d['februari2'] ?></td>
                        <td><a href="<?= $d['februarib'] ?>" target="_blank"><?= $d['februarib'] ?></a></td>
                        <td><?= $d['februaric'] ?></td>
                        <td><?= $d['maret1'] ?></td>
                        <td><?= $d['maret1a'] ?></td>
                        <td><?= $d['maret1b'] ?></td>
                        <td><?= $d['maret2'] ?></td>
                        <td><a href="<?= $d['maretb'] ?>" target="_blank"><?= $d['maretb'] ?></a></td>
                        <td><?= $d['maretc'] ?></td>
                        <td><?= $d['april1'] ?></td>
                        <td><?= $d['april1a'] ?></td>
                        <td><?= $d['april1b'] ?></td>
                        <td><?= $d['april2'] ?></td>
                        <td><a href="<?= $d['aprilb'] ?>" target="_blank"><?= $d['aprilb'] ?></a></td>
                        <td><?= $d['aprilc'] ?></td>
                        <td><?= $d['mei1'] ?></td>
                        <td><?= $d['mei1a'] ?></td>
                        <td><?= $d['mei1b'] ?></td>
                        <td><?= $d['mei2'] ?></td>
                        <td><a href="<?= $d['meib'] ?>" target="_blank"><?= $d['meib'] ?></a></td>
                        <td><?= $d['meic'] ?></td>
                        <td><?= $d['juni1'] ?></td>
                        <td><?= $d['juni1a'] ?></td>
                        <td><?= $d['juni1b'] ?></td>
                        <td><?= $d['juni2'] ?></td>
                        <td><a href="<?= $d['junib'] ?>" target="_blank"><?= $d['junib'] ?></a></td>
                        <td><?= $d['junic'] ?></td>
                        <td><?= $d['juli1'] ?></td>
                        <td><?= $d['juli1a'] ?></td>
                        <td><?= $d['juli1b'] ?></td>
                        <td><?= $d['juli2'] ?></td>
                        <td><a href="<?= $d['julib'] ?>" target="_blank"><?= $d['julib'] ?></a></td>
                        <td><?= $d['julic'] ?></td>
                        <td><?= $d['agustus1'] ?></td>
                        <td><?= $d['agustus1a'] ?></td>
                        <td><?= $d['agustus1b'] ?></td>
                        <td><?= $d['agustus2'] ?></td>
                        <td><a href="<?= $d['agustusb'] ?>" target="_blank"><?= $d['agustusb'] ?></a></td>
                        <td><?= $d['agustusc'] ?></td>
                        <td><?= $d['september1'] ?></td>
                        <td><?= $d['september1a'] ?></td>
                        <td><?= $d['september1b'] ?></td>
                        <td><?= $d['september2'] ?></td>
                        <td><a href="<?= $d['septemberb'] ?>" target="_blank"><?= $d['septemberb'] ?></a></td>
                        <td><?= $d['septemberc'] ?></td>
                        <td><?= $d['oktober1'] ?></td>
                        <td><?= $d['oktober1a'] ?></td>
                        <td><a href="<?= $d['oktoberb'] ?>" target="_blank"><?= $d['oktoberb'] ?></a></td>
                        <td><?= $d['oktober2'] ?></td>
                        <td><?= $d['oktoberb'] ?></td>
                        <td><?= $d['oktoberc'] ?></td>
                        <td><?= $d['november1'] ?></td>
                        <td><?= $d['november1a'] ?></td>
                        <td><a href="<?= $d['novemberb'] ?>" target="_blank"><?= $d['novemberb'] ?></a></td>
                        <td><?= $d['november2'] ?></td>
                        <td><?= $d['novemberb'] ?></td>
                        <td><?= $d['novemberc'] ?></td>
                        <td><?= $d['desember1'] ?></td>
                        <td><?= $d['desember1a'] ?></td>
                        <td><a href="<?= $d['desemberb'] ?>" target="_blank"><?= $d['desemberb'] ?></a></td>
                        <td><?= $d['desember2'] ?></td>
                        <td><?= $d['desemberb'] ?></td>
                        <td><?= $d['desemberc'] ?></td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>

        </table>
    </div>
    <!-- END: General Report -->
</div>