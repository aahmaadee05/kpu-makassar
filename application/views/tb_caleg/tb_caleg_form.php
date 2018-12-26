<?php $this->load->view('template/header.php'); ?>
<?php $this->load->view('template/menu.php'); ?>
  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Data Caleg</h1>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">

                            <h2 style="margin-top:0px"><?php echo $button ?></h2>
                            <form action="<?php echo $action; ?>" method="post">
                                <div class="form-group">
                                    <label for="varchar">Dapil <?php echo form_error('id_dapil') ?></label>
                                    <select name="id_dapil" class="form-control" id="id_dapil">
                                        <option value="">--Pilih--</option>
                                        <?php foreach ($dapil as $dap) {
                                        echo "<option value='$dap[id]'>$dap[kode_dapil]</option>";
                                        } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="varchar">Partai <?php echo form_error('id_partai') ?></label>
                                    <select name="id_partai" class="form-control" id="id_partai">
                                        <option value="">--Pilih--</option>
                                        <?php foreach ($partai as $dap) {
                                        echo "<option value='$dap[id]'>$dap[kode]</option>";
                                        } ?>
                                    </select>
                                </div>
                        	    <div class="form-group">
                                    <label for="varchar">No Urut <?php echo form_error('no_urut') ?></label>
                                    <input type="text" class="form-control" name="no_urut" id="no_urut" placeholder="No Urut" value="<?php echo $no_urut; ?>" />
                                </div>
                        	    <div class="form-group">
                                    <label for="varchar">Nama <?php echo form_error('nama') ?></label>
                                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo $nama; ?>" />
                                </div>
                                <div class="form-group">
                                    <label for="varchar">Jenis Kelamin<?php echo form_error('jk') ?></label><br>
                                    <label class="radio-inline">
                                      <input value="L" class="col-md-2" type="radio" name="jk" id="jk" required/>Laki-Laki
                                    </label>
                                    <label  class="radio-inline">
                                      <input value="P" class="col-md-2" type="radio" name="jk" id="jk" required/>Perempuan
                                    </label>
                                </div>
                        	    <div class="form-group">
                                    <label for="varchar">Alamat <?php echo form_error('alamat') ?></label>
                                    <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" value="<?php echo $alamat; ?>" />
                                </div>
                        	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
                        	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
                        	    <a href="<?php echo site_url('tb_caleg') ?>" class="btn btn-default">Cancel</a>
                        	</form>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

<?php $this->load->view('template/footer.php'); ?>