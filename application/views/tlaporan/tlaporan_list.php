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
        <h2 style="margin-top:0px">Tlaporan List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('tlaporan/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('tlaporan/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('tlaporan'); ?>" class="btn btn-default">Reset</a>
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
		<th>Kdsubindikator</th>
		<th>Target</th>
		<th>Januari1</th>
		<th>Januari2</th>
		<th>Februari1</th>
		<th>Februari2</th>
		<th>Maret1</th>
		<th>Maret2</th>
		<th>April1</th>
		<th>April2</th>
		<th>Mei1</th>
		<th>Mei2</th>
		<th>Juni1</th>
		<th>Juni2</th>
		<th>Juli1</th>
		<th>Juli2</th>
		<th>Agustus1</th>
		<th>Agustus2</th>
		<th>September1</th>
		<th>September2</th>
		<th>Oktober1</th>
		<th>Oktober2</th>
		<th>November1</th>
		<th>November2</th>
		<th>Desember1</th>
		<th>Desember2</th>
		<th>Action</th>
            </tr><?php
            foreach ($tlaporan_data as $tlaporan)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $tlaporan->kdsubindikator ?></td>
			<td><?php echo $tlaporan->target ?></td>
			<td><?php echo $tlaporan->januari1 ?></td>
			<td><?php echo $tlaporan->januari2 ?></td>
			<td><?php echo $tlaporan->februari1 ?></td>
			<td><?php echo $tlaporan->februari2 ?></td>
			<td><?php echo $tlaporan->maret1 ?></td>
			<td><?php echo $tlaporan->maret2 ?></td>
			<td><?php echo $tlaporan->april1 ?></td>
			<td><?php echo $tlaporan->april2 ?></td>
			<td><?php echo $tlaporan->mei1 ?></td>
			<td><?php echo $tlaporan->mei2 ?></td>
			<td><?php echo $tlaporan->juni1 ?></td>
			<td><?php echo $tlaporan->juni2 ?></td>
			<td><?php echo $tlaporan->juli1 ?></td>
			<td><?php echo $tlaporan->juli2 ?></td>
			<td><?php echo $tlaporan->agustus1 ?></td>
			<td><?php echo $tlaporan->agustus2 ?></td>
			<td><?php echo $tlaporan->september1 ?></td>
			<td><?php echo $tlaporan->september2 ?></td>
			<td><?php echo $tlaporan->oktober1 ?></td>
			<td><?php echo $tlaporan->oktober2 ?></td>
			<td><?php echo $tlaporan->november1 ?></td>
			<td><?php echo $tlaporan->november2 ?></td>
			<td><?php echo $tlaporan->desember1 ?></td>
			<td><?php echo $tlaporan->desember2 ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('tlaporan/read/'.$tlaporan->id),'Read'); 
				echo ' | '; 
				echo anchor(site_url('tlaporan/update/'.$tlaporan->id),'Update'); 
				echo ' | '; 
				echo anchor(site_url('tlaporan/delete/'.$tlaporan->id),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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