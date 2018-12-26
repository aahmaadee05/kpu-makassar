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
        <h2 style="margin-top:0px">Tb_dapil Read</h2>
        <table class="table">
	    <tr><td>Kode Dapil</td><td><?php echo $kode_dapil; ?></td></tr>
	    <tr><td>Nama</td><td><?php echo $nama; ?></td></tr>
	    <tr><td>Kursi</td><td><?php echo $kursi; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('tb_dapil') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>