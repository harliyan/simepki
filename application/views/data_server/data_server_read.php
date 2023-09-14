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
        <h2 style="margin-top:0px">Data_server Read</h2>
        <table class="table">
	    <tr><td>Id Server Child</td><td><?php echo $id_server_child; ?></td></tr>
	    <tr><td>Ip Server</td><td><?php echo $ip_server; ?></td></tr>
	    <tr><td>Ip Server Public</td><td><?php echo $ip_server_public; ?></td></tr>
	    <tr><td>Port</td><td><?php echo $port; ?></td></tr>
	    <tr><td>Name Server</td><td><?php echo $name_server; ?></td></tr>
	    <tr><td>Os Username</td><td><?php echo $os_username; ?></td></tr>
	    <tr><td>Os Password</td><td><?php echo $os_password; ?></td></tr>
	    <tr><td>Db Username</td><td><?php echo $db_username; ?></td></tr>
	    <tr><td>Db Password</td><td><?php echo $db_password; ?></td></tr>
	    <tr><td>Portal Username</td><td><?php echo $portal_username; ?></td></tr>
	    <tr><td>Portal Password</td><td><?php echo $portal_password; ?></td></tr>
	    <tr><td>Type Server</td><td><?php echo $type_server; ?></td></tr>
	    <tr><td>Level Server</td><td><?php echo $level_server; ?></td></tr>
	    <tr><td>Os Server</td><td><?php echo $os_server; ?></td></tr>
	    <tr><td>Hdd Server</td><td><?php echo $hdd_server; ?></td></tr>
	    <tr><td>Ram Server</td><td><?php echo $ram_server; ?></td></tr>
	    <tr><td>Cpu Server</td><td><?php echo $cpu_server; ?></td></tr>
	    <tr><td>Cpu Detail</td><td><?php echo $cpu_detail; ?></td></tr>
	    <tr><td>Hdd Detail</td><td><?php echo $hdd_detail; ?></td></tr>
	    <tr><td>Note Server</td><td><?php echo $note_server; ?></td></tr>
	    <tr><td>Status</td><td><?php echo $status; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('data_server') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>