<?php $this->load->view('template/header.php'); ?>
<?php $this->load->view('template/menu.php'); ?>
  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Data Dapil</h1>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h2 style="margin-top:0px"><?php echo $button ?></h2>
                            <form action="<?php echo $action; ?>" method="post">
                        	    <div class="form-group">
                                    <label for="varchar">Kode Dapil <?php echo form_error('kode_dapil') ?></label>
                                    <input type="text" class="form-control" name="kode_dapil" id="kode_dapil" placeholder="Kode Dapil" value="<?php echo $kode_dapil; ?>" />
                                </div>
                        	    <div class="form-group">
                                    <label for="varchar">Nama <?php echo form_error('nama') ?></label>
                                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo $nama; ?>" />
                                </div>
                        	    <div class="form-group">
                                    <label for="int">Kursi <?php echo form_error('kursi') ?></label>
                                    <input type="text" class="form-control" name="kursi" id="kursi" placeholder="Kursi" value="<?php echo $kursi; ?>" />
                                </div>
                        	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
                        	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
                        	    <a href="<?php echo site_url('tb_dapil') ?>" class="btn btn-default">Cancel</a>
                        	</form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

<?php $this->load->view('template/footer.php'); ?>