<form action="<?php echo $action; ?>" method="post">
    <div class="form-group mt-2">
        <label for="varchar">Username <?php echo form_error('username') ?></label>
        <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?php echo $username; ?>" />
    </div>
    <div class="form-group mt-2">
        <input type="text" class="form-control" name="username_dump" id="username_dump" placeholder="Username Dump" value="-" hidden />
    </div>
    <!-- <div class="form-group mt-2">
        <label for="varchar">Password Baru <span class="text-danger">*Wajib diisi</span><?php echo form_error('password') ?></label>
        <input type="text" class="form-control" name="pwd" id="pwd" placeholder="Masukan Password Baru" />
    </div> -->
    <div class="form-group mt-2">
        <label for="varchar">Pilih Instalasi <span class="text-danger">*Wajib diisi</span><?php echo form_error('kdlokasi') ?></label>
        <select name="kdlokasi" class="form-control" style="width: 100%;" tabindex="-1" id="kdlokasi">
            <option>== PILIH INSTALASI ==</option>
            <?php foreach ($tlokasi_data as $each) { ?>
                <option value="<?php echo $each['kdlokasi']; ?>"><?php echo $each['nmlokasi']; ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group mt-2">
        <label for="enum">Pilih Role <span class="text-danger">*Wajib diisi</span><?php echo form_error('role') ?></label>
        <select name="role" class="form-control" style="width: 100%;" tabindex="-1" id="role">
            <option value="0">== PILIH ROLE ==</option>
            <option value="ADMINISTRATOR">ADMINISTRATOR</option>
            <option value="INSTALASI">INSTALASI</option>
            <option value="SUBINSTALASI">SUBINSTALASI</option>
        </select>
    </div>
    <div class="form-group mt-2">
        <input type="text" class="form-control" name="status" id="status" placeholder="Aktif" value="1" hidden />
    </div>
    <div class="form-group mt-2">
        <input type="text" class="form-control" name="created_by" id="created_by" placeholder="Created By" value="ADMINISTRATOR" hidden />
    </div>
    <div class="form-group mt-2">
        <input type="text" class="form-control" name="created_at" id="created_at" placeholder="Created At" value="<?php echo date("Y-m-d h:i:s") ?>" hidden />
    </div>
    <div class="form-group mt-2">
        <input type="text" class="form-control" name="last_updated_by" id="last_updated_by" placeholder="Last Updated By" value="ADMINISTRATOR" hidden />
    </div>
    <div class="form-group mt-2">
        <input type="text" class="form-control" name="last_updated_at" id="last_updated_at" placeholder="Last Updated At" value="<?php echo date("Y-m-d h:i:s") ?>" hidden />
    </div>
    <input type="hidden" name="id" value="<?php echo $id; ?>" />
    <button type="submit" class="btn btn-primary mt-2"><?php echo $button ?></button>
    <a href="<?php echo site_url('tuser') ?>" class="btn btn-default mt-2">Cancel</a>
</form>