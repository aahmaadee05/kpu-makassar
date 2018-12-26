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
            <h3 class="box-title">Dapil Satu</h3>
          </div>
          <div class="box-body">
            <div class="row">
              <div class="col-xs-12">
                <?php
                  foreach ($partai as $partaii)
                  {
                ?>
                <table class="table table-bordered" style="margin-bottom: 10px">
                  <tr>
                    <th style="text-align:center" width="50px">NOMOR URUT DCT</th>
                    <th style="text-align:center">PARTAI POLITIK / NAMA CALON</th>
                    <th style="text-align:center" width="200px">SUARA SAH</th>
                    <th style="text-align:center" width="100px">PERINGKAT SUARA SAH CALON</th>
                  </tr>
                  <tr>
                    <th></th>
                    <th style="text-align:center"><?php echo $partaii->no_urut ?>. <?php echo $partaii->kode ?>(<?php echo $partaii->nama ?>)</th>
                    <th></th>
                    <th></th>
                  </tr>
                  <?php 
                      $caleg_data = $this->Dapil_model->get_caleg($partaii->id);
                      foreach ($caleg_data as $cal)
                      {
                     ?>
                  <tr>
                    <td style="text-align:center"><?php echo $cal->no_caleg ?></td>
                    <td><?php echo $cal->nm_caleg ?></td>
                    <td style="text-align:right"><?php echo $cal->suara ?></td>
                    <td style="text-align:center"><?php echo $cal->rank ?></td>
                  </tr>
                    <?php
                      }
                    ?>
                  <?php 
                      $suara_partai = $this->Dapil_model->get_supar($partaii->id);
                      foreach ($suara_partai as $supar)
                      {
                     ?>
                  <tr>
                    <th style="text-align:center" colspan="2">Jumlah</th>
                    <th style="text-align:right"><?php echo $supar->suara ?></th>
                    <th></th>
                  </tr>  
                  <?php
                    }
                  ?>  
                </table>
                <br>
                <?php
                  }
                ?> 
              </div>
            </div>
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
