<form action="<?php echo $action; ?>" method="post">
    <div class="grid grid-cols-12 gap-12">
        <div class="intro-y col-span-12 lg:col-span-12">
            <div class="intro-y box">
                <div class="sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <div class="form-group mt-4">
                        <label for="varchar"><?php echo form_error('kdindikator') ?></label>
                        <?php
                        $indikator = $this->db->query("SELECT * FROM `tindikator` WHERE `kdindikator` = '$kdindikator'")->result_array();
                        ?>
                        <div class="text-xl font-medium text-center">Indikator : <?php echo $indikator[0]["indikator"]; ?></div>

                        <input type="text" class="form-control" name="kdindikator" id="kdindikator" placeholder="Kdindikator" value="<?php echo $kdindikator; ?>" readonly />

                    </div>
                    <!-- <div class="form-group mt-2">
                        <label for="varchar">Target <?php echo form_error('target') ?></label>
                        <select name="target" id="target" class="form-control">
                            <option value="0">Please Select Option</option>
                            <option value="Januari" <?php if ($target == "Januari") echo 'selected="selected"'; ?>>Januari</option>
                            <option value="Februari" <?php if ($target == "Februari") echo 'selected="selected"'; ?>>Februari</option>
                            <option value="Maret" <?php if ($target == "Maret") echo 'selected="selected"'; ?>>Maret</option>
                            <option value="April" <?php if ($target == "April") echo 'selected="selected"'; ?>>April</option>
                            <option value="Mei" <?php if ($target == "Mei") echo 'selected="selected"'; ?>>Mei</option>
                            <option value="Juni" <?php if ($target == "Juni") echo 'selected="selected"'; ?>>Juni</option>
                            <option value="Juli" <?php if ($target == "Juli") echo 'selected="selected"'; ?>>Juli</option>
                            <option value="Agustus" <?php if ($target == "Agustus") echo 'selected="selected"'; ?>>Agustus</option>
                            <option value="September" <?php if ($target == "September") echo 'selected="selected"'; ?>>September</option>
                            <option value="Oktober" <?php if ($target == "Oktober") echo 'selected="selected"'; ?>>Oktober</option>
                            <option value="November" <?php if ($target == "November") echo 'selected="selected"'; ?>>November</option>
                            <option value="Desember" <?php if ($target == "Desember") echo 'selected="selected"'; ?>>Desember</option>
                        </select>
                    </div> -->
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <div class="intro-y box">
                <div class="sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <div class="text-xl font-medium text-center">Data Sekarang</div>
                    <div class="text-xl font-medium">Januari</div>
                    <div class="form-group mt-2">
                        <label for="januari1">Kuantitas <?php echo form_error('januari1') ?></label>
                        <input type="text" class="form-control" name="januari1" id="januari1" value="<?php echo $januari1; ?>" readonly />
                    </div>
                    <div class="form-group mt-2">
                        <label for="januari1">Kualitas <?php echo form_error('januari1a') ?></label>
                        <input type="text" class="form-control" name="januari1a" id="januari1a" value="<?php echo $januari1a; ?>" readonly />
                    </div>
                    <div class="form-group mt-2">
                        <label for="januari1">Waktu <?php echo form_error('januari1b') ?></label>
                        <input type="text" class="form-control" name="januari1b" id="januari1b" value="<?php echo $januari1b; ?>" readonly />
                    </div>
                    <div class="form-group mt-2">
                        <label for="januari2">Progress/Kendala Januari <?php echo form_error('januari2') ?></label>
                        <textarea class="form-control" rows="2" name="januari2" id="januari2" placeholder="-" readonly><?php echo $januari2; ?></textarea>
                    </div>
                    <div class="form-group mt-2">
                        <label for="januarib">Bukti Dukung Januari <?php echo form_error('januarib') ?></label>
                        <input type="text" class="form-control" name="januarib" id="januarib" value="<?php echo $januarib; ?>" readonly />
                        <a href="<?php echo $januarib; ?>" target="_blank" style="color:blue">Klik Di Sini</a>
                    </div>
                    <hr class="mt-4">
                    <div class="text-xl font-medium">Februari</div>
                    <div class="form-group mt-2">
                        <label for="februari1">Kuantitas <?php echo form_error('februari1') ?></label>
                        <input type="text" class="form-control" name="februari1" id="februari1" value="<?php echo $februari1; ?>" readonly />
                    </div>
                    <div class="form-group mt-2">
                        <label for="februari1">Kualitas <?php echo form_error('februari1a') ?></label>
                        <input type="text" class="form-control" name="februari1a" id="februari1a" value="<?php echo $februari1a; ?>" readonly />
                    </div>
                    <div class="form-group mt-2">
                        <label for="februari1">Waktu <?php echo form_error('februari1b') ?></label>
                        <input type="text" class="form-control" name="februari1b" id="februari1b" value="<?php echo $februari1b; ?>" readonly />
                    </div>
                    <div class="form-group mt-2">
                        <label for="februari2">Progress/Kendala Februari <?php echo form_error('februari2') ?></label>
                        <textarea class="form-control" rows="2" name="februari2" id="februari2" placeholder="-" readonly><?php echo $februari2; ?></textarea>
                    </div>
                    <div class="form-group mt-2">
                        <label for="februarib">Bukti Dukung Februari <?php echo form_error('februarib') ?></label>
                        <input type="text" class="form-control" name="februarib" id="februarib" value="<?php echo $februarib; ?>" readonly />
                        <a href="<?php echo $februarib; ?>" target="_blank" style="color:blue">Klik Di Sini</a>
                    </div>
                    <hr class="mt-4">
                    <div class="text-xl font-medium">Maret</div>
                    <div class="form-group mt-2">
                        <label for="maret1">Kuantitas <?php echo form_error('maret1') ?></label>
                        <input type="text" class="form-control" name="maret1" id="maret1" value="<?php echo $maret1; ?>" readonly />
                    </div>
                    <div class="form-group mt-2">
                        <label for="maret1">Kualitas <?php echo form_error('maret1a') ?></label>
                        <input type="text" class="form-control" name="maret1a" id="maret1a" value="<?php echo $maret1a; ?>" readonly />
                    </div>
                    <div class="form-group mt-2">
                        <label for="maret1">Waktu <?php echo form_error('maret1b') ?></label>
                        <input type="text" class="form-control" name="maret1b" id="maret1b" value="<?php echo $maret1b; ?>" readonly />
                    </div>
                    <div class="form-group mt-2">
                        <label for="maret2">Progress/Kendala Maret <?php echo form_error('maret2') ?></label>
                        <textarea class="form-control" rows="2" name="maret2" id="maret2" placeholder="-" readonly><?php echo $maret2; ?></textarea>
                    </div>
                    <div class="form-group mt-2">
                        <label for="maretb">Bukti Dukung Maret <?php echo form_error('maretb') ?></label>
                        <input type="text" class="form-control" name="maretb" id="maretb" value="<?php echo $maretb; ?>" readonly />
                        <a href="<?php echo $maretb; ?>" target="_blank" style="color:blue">Klik Di Sini</a>
                    </div>
                    <hr class="mt-4">
                    <div class="text-xl font-medium">April</div>
                    <div class="form-group mt-2">
                        <label for="april1">Kuantitas <?php echo form_error('april1') ?></label>
                        <input type="text" class="form-control" name="april1" id="april1" value="<?php echo $april1; ?>" readonly />
                    </div>
                    <div class="form-group mt-2">
                        <label for="april1">Kualitas <?php echo form_error('april1a') ?></label>
                        <input type="text" class="form-control" name="april1a" id="april1a" value="<?php echo $april1a; ?>" readonly />
                    </div>
                    <div class="form-group mt-2">
                        <label for="april1">Waktu <?php echo form_error('april1b') ?></label>
                        <input type="text" class="form-control" name="april1b" id="april1b" value="<?php echo $april1b; ?>" readonly />
                    </div>
                    <div class="form-group mt-2">
                        <label for="april2">Progress/Kendala April <?php echo form_error('april2') ?></label>
                        <textarea class="form-control" rows="2" name="april2" id="april2" placeholder="-" readonly><?php echo $april2; ?></textarea>
                    </div>
                    <div class="form-group mt-2">
                        <label for="aprilb">Bukti Dukung April <?php echo form_error('aprilb') ?></label>
                        <input type="text" class="form-control" name="aprilb" id="aprilb" value="<?php echo $aprilb; ?>" readonly />
                        <a href="<?php echo $aprilb; ?>" target="_blank" style="color:blue">Klik Di Sini</a>
                    </div>
                    <hr class="mt-4">
                    <div class="text-xl font-medium">Mei</div>
                    <div class="form-group mt-2">
                        <label for="mei1">Kuantitas <?php echo form_error('mei1') ?></label>
                        <input type="text" class="form-control" name="mei1" id="mei1" value="<?php echo $mei1; ?>" readonly />
                    </div>
                    <div class="form-group mt-2">
                        <label for="mei1">Kualitas <?php echo form_error('mei1a') ?></label>
                        <input type="text" class="form-control" name="mei1a" id="mei1a" value="<?php echo $mei1a; ?>" readonly />
                    </div>
                    <div class="form-group mt-2">
                        <label for="mei1">Waktu <?php echo form_error('mei1b') ?></label>
                        <input type="text" class="form-control" name="mei1b" id="mei1b" value="<?php echo $mei1b; ?>" readonly />
                    </div>
                    <div class="form-group mt-2">
                        <label for="mei2">Progress/Kendala Mei <?php echo form_error('mei2') ?></label>
                        <textarea class="form-control" rows="2" name="mei2" id="mei2" placeholder="-" readonly><?php echo $mei2; ?></textarea>
                    </div>
                    <div class="form-group mt-2">
                        <label for="meib">Bukti Dukung Mei <?php echo form_error('meib') ?></label>
                        <input type="text" class="form-control" name="meib" id="meib" value="<?php echo $meib; ?>" readonly />
                        <a href="<?php echo $meib; ?>" target="_blank" style="color:blue">Klik Di Sini</a>
                    </div>
                    <hr class="mt-4">
                    <div class="text-xl font-medium">Juni</div>
                    <div class="form-group mt-2">
                        <label for="juni1">Kuantitas <?php echo form_error('juni1') ?></label>
                        <input type="text" class="form-control" name="juni1" id="juni1" value="<?php echo $juni1; ?>" readonly />
                    </div>
                    <div class="form-group mt-2">
                        <label for="juni1">Kualitas <?php echo form_error('juni1a') ?></label>
                        <input type="text" class="form-control" name="juni1a" id="juni1a" value="<?php echo $juni1a; ?>" readonly />
                    </div>
                    <div class="form-group mt-2">
                        <label for="juni1">Waktu <?php echo form_error('juni1b') ?></label>
                        <input type="text" class="form-control" name="juni1b" id="juni1b" value="<?php echo $juni1b; ?>" readonly />
                    </div>
                    <div class="form-group mt-2">
                        <label for="juni2">Progress/Kendala Juni <?php echo form_error('juni2') ?></label>
                        <textarea class="form-control" rows="2" name="juni2" id="juni2" placeholder="-" readonly><?php echo $juni2; ?></textarea>
                    </div>
                    <div class="form-group mt-2">
                        <label for="junib">Bukti Dukung Juni <?php echo form_error('junib') ?></label>
                        <input type="text" class="form-control" name="junib" id="junib" value="<?php echo $junib; ?>" readonly />
                        <a href="<?php echo $junib; ?>" target="_blank" style="color:blue">Klik Di Sini</a>
                    </div>
                    <hr class="mt-4">
                    <div class="text-xl font-medium">Juli</div>
                    <div class="form-group mt-2">
                        <label for="juli1">Kuantitas <?php echo form_error('juli1') ?></label>
                        <input type="text" class="form-control" name="juli1" id="juli1" value="<?php echo $juli1; ?>" readonly />
                    </div>
                    <div class="form-group mt-2">
                        <label for="juli1">Kualitas <?php echo form_error('juli1a') ?></label>
                        <input type="text" class="form-control" name="juli1a" id="juli1a" value="<?php echo $juli1a; ?>" readonly />
                    </div>
                    <div class="form-group mt-2">
                        <label for="juli1">Waktu <?php echo form_error('juli1b') ?></label>
                        <input type="text" class="form-control" name="juli1b" id="juli1b" value="<?php echo $juli1b; ?>" readonly />
                    </div>
                    <div class="form-group mt-2">
                        <label for="juli2">Progress/Kendala Juli <?php echo form_error('juli2') ?></label>
                        <textarea class="form-control" rows="2" name="juli2" id="juli2" placeholder="-" readonly><?php echo $juli2; ?></textarea>
                    </div>
                    <div class="form-group mt-2">
                        <label for="julib">Bukti Dukung Juli <?php echo form_error('julib') ?></label>
                        <input type="text" class="form-control" name="julib" id="julib" value="<?php echo $julib; ?>" readonly />
                        <a href="<?php echo $julib; ?>" target="_blank" style="color:blue">Klik Di Sini</a>
                    </div>
                    <hr class="mt-4">
                    <div class="text-xl font-medium">Agustus</div>
                    <div class="form-group mt-2">
                        <label for="agustus1">Kuantitas <?php echo form_error('agustus1') ?></label>
                        <input type="text" class="form-control" name="agustus1" id="agustus1" value="<?php echo $agustus1; ?>" readonly />
                    </div>
                    <div class="form-group mt-2">
                        <label for="agustus1">Kualitas <?php echo form_error('agustus1a') ?></label>
                        <input type="text" class="form-control" name="agustus1a" id="agustus1a" value="<?php echo $agustus1a; ?>" readonly />
                    </div>
                    <div class="form-group mt-2">
                        <label for="agustus1">Waktu <?php echo form_error('agustus1b') ?></label>
                        <input type="text" class="form-control" name="agustus1b" id="agustus1b" value="<?php echo $agustus1b; ?>" readonly />
                    </div>
                    <div class="form-group mt-2">
                        <label for="agustus2">Progress/Kendala Agustus <?php echo form_error('agustus2') ?></label>
                        <textarea class="form-control" rows="2" name="agustus2" id="agustus2" placeholder="-" readonly><?php echo $agustus2; ?></textarea>
                    </div>
                    <div class="form-group mt-2">
                        <label for="agustusb">Bukti Dukung Agustus <?php echo form_error('agustusb') ?></label>
                        <input type="text" class="form-control" name="agustusb" id="agustusb" value="<?php echo $agustusb; ?>" readonly />
                        <a href="<?php echo $agustusb; ?>" target="_blank" style="color:blue">Klik Di Sini</a>
                    </div>
                    <hr class="mt-4">
                    <div class="text-xl font-medium">September</div>
                    <div class="form-group mt-2">
                        <label for="september1">Kuantitas <?php echo form_error('september1') ?></label>
                        <input type="text" class="form-control" name="september1" id="september1" value="<?php echo $september1; ?>" readonly />
                    </div>
                    <div class="form-group mt-2">
                        <label for="september1">Kualitas <?php echo form_error('september1a') ?></label>
                        <input type="text" class="form-control" name="september1a" id="september1a" value="<?php echo $september1a; ?>" readonly />
                    </div>
                    <div class="form-group mt-2">
                        <label for="september1">Waktu <?php echo form_error('september1b') ?></label>
                        <input type="text" class="form-control" name="september1b" id="september1b" value="<?php echo $september1b; ?>" readonly />
                    </div>
                    <div class="form-group mt-2">
                        <label for="september2">Progress/Kendala September <?php echo form_error('september2') ?></label>
                        <textarea class="form-control" rows="2" name="september2" id="september2" placeholder="-" readonly><?php echo $september2; ?></textarea>
                    </div>
                    <div class="form-group mt-2">
                        <label for="septemberb">Bukti Dukung September <?php echo form_error('septemberb') ?></label>
                        <input type="text" class="form-control" name="septemberb" id="septemberb" value="<?php echo $septemberb; ?>" readonly />
                        <a href="<?php echo $septemberb; ?>" target="_blank" style="color:blue">Klik Di Sini</a>
                    </div>
                    <hr class="mt-4">
                    <div class="text-xl font-medium">Oktober</div>
                    <div class="form-group mt-2">
                        <label for="oktober1">Kuantitas <?php echo form_error('oktober1') ?></label>
                        <input type="text" class="form-control" name="oktober1" id="oktober1" value="<?php echo $oktober1; ?>" readonly />
                    </div>
                    <div class="form-group mt-2">
                        <label for="oktober1">Kualitas <?php echo form_error('oktober1a') ?></label>
                        <input type="text" class="form-control" name="oktober1a" id="oktober1a" value="<?php echo $oktober1a; ?>" readonly />
                    </div>
                    <div class="form-group mt-2">
                        <label for="oktober1">Waktu <?php echo form_error('oktober1b') ?></label>
                        <input type="text" class="form-control" name="oktober1b" id="oktober1b" value="<?php echo $oktober1b; ?>" readonly />
                    </div>
                    <div class="form-group mt-2">
                        <label for="oktober2">Progress/Kendala Oktober <?php echo form_error('oktober2') ?></label>
                        <textarea class="form-control" rows="2" name="oktober2" id="oktober2" placeholder="-" readonly><?php echo $oktober2; ?></textarea>
                    </div>
                    <div class="form-group mt-2">
                        <label for="oktoberb">Bukti Dukung Oktober <?php echo form_error('oktoberb') ?></label>
                        <input type="text" class="form-control" name="oktoberb" id="oktoberb" value="<?php echo $oktoberb; ?>" readonly />
                        <a href="<?php echo $oktoberb; ?>" target="_blank" style="color:blue">Klik Di Sini</a>
                    </div>
                    <hr class="mt-4">
                    <div class="text-xl font-medium">November</div>
                    <div class="form-group mt-2">
                        <label for="november1">Kuantitas <?php echo form_error('november1') ?></label>
                        <input type="text" class="form-control" name="november1" id="november1" value="<?php echo $november1; ?>" readonly />
                    </div>
                    <div class="form-group mt-2">
                        <label for="november1">Kualitas <?php echo form_error('november1a') ?></label>
                        <input type="text" class="form-control" name="november1a" id="november1a" value="<?php echo $november1a; ?>" readonly />
                    </div>
                    <div class="form-group mt-2">
                        <label for="november1">Waktu <?php echo form_error('november1b') ?></label>
                        <input type="text" class="form-control" name="november1b" id="november1b" value="<?php echo $november1b; ?>" readonly />
                    </div>
                    <div class="form-group mt-2">
                        <label for="november2">Progress/Kendala November <?php echo form_error('november2') ?></label>
                        <textarea class="form-control" rows="2" name="november2" id="november2" placeholder="-" readonly><?php echo $november2; ?></textarea>
                    </div>
                    <div class="form-group mt-2">
                        <label for="novemberb">Bukti Dukung November <?php echo form_error('novemberb') ?></label>
                        <input type="text" class="form-control" name="novemberb" id="novemberb" value="<?php echo $novemberb; ?>" readonly />
                        <a href="<?php echo $novemberb; ?>" target="_blank" style="color:blue">Klik Di Sini</a>
                    </div>
                    <hr class="mt-4">
                    <div class="text-xl font-medium">Desember</div>
                    <div class="form-group mt-2">
                        <label for="desember1">Kuantitas <?php echo form_error('desember1') ?></label>
                        <input type="text" class="form-control" name="desember1" id="desember1" value="<?php echo $desember1; ?>" readonly />
                    </div>
                    <div class="form-group mt-2">
                        <label for="desember1">Kualitas <?php echo form_error('desember1a') ?></label>
                        <input type="text" class="form-control" name="desember1a" id="desember1a" value="<?php echo $desember1a; ?>" readonly />
                    </div>
                    <div class="form-group mt-2">
                        <label for="desember1">Waktu <?php echo form_error('desember1b') ?></label>
                        <input type="text" class="form-control" name="desember1b" id="desember1b" value="<?php echo $desember1b; ?>" readonly />
                    </div>
                    <div class="form-group mt-2">
                        <label for="desember2">Progress/Kendala Desember <?php echo form_error('desember2') ?></label>
                        <textarea class="form-control" rows="2" name="desember2" id="desember2" placeholder="-" readonly><?php echo $desember2; ?></textarea>
                    </div>
                    <div class="form-group mt-2">
                        <label for="desemberb">Bukti Dukung Desember <?php echo form_error('desemberb') ?></label>
                        <input type="text" class="form-control" name="desemberb" id="desemberb" value="<?php echo $desemberb; ?>" readonly />
                        <a href="<?php echo $desemberb; ?>" target="_blank" style="color:blue">Klik Di Sini</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro-y col-span-12 lg:col-span-6">
            <div class="intro-y box">
                <div class="sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <div class="text-xl font-medium text-center">Update Data</div>
                    <div class="form-group ">
                        <div class="text-xl font-medium">Januari</div>
                        <div class="form-group mt-2">
                            <label for="januari2">Kuantitas <?php echo form_error('januari1') ?></label>
                            <input type="text" class="form-control" name="januari1" id="januari1" value="<?php echo $januari1; ?>" />
                        </div>
                        <div class="form-group mt-2">
                            <label for="januari2">Kualitas <?php echo form_error('januari1a') ?></label>
                            <input type="text" class="form-control" name="januari1a" id="januari1a" value="<?php echo $januari1a; ?>" />
                        </div>
                        <div class="form-group mt-2">
                            <label for="januari2">Waktu <?php echo form_error('januari1b') ?></label>
                            <input type="text" class="form-control" name="januari1b" id="januari1b" value="<?php echo $januari1b; ?>" />
                        </div>
                        <div class="form-group mt-2">
                            <label for="januari2">Progress/Kendala Januari <?php echo form_error('januari2') ?></label>
                            <textarea class="form-control" rows="2" name="januari2" id="januari2"><?php echo $januari2; ?></textarea>
                        </div>
                        <div class="form-group mt-2">
                            <label for="januarib">Bukti Dukung Januari <?php echo form_error('januarib') ?></label>
                            <textarea class="form-control" rows="2" name="januarib" id="januarib"><?php echo $januarib; ?></textarea>
                        </div>
                        <hr class="mt-4">
                        <div class="text-xl font-medium">Februari</div>
                        <div class="form-group mt-2">
                            <label for="februari2">Kuantitas <?php echo form_error('februari1') ?></label>
                            <input type="text" class="form-control" name="februari1" id="februari1" value="<?php echo $februari1; ?>" />
                        </div>
                        <div class="form-group mt-2">
                            <label for="februari2">Kualitas <?php echo form_error('februari1a') ?></label>
                            <input type="text" class="form-control" name="februari1a" id="februari1a" value="<?php echo $februari1a; ?>" />
                        </div>
                        <div class="form-group mt-2">
                            <label for="februari2">Waktu <?php echo form_error('februari1b') ?></label>
                            <input type="text" class="form-control" name="februari1b" id="februari1b" value="<?php echo $februari1b; ?>" />
                        </div>
                        <div class="form-group mt-2">
                            <label for="februari2">Progress/Kendala Februari <?php echo form_error('februari2') ?></label>
                            <textarea class="form-control" rows="2" name="februari2" id="februari2"><?php echo $februari2; ?></textarea>
                        </div>
                        <div class="form-group mt-2">
                            <label for="februarib">Bukti Dukung Februari <?php echo form_error('februarib') ?></label>
                            <textarea class="form-control" rows="2" name="februarib" id="februarib"><?php echo $februarib; ?></textarea>
                        </div>
                        <hr class="mt-4">
                        <div class="text-xl font-medium">Maret</div>
                        <div class="form-group mt-2">
                            <label for="maret2">Kuantitas <?php echo form_error('maret1') ?></label>
                            <input type="text" class="form-control" name="maret1" id="maret1" value="<?php echo $maret1; ?>" />
                        </div>
                        <div class="form-group mt-2">
                            <label for="maret2">Kualitas <?php echo form_error('maret1a') ?></label>
                            <input type="text" class="form-control" name="maret1a" id="maret1a" value="<?php echo $maret1a; ?>" />
                        </div>
                        <div class="form-group mt-2">
                            <label for="maret2">Waktu <?php echo form_error('maret1b') ?></label>
                            <input type="text" class="form-control" name="maret1b" id="maret1b" value="<?php echo $maret1b; ?>" />
                        </div>
                        <div class="form-group mt-2">
                            <label for="maret2">Kendala Maret <?php echo form_error('maret2') ?></label>
                            <textarea class="form-control" rows="2" name="maret2" id="maret2"><?php echo $maret2; ?></textarea>
                        </div>
                        <div class="form-group mt-2">
                            <label for="maretb">Bukti Dukung Maret <?php echo form_error('maretb') ?></label>
                            <textarea class="form-control" rows="2" name="maretb" id="maretb"><?php echo $maretb; ?></textarea>
                        </div>
                        <hr class="mt-4">
                        <div class="text-xl font-medium">April</div>
                        <div class="form-group mt-2">
                            <label for="april2">Kuantitas <?php echo form_error('april1') ?></label>
                            <input type="text" class="form-control" name="april1" id="april1" value="<?php echo $april1; ?>" />
                        </div>
                        <div class="form-group mt-2">
                            <label for="april2">Kualitas <?php echo form_error('april1a') ?></label>
                            <input type="text" class="form-control" name="april1a" id="april1a" value="<?php echo $april1a; ?>" />
                        </div>
                        <div class="form-group mt-2">
                            <label for="april2">Waktu <?php echo form_error('april1b') ?></label>
                            <input type="text" class="form-control" name="april1b" id="april1b" value="<?php echo $april1b; ?>" />
                        </div>
                        <div class="form-group mt-2">
                            <label for="april2">Kendala April <?php echo form_error('april2') ?></label>
                            <textarea class="form-control" rows="2" name="april2" id="april2"><?php echo $april2; ?></textarea>
                        </div>
                        <div class="form-group mt-2">
                            <label for="aprilb">Bukti Dukung April <?php echo form_error('aprilb') ?></label>
                            <textarea class="form-control" rows="2" name="aprilb" id="aprilb"><?php echo $aprilb; ?></textarea>
                        </div>
                        <hr class="mt-4">
                        <div class="text-xl font-medium">Mei</div>
                        <div class="form-group mt-2">
                            <label for="mei2">Kuantitas <?php echo form_error('mei1') ?></label>
                            <input type="text" class="form-control" name="mei1" id="mei1" value="<?php echo $mei1; ?>" />
                        </div>
                        <div class="form-group mt-2">
                            <label for="mei2">Kualitas <?php echo form_error('mei1a') ?></label>
                            <input type="text" class="form-control" name="mei1a" id="mei1a" value="<?php echo $mei1a; ?>" />
                        </div>
                        <div class="form-group mt-2">
                            <label for="mei2">Waktu <?php echo form_error('mei1b') ?></label>
                            <input type="text" class="form-control" name="mei1b" id="mei1b" value="<?php echo $mei1b; ?>" />
                        </div>
                        <div class="form-group mt-2">
                            <label for="mei2">Kendala Mei <?php echo form_error('mei2') ?></label>
                            <textarea class="form-control" rows="2" name="mei2" id="mei2"><?php echo $mei2; ?></textarea>
                        </div>
                        <div class="form-group mt-2">
                            <label for="meib">Bukti Dukung Mei <?php echo form_error('meib') ?></label>
                            <textarea class="form-control" rows="2" name="meib" id="meib"><?php echo $meib; ?></textarea>
                        </div>
                        <hr class="mt-4">
                        <div class="text-xl font-medium">Juni</div>
                        <div class="form-group mt-2">
                            <label for="juni2">Kuantitas <?php echo form_error('juni1') ?></label>
                            <input type="text" class="form-control" name="juni1" id="juni1" value="<?php echo $juni1; ?>" />
                        </div>
                        <div class="form-group mt-2">
                            <label for="juni2">Kualitas <?php echo form_error('juni1a') ?></label>
                            <input type="text" class="form-control" name="juni1a" id="juni1a" value="<?php echo $juni1a; ?>" />
                        </div>
                        <div class="form-group mt-2">
                            <label for="juni2">Waktu <?php echo form_error('juni1b') ?></label>
                            <input type="text" class="form-control" name="juni1b" id="juni1b" value="<?php echo $juni1b; ?>" />
                        </div>
                        <div class="form-group mt-2">
                            <label for="juni2">Kendala Juni <?php echo form_error('juni2') ?></label>
                            <textarea class="form-control" rows="2" name="juni2" id="juni2"><?php echo $juni2; ?></textarea>
                        </div>
                        <div class="form-group mt-2">
                            <label for="junib">Bukti Dukung Juni <?php echo form_error('junib') ?></label>
                            <textarea class="form-control" rows="2" name="junib" id="junib"><?php echo $junib; ?></textarea>
                        </div>
                        <hr class="mt-4">
                        <div class="text-xl font-medium">Juli</div>
                        <div class="form-group mt-2">
                            <label for="juli2">Kuantitas <?php echo form_error('juli1') ?></label>
                            <input type="text" class="form-control" name="juli1" id="juli1" value="<?php echo $juli1; ?>" />
                        </div>
                        <div class="form-group mt-2">
                            <label for="juli2">Kualitas <?php echo form_error('juli1a') ?></label>
                            <input type="text" class="form-control" name="juli1a" id="juli1a" value="<?php echo $juli1a; ?>" />
                        </div>
                        <div class="form-group mt-2">
                            <label for="juli2">Waktu <?php echo form_error('juli1b') ?></label>
                            <input type="text" class="form-control" name="juli1b" id="juli1b" value="<?php echo $juli1b; ?>" />
                        </div>
                        <div class="form-group mt-2">
                            <label for="juli2">Kendala Juli <?php echo form_error('juli2') ?></label>
                            <textarea class="form-control" rows="2" name="juli2" id="juli2"><?php echo $juli2; ?></textarea>
                        </div>
                        <div class="form-group mt-2">
                            <label for="julib">Bukti Dukung Juli <?php echo form_error('julib') ?></label>
                            <textarea class="form-control" rows="2" name="julib" id="julib"><?php echo $julib; ?></textarea>
                        </div>
                        <hr class="mt-4">
                        <div class="text-xl font-medium">Agustus</div>
                        <div class="form-group mt-2">
                            <label for="agustus2">Kuantitas <?php echo form_error('agustus1') ?></label>
                            <input type="text" class="form-control" name="agustus1" id="agustus1" value="<?php echo $agustus1; ?>" />
                        </div>
                        <div class="form-group mt-2">
                            <label for="agustus2">Kualitas <?php echo form_error('agustus1a') ?></label>
                            <input type="text" class="form-control" name="agustus1a" id="agustus1a" value="<?php echo $agustus1a; ?>" />
                        </div>
                        <div class="form-group mt-2">
                            <label for="agustus2">Waktu <?php echo form_error('agustus1b') ?></label>
                            <input type="text" class="form-control" name="agustus1b" id="agustus1b" value="<?php echo $agustus1b; ?>" />
                        </div>
                        <div class="form-group mt-2">
                            <label for="agustus2">Kendala Agustus <?php echo form_error('agustus2') ?></label>
                            <textarea class="form-control" rows="2" name="agustus2" id="agustus2"><?php echo $agustus2; ?></textarea>
                        </div>
                        <div class="form-group mt-2">
                            <label for="agustusb">Bukti Dukung Agustus <?php echo form_error('agustusb') ?></label>
                            <textarea class="form-control" rows="2" name="agustusb" id="agustusb"><?php echo $agustusb; ?></textarea>
                        </div>
                        <hr class="mt-4">
                        <div class="text-xl font-medium">September</div>
                        <div class="form-group mt-2">
                            <label for="september2">Kuantitas <?php echo form_error('september1') ?></label>
                            <input type="text" class="form-control" name="september1" id="september1" value="<?php echo $september1; ?>" />
                        </div>
                        <div class="form-group mt-2">
                            <label for="september2">Kualitas <?php echo form_error('september1a') ?></label>
                            <input type="text" class="form-control" name="september1a" id="september1a" value="<?php echo $september1a; ?>" />
                        </div>
                        <div class="form-group mt-2">
                            <label for="september2">Waktu <?php echo form_error('september1b') ?></label>
                            <input type="text" class="form-control" name="september1b" id="september1b" value="<?php echo $september1b; ?>" />
                        </div>
                        <div class="form-group mt-2">
                            <label for="september2">Kendala September <?php echo form_error('september2') ?></label>
                            <textarea class="form-control" rows="2" name="september2" id="september2"><?php echo $september2; ?></textarea>
                        </div>
                        <div class="form-group mt-2">
                            <label for="septemberb">Bukti Dukung September <?php echo form_error('septemberb') ?></label>
                            <textarea class="form-control" rows="2" name="septemberb" id="septemberb"><?php echo $septemberb; ?></textarea>
                        </div>
                        <hr class="mt-4">
                        <div class="text-xl font-medium">Oktober</div>
                        <div class="form-group mt-2">
                            <label for="oktober2">Kuantitas <?php echo form_error('oktober1') ?></label>
                            <input type="text" class="form-control" name="oktober1" id="oktober1" value="<?php echo $oktober1; ?>" />
                        </div>
                        <div class="form-group mt-2">
                            <label for="oktober2">Kualitas <?php echo form_error('oktober1a') ?></label>
                            <input type="text" class="form-control" name="oktober1a" id="oktober1a" value="<?php echo $oktober1a; ?>" />
                        </div>
                        <div class="form-group mt-2">
                            <label for="oktober2">Waktu <?php echo form_error('oktober1b') ?></label>
                            <input type="text" class="form-control" name="oktober1b" id="oktober1b" value="<?php echo $oktober1b; ?>" />
                        </div>
                        <div class="form-group mt-2">
                            <label for="oktober2">Kendala Oktober <?php echo form_error('oktober2') ?></label>
                            <textarea class="form-control" rows="2" name="oktober2" id="oktober2"><?php echo $oktober2; ?></textarea>
                        </div>
                        <div class="form-group mt-2">
                            <label for="oktoberb">Bukti Dukung Oktober <?php echo form_error('oktoberb') ?></label>
                            <textarea class="form-control" rows="2" name="oktoberb" id="oktoberb"><?php echo $oktoberb; ?></textarea>
                        </div>
                        <hr class="mt-4">
                        <div class="text-xl font-medium">November</div>
                        <div class="form-group mt-2">
                            <label for="november2">Kuantitas <?php echo form_error('november1') ?></label>
                            <input type="text" class="form-control" name="november1" id="november1" value="<?php echo $november1; ?>" />
                        </div>
                        <div class="form-group mt-2">
                            <label for="november2">Kualitas <?php echo form_error('november1a') ?></label>
                            <input type="text" class="form-control" name="november1a" id="november1a" value="<?php echo $november1a; ?>" />
                        </div>
                        <div class="form-group mt-2">
                            <label for="november2">Waktu <?php echo form_error('november1b') ?></label>
                            <input type="text" class="form-control" name="november1b" id="november1b" value="<?php echo $november1b; ?>" />
                        </div>
                        <div class="form-group mt-2">
                            <label for="november2">Kendala November <?php echo form_error('november2') ?></label>
                            <textarea class="form-control" rows="2" name="november2" id="november2"><?php echo $november2; ?></textarea>
                        </div>
                        <div class="form-group mt-2">
                            <label for="novemberb">Bukti Dukung November <?php echo form_error('novemberb') ?></label>
                            <textarea class="form-control" rows="2" name="novemberb" id="novemberb"><?php echo $novemberb; ?></textarea>
                        </div>
                        <hr class="mt-4">
                        <div class="text-xl font-medium">Desember</div>
                        <div class="form-group mt-2">
                            <label for="desember2">Kuantitas <?php echo form_error('desember1') ?></label>
                            <input type="text" class="form-control" name="desember1" id="desember1" value="<?php echo $desember1; ?>" />
                        </div>
                        <div class="form-group mt-2">
                            <label for="desember2">Kualitas <?php echo form_error('desember1a') ?></label>
                            <input type="text" class="form-control" name="desember1a" id="desember1a" value="<?php echo $desember1a; ?>" />
                        </div>
                        <div class="form-group mt-2">
                            <label for="desember2">Waktu <?php echo form_error('desember1b') ?></label>
                            <input type="text" class="form-control" name="desember1b" id="desember1b" value="<?php echo $desember1b; ?>" />
                        </div>
                        <div class="form-group mt-2">
                            <label for="desember2">Kendala Desember <?php echo form_error('desember2') ?></label>
                            <textarea class="form-control" rows="2" name="desember2" id="desember2"><?php echo $desember2; ?></textarea>
                        </div>
                        <div class="form-group mt-2">
                            <label for="desemberb">Bukti Dukung Desember <?php echo form_error('desemberb') ?></label>
                            <textarea class="form-control" rows="2" name="desemberb" id="desemberb"><?php echo $desemberb; ?></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" name="kdindikator" value="<?php echo $kdindikator; ?>" />
    <button type="submit" class="btn btn-primary mt-2"><?php echo $button ?></button>
    <a href="<?php echo site_url('insubindikator') ?>" class="btn btn-default mt-2">Cancel</a>
</form>