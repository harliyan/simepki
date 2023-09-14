<form action="<?php echo $action; ?>" method="post">
    <div class="form-group">
        <label for="varchar">Kode Jabatan <?php echo form_error('kode_jabatan') ?></label>
        <input type="text" class="form-control" name="kode_jabatan" id="kode_jabatan" placeholder="Kode Jabatan" value="<?php echo $kode_jabatan; ?>" />
    </div>
    <div class="form-group">
        <label for="varchar">Nama Jabatan <?php echo form_error('nama_jabatan') ?></label>
        <input type="text" class="form-control" name="nama_jabatan" id="nama_jabatan" placeholder="Nama Jabatan" value="<?php echo $nama_jabatan; ?>" />
    </div>
    <div class="form-group">
        <label for="varchar">Jpt Utama <?php echo form_error('jpt_utama') ?></label>
        <input type="text" class="form-control" name="jpt_utama" id="jpt_utama" placeholder="Jpt Utama" value="<?php echo $jpt_utama; ?>" />
    </div>
    <div class="form-group">
        <label for="varchar">Jpt Madya <?php echo form_error('jpt_madya') ?></label>
        <input type="text" class="form-control" name="jpt_madya" id="jpt_madya" placeholder="Jpt Madya" value="<?php echo $jpt_madya; ?>" />
    </div>
    <div class="form-group">
        <label for="varchar">Jpt Pratama <?php echo form_error('jpt_pratama') ?></label>
        <input type="text" class="form-control" name="jpt_pratama" id="jpt_pratama" placeholder="Jpt Pratama" value="<?php echo $jpt_pratama; ?>" />
    </div>
    <div class="form-group">
        <label for="varchar">Administrator <?php echo form_error('administrator') ?></label>
        <input type="text" class="form-control" name="administrator" id="administrator" placeholder="Administrator" value="<?php echo $administrator; ?>" />
    </div>
    <div class="form-group">
        <label for="varchar">Pengawas <?php echo form_error('pengawas') ?></label>
        <input type="text" class="form-control" name="pengawas" id="pengawas" placeholder="Pengawas" value="<?php echo $pengawas; ?>" />
    </div>
    <div class="form-group">
        <label for="varchar">Pelaksana <?php echo form_error('pelaksana') ?></label>
        <input type="text" class="form-control" name="pelaksana" id="pelaksana" placeholder="Pelaksana" value="<?php echo $pelaksana; ?>" />
    </div>
    <div class="form-group">
        <label for="varchar">Jabatan Fungsional <?php echo form_error('jabatan_fungsional') ?></label>
        <input type="text" class="form-control" name="jabatan_fungsional" id="jabatan_fungsional" placeholder="Jabatan Fungsional" value="<?php echo $jabatan_fungsional; ?>" />
    </div>
    <div class="form-group">
        <label for="varchar">Ikhtisar Jabatan <?php echo form_error('ikhtisar_jabatan') ?></label>
        <input type="text" class="form-control" name="ikhtisar_jabatan" id="ikhtisar_jabatan" placeholder="Ikhtisar Jabatan" value="<?php echo $ikhtisar_jabatan; ?>" />
    </div>
    <div class="form-group">
        <label for="varchar">Pend Formal <?php echo form_error('pend_formal') ?></label>
        <input type="text" class="form-control" name="pend_formal" id="pend_formal" placeholder="Pend Formal" value="<?php echo $pend_formal; ?>" />
    </div>
    <div class="form-group">
        <label for="varchar">Pend Pelatihan <?php echo form_error('pend_pelatihan') ?></label>
        <input type="text" class="form-control" name="pend_pelatihan" id="pend_pelatihan" placeholder="Pend Pelatihan" value="<?php echo $pend_pelatihan; ?>" />
    </div>
    <div class="form-group">
        <label for="varchar">Pengalaman Kerja <?php echo form_error('pengalaman_kerja') ?></label>
        <input type="text" class="form-control" name="pengalaman_kerja" id="pengalaman_kerja" placeholder="Pengalaman Kerja" value="<?php echo $pengalaman_kerja; ?>" />
    </div>
    <div class="form-group">
        <label for="varchar">Prestasi <?php echo form_error('prestasi') ?></label>
        <input type="text" class="form-control" name="prestasi" id="prestasi" placeholder="Prestasi" value="<?php echo $prestasi; ?>" />
    </div>
    <div class="form-group">
        <label for="int">Kelas Jabatan <?php echo form_error('kelas_jabatan') ?></label>
        <input type="text" class="form-control" name="kelas_jabatan" id="kelas_jabatan" placeholder="Kelas Jabatan" value="<?php echo $kelas_jabatan; ?>" />
    </div>
    <div class="form-group">
        <label for="datetime">Date Created <?php echo form_error('date_created') ?></label>
        <input type="datetime-local" class="form-control" name="date_created" id="date_created" placeholder="Date Created" value="<?php echo $date_created; ?>" />
    </div>
    <input type="hidden" name="id" value="<?php echo $id; ?>" />
    <div class="form-group mt-4">
        <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
        <a href="<?php echo site_url('utama') ?>" class="btn btn-default">Cancel</a>
    </div>
</form>