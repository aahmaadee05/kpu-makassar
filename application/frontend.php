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
            <h3 class="box-title">Blank Box</h3>
          </div>
          <div class="box-body">
            <div class="row">
              <div class="col-xs-12">
                <table class="table table-bordered" style="margin-bottom: 10px">
                  <tr>
                    <th style="text-align:center" width="50px">NOMOR URUT</th>
                    <th style="text-align:center">PARTAI POLITIK</th>
                    <th style="text-align:center" width="200px">SUARA SAH</th>
                  </tr>
                  <?php
                    foreach ($partai as $partaii)
                    {
                  ?>
                  <tr>
                    <td style="text-align:center"><?php echo $partaii->no_partai ?></td>
                    <td><?php echo $partaii->nm_partai ?></td>
                    <td style="text-align:center"><?php echo $partaii->total ?></td>
                  </tr> 
                  <?php
                    }
                  ?>
                </table>
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
