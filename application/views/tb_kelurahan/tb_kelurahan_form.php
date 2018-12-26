<?php $this->load->view('template/header.php'); ?>
<?php $this->load->view('template/menu.php'); ?>
  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Data Partai</h1>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h2 style="margin-top:0px">Tb_kelurahan <?php echo $button ?></h2>
                            <form action="<?php echo $action; ?>" method="post">
                        	    <div class="form-group">
                                    <label for="varchar">Kecamatan <?php echo form_error('id_kecamatan') ?></label>
                                    <select name="id_kecamatan" class="form-control" id="id_kecamatan">
                                        <option value="">--Pilih--</option>
                                        <?php foreach ($kecamatan as $dap) {
                                        echo "<option value='$dap[id]'>$dap[nama]</option>";
                                        } ?>
                                    </select>
                                </div>
                        	    <div class="form-group">
                                    <label for="varchar">Nama <?php echo form_error('nama') ?></label>
                                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo $nama; ?>" />
                                </div>
                        	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
                        	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
                        	    <a href="<?php echo site_url('tb_kelurahan') ?>" class="btn btn-default">Cancel</a>
                        	</form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

<?php $this->load->view('template/footer.php'); ?>
