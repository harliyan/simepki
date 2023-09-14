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
        <h2 style="margin-top:0px">Data_server List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('data_server/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('data_server/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('data_server'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Id Server Child</th>
		<th>Ip Server</th>
		<th>Ip Server Public</th>
		<th>Port</th>
		<th>Name Server</th>
		<th>Os Username</th>
		<th>Os Password</th>
		<th>Db Username</th>
		<th>Db Password</th>
		<th>Portal Username</th>
		<th>Portal Password</th>
		<th>Type Server</th>
		<th>Level Server</th>
		<th>Os Server</th>
		<th>Hdd Server</th>
		<th>Ram Server</th>
		<th>Cpu Server</th>
		<th>Cpu Detail</th>
		<th>Hdd Detail</th>
		<th>Note Server</th>
		<th>Status</th>
		<th>Action</th>
            </tr><?php
            foreach ($data_server_data as $data_server)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $data_server->id_server_child ?></td>
			<td><?php echo $data_server->ip_server ?></td>
			<td><?php echo $data_server->ip_server_public ?></td>
			<td><?php echo $data_server->port ?></td>
			<td><?php echo $data_server->name_server ?></td>
			<td><?php echo $data_server->os_username ?></td>
			<td><?php echo $data_server->os_password ?></td>
			<td><?php echo $data_server->db_username ?></td>
			<td><?php echo $data_server->db_password ?></td>
			<td><?php echo $data_server->portal_username ?></td>
			<td><?php echo $data_server->portal_password ?></td>
			<td><?php echo $data_server->type_server ?></td>
			<td><?php echo $data_server->level_server ?></td>
			<td><?php echo $data_server->os_server ?></td>
			<td><?php echo $data_server->hdd_server ?></td>
			<td><?php echo $data_server->ram_server ?></td>
			<td><?php echo $data_server->cpu_server ?></td>
			<td><?php echo $data_server->cpu_detail ?></td>
			<td><?php echo $data_server->hdd_detail ?></td>
			<td><?php echo $data_server->note_server ?></td>
			<td><?php echo $data_server->status ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('data_server/read/'.$data_server->id_server),'Read'); 
				echo ' | '; 
				echo anchor(site_url('data_server/update/'.$data_server->id_server),'Update'); 
				echo ' | '; 
				echo anchor(site_url('data_server/delete/'.$data_server->id_server),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
    </body>
</html>