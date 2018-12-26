<?php $this->load->view('template/header.php'); ?>
<?php $this->load->view('template/menu.php'); ?>

  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo count($dapil) ?></h3>
              <h4>Jumlah dapil</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo count($kecamatan) ?></h3>
              <h4>Jumlah Kecamatan</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3><?php echo count($kelurahan) ?></h3>
              <h4>Jumlah Kelurahan</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-light-blue">
            <div class="inner">
              <h3><?php echo count($tps) ?></h3>
              <h4>Jumlah Tps</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo count($partai) ?></h3>
              <h4>Jumlah Partai</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo count($caleg) ?></h3>
              <h4>Jumlah Caleg</h4>
            </div>
          </div>
        </div>
    </section>
  </div>

<?php $this->load->view('template/footer.php'); ?>