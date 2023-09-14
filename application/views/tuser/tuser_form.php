<form action="<?php echo $action; ?>" method="post">
    <div class="form-group mt-2">
        <label for="varchar">Username <?php echo form_error('username') ?></label>
        <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?php echo $username; ?>" />
    </div>
    <div class="form-group mt-2">
        <input type="text" class="form-control" name="username_dump" id="username_dump" placeholder="Username Dump" value="-" hidden />
    </div>
    <div class="form-group mt-2">
        <label for="varchar">Default Password <?php echo form_error('password') ?></label>
        <input type="text" class="form-control" value="123456789" readonly />
        <input type="text" class="form-control" name="pwd" id="pwd" placeholder="Pwd" value="$2y$10$2vYOGhxiUYBth8dw7yLXRunvmOA0pU.Zs.gPsPS3XALq6fMDtFs8W" hidden />
    </div>
    <div class="form-group mt-2">
        <label for="enum">Role <?php echo form_error('role') ?></label>
        <select name="role" class="form-control" style="width: 100%;" tabindex="-1" id="role">
            <option value="0">== PILIH ROLE ==</option>
            <option value="ADMINISTRATOR">ADMINISTRATOR</option>
            <option value="INSTALASI">INSTALASI</option>
            <option value="SUBINSTALASI">SUBINSTALASI</option>
        </select>
    </div>
    <div class="form-group mt-2">
        <label for="varchar">PILIH INSTALASI <?php echo form_error('kdlokasi') ?></label>
        <select name="kdlokasi" class="form-control" style="width: 100%;" tabindex="-1" id="kdlokasi">
            <option value="0">== PILIH INSTALASI ==</option>
            <?php foreach ($tlokasi_data as $each) { ?>
                <option value="<?php echo $each['kdlokasi']; ?>"><?php echo $each['nmlokasi']; ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group mt-2">
        <input type="text" class="form-control" name="status" id="status" placeholder="Aktif" value="1" hidden />
    </div>
    <div class="form-group mt-2">
        <input type="text" class="form-control" name="created_by" id="created_by" placeholder="Created By" value="ADMINISTRATOR" hidden />
    </div>
    <div class="form-group mt-2">
        <label for="timestamp">Created At <?php echo form_error('created_at') ?></label>
        <input type="text" class="form-control" name="created_at" id="created_at" placeholder="Created At" value="<?php echo date("Y-m-d h:i:s") ?>" readonly />
    </div>
    <div class="form-group mt-2">
        <label for="varchar">Last Updated By <?php echo form_error('last_updated_by') ?></label>
        <input type="text" class="form-control" name="last_updated_by" id="last_updated_by" placeholder="Last Updated By" value="ADMINISTRATOR" readonly />
    </div>
    <div class="form-group mt-2">
        <label for="datetime">Last Updated At <?php echo form_error('last_updated_at') ?></label>
        <input type="text" class="form-control" name="last_updated_at" id="last_updated_at" placeholder="Last Updated At" value="<?php echo date("Y-m-d h:i:s") ?>" readonly />
    </div>
    <input type="hidden" name="id" value="<?php echo $id; ?>" />
    <button type="submit" class="btn btn-primary mt-2"><?php echo $button ?></button>
    <a href="<?php echo site_url('tuser') ?>" class="btn btn-default mt-2">Cancel</a>
</form>