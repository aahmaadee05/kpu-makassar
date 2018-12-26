<?php $this->load->view('template/header.php'); ?>
<?php $this->load->view('template/menu.php'); ?>
  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Perhitungan Alokasi Kursi</h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <form action="<?php echo site_url('Metode/create_action'); ?>" class="form-inline" method="post">
                            <div class="form-group">
                                <label for="varchar">Pilih Dapil</label>
                                <select name="id_dapil" class="form-control" id="id_dapil"">
                                    <option value="">--Pilih--</option> {
                                    <?php foreach ($dapil as $dap){
                                        echo "<option value='$dap[id]'>$dap[kode_dapil]</option>";
                                    } ?>
                                </select>
                            </div>
                            <button class="btn btn-primary" type="submit">Tampil</button>
		                </form>
                    </div>      
                </div>
            </div>
        </div>
    </section>
</div>

<?php $this->load->view('template/footer.php'); ?>