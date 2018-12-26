<?php $this->load->view('template/header.php'); ?>
<?php $this->load->view('template/menu.php'); ?>
  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Data Dapil Lima</h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                      <form action="cetak_lima" method="post">
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
                              $caleg_data = $this->Dapil_model->get_caleg5($partaii->id);
                              foreach ($caleg_data as $cal)
                              {
                             ?>
                          <tr>
                            <td style="text-align:center"><?php echo $cal->no_caleg ?></td>
                            <td><?php echo $cal->nm_caleg ?></td>
                            <td style="text-align:right"><?php echo number_format($cal->suara) ?></td>
                            <td style="text-align:center"><?php echo $cal->rank ?></td>
                          </tr>
                            <?php
                              }
                            ?>
                          <?php 
                              $suara_partai = $this->Dapil_model->get_supar5($partaii->id);
                              foreach ($suara_partai as $supar)
                              {
                             ?>
                          <tr>
                            <th style="text-align:center" colspan="2">Jumlah</th>
                            <th style="text-align:right"><?php echo number_format($supar->suara) ?></th>
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
                        <button type="submit" class="btn btn-primary">Cetak</button> 
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php $this->load->view('template/footer.php'); ?>