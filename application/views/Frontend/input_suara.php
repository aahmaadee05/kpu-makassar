<?php $this->load->view('template/header.php'); ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
<?php $this->load->view('template/menu_bar.php'); ?>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <section class="content">
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Input Suara Tps <?php echo $this->session->userdata('id_tps') ?> Dapil <?php echo $this->session->userdata('id_dapil') ?></h3>
            <div style="margin-top: 8px" id="message">
                <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
            </div>
          </div>
          <div class="box-body">
            <form action="<?php echo base_url('Input/create_action'); ?>" method="post">
              <table class="table table-bordered " style="margin-bottom: 10px">
                <?php
                  $i = 1;
                  foreach ($partai as $paar)
                  {
                      ?>
                <tr>
                  <th><?php echo $paar->no_urut ?></th>
                  <th colspan="2"><?php echo $paar->kode ?> (<?php echo $paar->nama ?>)</th>
                </tr>
                <tr>
                  <th>No Urut</th>
                  <th>Nama Caleg</th>
                  <th>Suara</th>
                </tr>
                <?php
                  $tps = $this->Input_model->get_dapil($this->session->userdata('id_tps'));
                  $caleg_data = $this->Input_model->get_list_tps($tps->id_dapil,$paar->id);
                  $j = 1;
                  foreach ($caleg_data as $caleg)
                  {
                    ?>
                <tr>
                  <td><?php echo $caleg->no_urut ?></td>
                  <td><?php echo $caleg->nama ?></td>
                  <td><input name="suara[<?php echo $i; ?><?php echo $j; ?>]" id="suara" type="text" class="form-control" /></td>
                </tr>
                <?php
                  $j++;
                  }
                ?>

                <?php
                  $i++;
                 }
                ?>
                <tr>
                  <td>
                    <button type="submit" class="btn btn-primary">Simpan</button> 
                  </td>
                </tr>
              </table>
            </form>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>

<?php $this->load->view('template/footer1.php'); ?>