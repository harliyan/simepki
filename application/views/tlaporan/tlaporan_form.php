<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Tlaporan <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Kdsubindikator <?php echo form_error('kdsubindikator') ?></label>
            <input type="text" class="form-control" name="kdsubindikator" id="kdsubindikator" placeholder="Kdsubindikator" value="<?php echo $kdsubindikator; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Target <?php echo form_error('target') ?></label>
            <input type="text" class="form-control" name="target" id="target" placeholder="Target" value="<?php echo $target; ?>" />
        </div>
	    <div class="form-group">
            <label for="januari1">Januari1 <?php echo form_error('januari1') ?></label>
            <textarea class="form-control" rows="3" name="januari1" id="januari1" placeholder="Januari1"><?php echo $januari1; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="januari2">Januari2 <?php echo form_error('januari2') ?></label>
            <textarea class="form-control" rows="3" name="januari2" id="januari2" placeholder="Januari2"><?php echo $januari2; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="februari1">Februari1 <?php echo form_error('februari1') ?></label>
            <textarea class="form-control" rows="3" name="februari1" id="februari1" placeholder="Februari1"><?php echo $februari1; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="februari2">Februari2 <?php echo form_error('februari2') ?></label>
            <textarea class="form-control" rows="3" name="februari2" id="februari2" placeholder="Februari2"><?php echo $februari2; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="maret1">Maret1 <?php echo form_error('maret1') ?></label>
            <textarea class="form-control" rows="3" name="maret1" id="maret1" placeholder="Maret1"><?php echo $maret1; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="maret2">Maret2 <?php echo form_error('maret2') ?></label>
            <textarea class="form-control" rows="3" name="maret2" id="maret2" placeholder="Maret2"><?php echo $maret2; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="april1">April1 <?php echo form_error('april1') ?></label>
            <textarea class="form-control" rows="3" name="april1" id="april1" placeholder="April1"><?php echo $april1; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="april2">April2 <?php echo form_error('april2') ?></label>
            <textarea class="form-control" rows="3" name="april2" id="april2" placeholder="April2"><?php echo $april2; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="mei1">Mei1 <?php echo form_error('mei1') ?></label>
            <textarea class="form-control" rows="3" name="mei1" id="mei1" placeholder="Mei1"><?php echo $mei1; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="mei2">Mei2 <?php echo form_error('mei2') ?></label>
            <textarea class="form-control" rows="3" name="mei2" id="mei2" placeholder="Mei2"><?php echo $mei2; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="juni1">Juni1 <?php echo form_error('juni1') ?></label>
            <textarea class="form-control" rows="3" name="juni1" id="juni1" placeholder="Juni1"><?php echo $juni1; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="juni2">Juni2 <?php echo form_error('juni2') ?></label>
            <textarea class="form-control" rows="3" name="juni2" id="juni2" placeholder="Juni2"><?php echo $juni2; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="juli1">Juli1 <?php echo form_error('juli1') ?></label>
            <textarea class="form-control" rows="3" name="juli1" id="juli1" placeholder="Juli1"><?php echo $juli1; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="juli2">Juli2 <?php echo form_error('juli2') ?></label>
            <textarea class="form-control" rows="3" name="juli2" id="juli2" placeholder="Juli2"><?php echo $juli2; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="agustus1">Agustus1 <?php echo form_error('agustus1') ?></label>
            <textarea class="form-control" rows="3" name="agustus1" id="agustus1" placeholder="Agustus1"><?php echo $agustus1; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="agustus2">Agustus2 <?php echo form_error('agustus2') ?></label>
            <textarea class="form-control" rows="3" name="agustus2" id="agustus2" placeholder="Agustus2"><?php echo $agustus2; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="september1">September1 <?php echo form_error('september1') ?></label>
            <textarea class="form-control" rows="3" name="september1" id="september1" placeholder="September1"><?php echo $september1; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="september2">September2 <?php echo form_error('september2') ?></label>
            <textarea class="form-control" rows="3" name="september2" id="september2" placeholder="September2"><?php echo $september2; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="oktober1">Oktober1 <?php echo form_error('oktober1') ?></label>
            <textarea class="form-control" rows="3" name="oktober1" id="oktober1" placeholder="Oktober1"><?php echo $oktober1; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="oktober2">Oktober2 <?php echo form_error('oktober2') ?></label>
            <textarea class="form-control" rows="3" name="oktober2" id="oktober2" placeholder="Oktober2"><?php echo $oktober2; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="november1">November1 <?php echo form_error('november1') ?></label>
            <textarea class="form-control" rows="3" name="november1" id="november1" placeholder="November1"><?php echo $november1; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="november2">November2 <?php echo form_error('november2') ?></label>
            <textarea class="form-control" rows="3" name="november2" id="november2" placeholder="November2"><?php echo $november2; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="desember1">Desember1 <?php echo form_error('desember1') ?></label>
            <textarea class="form-control" rows="3" name="desember1" id="desember1" placeholder="Desember1"><?php echo $desember1; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="desember2">Desember2 <?php echo form_error('desember2') ?></label>
            <textarea class="form-control" rows="3" name="desember2" id="desember2" placeholder="Desember2"><?php echo $desember2; ?></textarea>
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('tlaporan') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>