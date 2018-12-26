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
                            <h2 style="margin-top:0px">Tb_tps <?php echo $button ?></h2>
                            <form action="<?php echo $action; ?>" method="post">
                                <div class="form-group">
                                    <label for="varchar">Kelurahan <?php echo form_error('id_kelurahan') ?></label>
                                    <select name="id_kelurahan" class="form-control" id="id_kelurahan">
                                        <option value="">--Pilih--</option>
                                        <?php foreach ($kelurahan as $dap) {
                                        echo "<option value='$dap[id]'>$dap[nama]</option>";
                                        } ?>
                                    </select>
                                </div>
                        	    <div class="form-group">
                                    <label for="varchar">No Tps <?php echo form_error('no_tps') ?></label>
                                    <input type="text" class="form-control" name="no_tps" id="no_tps" placeholder="No Tps" value="<?php echo $no_tps; ?>" />
                                </div>
                        	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
                        	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
                        	    <a href="<?php echo site_url('tb_tps') ?>" class="btn btn-default">Cancel</a>
                        	</form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

<?php $this->load->view('template/footer.php'); ?>
