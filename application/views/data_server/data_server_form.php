<!doctype html>
<html>

<head>
    <title>harviacode.com - codeigniter crud generator</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" />
    <style>
        body {
            padding: 15px;
        }
    </style>
</head>

<body>
    <h2 style="margin-top:0px">Data_server <?php echo $button ?></h2>
    <form action="<?php echo $action; ?>" method="post">
        <div class="form-group">
            <label for="int">Id Server Child <?php echo form_error('id_server_child') ?></label>
            <input type="text" class="form-control" name="id_server_child" id="id_server_child" placeholder="Id Server Child" value="<?php echo $id_server_child; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Ip Server <?php echo form_error('ip_server') ?></label>
            <input type="text" class="form-control" name="ip_server" id="ip_server" placeholder="Ip Server" value="<?php echo $ip_server; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Ip Server Public <?php echo form_error('ip_server_public') ?></label>
            <input type="text" class="form-control" name="ip_server_public" id="ip_server_public" placeholder="Ip Server Public" value="<?php echo $ip_server_public; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Port <?php echo form_error('port') ?></label>
            <input type="text" class="form-control" name="port" id="port" placeholder="Port" value="<?php echo $port; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Name Server <?php echo form_error('name_server') ?></label>
            <input type="text" class="form-control" name="name_server" id="name_server" placeholder="Name Server" value="<?php echo $name_server; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Os Username <?php echo form_error('os_username') ?></label>
            <input type="text" class="form-control" name="os_username" id="os_username" placeholder="Os Username" value="<?php echo $os_username; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Os Password <?php echo form_error('os_password') ?></label>
            <input type="text" class="form-control" name="os_password" id="os_password" placeholder="Os Password" value="<?php echo $os_password; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Db Username <?php echo form_error('db_username') ?></label>
            <input type="text" class="form-control" name="db_username" id="db_username" placeholder="Db Username" value="<?php echo $db_username; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Db Password <?php echo form_error('db_password') ?></label>
            <input type="text" class="form-control" name="db_password" id="db_password" placeholder="Db Password" value="<?php echo $db_password; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Portal Username <?php echo form_error('portal_username') ?></label>
            <input type="text" class="form-control" name="portal_username" id="portal_username" placeholder="Portal Username" value="<?php echo $portal_username; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Portal Password <?php echo form_error('portal_password') ?></label>
            <input type="text" class="form-control" name="portal_password" id="portal_password" placeholder="Portal Password" value="<?php echo $portal_password; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Type Server <?php echo form_error('type_server') ?></label>
            <input type="text" class="form-control" name="type_server" id="type_server" placeholder="Type Server" value="<?php echo $type_server; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Level Server <?php echo form_error('level_server') ?></label>
            <input type="text" class="form-control" name="level_server" id="level_server" placeholder="Level Server" value="<?php echo $level_server; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Os Server <?php echo form_error('os_server') ?></label>
            <input type="text" class="form-control" name="os_server" id="os_server" placeholder="Os Server" value="<?php echo $os_server; ?>" />
        </div>
        <div class="form-group">
            <label for="int">Hdd Server <?php echo form_error('hdd_server') ?></label>
            <input type="text" class="form-control" name="hdd_server" id="hdd_server" placeholder="Hdd Server" value="<?php echo $hdd_server; ?>" />
        </div>
        <div class="form-group">
            <label for="int">Ram Server <?php echo form_error('ram_server') ?></label>
            <input type="text" class="form-control" name="ram_server" id="ram_server" placeholder="Ram Server" value="<?php echo $ram_server; ?>" />
        </div>
        <div class="form-group">
            <label for="int">Cpu Server <?php echo form_error('cpu_server') ?></label>
            <input type="text" class="form-control" name="cpu_server" id="cpu_server" placeholder="Cpu Server" value="<?php echo $cpu_server; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Cpu Detail <?php echo form_error('cpu_detail') ?></label>
            <input type="text" class="form-control" name="cpu_detail" id="cpu_detail" placeholder="Cpu Detail" value="<?php echo $cpu_detail; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Hdd Detail <?php echo form_error('hdd_detail') ?></label>
            <input type="text" class="form-control" name="hdd_detail" id="hdd_detail" placeholder="Hdd Detail" value="<?php echo $hdd_detail; ?>" />
        </div>
        <div class="form-group">
            <label for="note_server">Note Server <?php echo form_error('note_server') ?></label>
            <textarea class="form-control" rows="3" name="note_server" id="note_server" placeholder="Note Server"><?php echo $note_server; ?></textarea>
        </div>
        <div class="form-group">
            <label for="varchar">Status <?php echo form_error('status') ?></label>
            <input type="text" class="form-control" name="status" id="status" placeholder="Status" value="<?php echo $status; ?>" />
        </div>
        <input type="hidden" name="id_server" value="<?php echo $id_server; ?>" />
        <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
        <a href="<?php echo site_url('data_server') ?>" class="btn btn-default">Cancel</a>
    </form>
</body>

</html>