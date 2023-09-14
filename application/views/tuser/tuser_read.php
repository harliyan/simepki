<table class="table">
    <tr>
        <td>Username</td>
        <td><?php echo $username; ?></td>
    </tr>
    <tr>
        <td>Username Dump</td>
        <td><?php echo $username_dump; ?></td>
    </tr>
    <tr>
        <td>Role</td>
        <td><?php echo $role; ?></td>
    </tr>
    <tr>
        <td>Kdlokasi</td>
        <td><?php echo $kdlokasi; ?></td>
    </tr>
    <tr>
        <td>Status</td>
        <td>
            <?php
            if ($status == 1) {
                echo 'AKTIF';
            } else {
                echo 'TIDAK AKTIF';
            }
            ?></td>
    </tr>
    <tr>
        <td>Created By</td>
        <td><?php echo $created_by; ?></td>
    </tr>
    <tr>
        <td>Created At</td>
        <td><?php echo $created_at; ?></td>
    </tr>
    <tr>
        <td>Last Updated By</td>
        <td><?php echo $last_updated_by; ?></td>
    </tr>
    <tr>
        <td>Last Updated At</td>
        <td><?php echo $last_updated_at; ?></td>
    </tr>
    <tr>
        <td></td>
        <td><a href="<?php echo site_url('tuser') ?>" class="btn btn-default">Cancel</a></td>
    </tr>
</table>