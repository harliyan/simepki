<form action="<?php echo $action; ?>" method="post">
    <div class="form-group mt-4">
        <label for="varchar">Kdindikator <?php echo form_error('kdindikator') ?></label>
        <input type="text" class="form-control" name="kdindikator" id="kdindikator" placeholder="Kdindikator" value="<?php echo date("Ymdhis") ?>" readonly />
    </div>
    <div class="form-group mt-2">
        <label for="indikator">Indikator <?php echo form_error('indikator') ?></label>
        <textarea class="form-control" rows="3" name="indikator" id="indikator" placeholder="Indikator"><?php echo $indikator; ?></textarea>
    </div>
    <div class="form-group mt-2">
        <input type="text" class="form-control" name="date_created" id="date_created" placeholder="Date Created" value="<?php echo date("Y-m-d h:i:sa") ?>" hidden />
    </div>
    <div class="form-group mt-2 mb-4">
        <?php
        $kdlokasi = $this->session->userdata('kdlokasi');
        ?>
        <label for="kdlokasi">Kode Lokasi</label>
        <input type="text" class="form-control" name="kdlokasi" id="kdlokasi" placeholder="kdlokasi" value="<?php echo $kdlokasi; ?>" readonly />
    </div>
    <input type="hidden" name="id" value="<?php echo $id; ?>" />
    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
    <a href="<?php echo site_url('insubindikator') ?>" class="btn btn-default">Cancel</a>
</form>