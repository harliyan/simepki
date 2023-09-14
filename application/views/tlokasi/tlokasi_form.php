<form action="<?php echo $action; ?>" method="post">
    <div class="form-group">
        <label for="varchar">Kdlokasi <?php echo form_error('kdlokasi') ?></label>
        <input type="text" class="form-control" name="kdlokasi" id="kdlokasi" placeholder="Kdlokasi" value="<?php echo $kdlokasi; ?>" />
    </div>
    <div class="form-group">
        <label for="varchar">Nmlokasi <?php echo form_error('nmlokasi') ?></label>
        <input type="text" class="form-control" name="nmlokasi" id="nmlokasi" placeholder="Nmlokasi" value="<?php echo $nmlokasi; ?>" />
    </div>
    <div class="form-group">
        <label for="varchar">Singkatan Lokasi <?php echo form_error('singkatan_lokasi') ?></label>
        <input type="text" class="form-control" name="singkatan_lokasi" id="singkatan_lokasi" placeholder="Singkatan Lokasi" value="<?php echo $singkatan_lokasi; ?>" />
    </div>
    <div class="form-group">
        <label for="varchar">Almt Kantor <?php echo form_error('almt_kantor') ?></label>
        <input type="text" class="form-control" name="almt_kantor" id="almt_kantor" placeholder="Almt Kantor" value="<?php echo $almt_kantor; ?>" />
    </div>
    <div class="form-group">
        <label for="varchar">No Telp Kantor <?php echo form_error('no_telp_kantor') ?></label>
        <input type="text" class="form-control" name="no_telp_kantor" id="no_telp_kantor" placeholder="No Telp Kantor" value="<?php echo $no_telp_kantor; ?>" />
    </div>
    <div class="form-group">
        <label for="varchar">Email Kantor <?php echo form_error('email_kantor') ?></label>
        <input type="text" class="form-control" name="email_kantor" id="email_kantor" placeholder="Email Kantor" value="<?php echo $email_kantor; ?>" />
    </div>
    <div class="form-group">
        <label for="varchar">Website Kantor <?php echo form_error('website_kantor') ?></label>
        <input type="text" class="form-control" name="website_kantor" id="website_kantor" placeholder="Website Kantor" value="<?php echo $website_kantor; ?>" />
    </div>
    <input type="hidden" name="id" value="<?php echo $id; ?>" />
    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
    <a href="<?php echo site_url('tlokasi') ?>" class="btn btn-default">Cancel</a>
</form>