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
        <h2 style="margin-top:0px">Tb_caleg Read</h2>
        <table class="table">
	    <tr><td>Id Dapil</td><td><?php echo $id_dapil; ?></td></tr>
	    <tr><td>Id Partai</td><td><?php echo $id_partai; ?></td></tr>
	    <tr><td>No Urut</td><td><?php echo $no_urut; ?></td></tr>
	    <tr><td>Nama</td><td><?php echo $nama; ?></td></tr>
	    <tr><td>Jk</td><td><?php echo $jk; ?></td></tr>
	    <tr><td>Alamat</td><td><?php echo $alamat; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('tb_caleg') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>