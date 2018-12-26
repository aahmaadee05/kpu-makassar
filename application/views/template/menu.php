<?php $page = $this->uri->segment(1); ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>KPU</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>KPU</b> Makassar</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-user" class="user-image" alt="User Image"></i>
            </a>
            <ul class="dropdown-menu">
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-16 text-center">
                    <a href="#">
                      <?php echo $this->session->userdata('nama') ?>
                    </a>
                  </div>
                  <div class="col-xs-16 text-center">
                    <a href="#">
                      <small>Teknik Informatika</small>
                    </a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url('login/logout') ?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <div class="user-panel">
        <div class="pull-left image">
          <img width="250 px" height="170 px" src="<?php echo('assets/datatables/images/kpu.png');?>">
        </div>
      </div>    
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li <?php if($page=="backend") echo 'class="active"'; ?>>
          <a href="<?php echo base_url('backend/index');?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li <?php if($page=="tb_partai" ||$page=="tb_caleg" || $page=="tb_dapil" || $page=="tb_kecamatan" || $page=="tb_kelurahan" || $page=="tb_tps") echo 'class="treeview active"'; ?>>
          <a href="#">
            <i class="fa fa-edit"></i> <span>Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php if($page=="tb_dapil") echo 'class="active"'; ?>><a href="<?php echo base_url();?>tb_dapil/index"><i class="fa fa-circle-o"></i>Dapil</a></li>
            <li <?php if($page=="tb_kecamatan") echo 'class="active"'; ?>><a href="<?php echo base_url();?>tb_kecamatan/index"><i class="fa fa-circle-o"></i>Kecamatan</a></li>
            <li <?php if($page=="tb_kelurahan") echo 'class="active"'; ?>><a href="<?php echo base_url();?>tb_kelurahan/index"><i class="fa fa-circle-o"></i>Kelurahan</a></li>
            <li <?php if($page=="tb_tps") echo 'class="active"'; ?>><a href="<?php echo base_url();?>tb_tps/index"><i class="fa fa-circle-o"></i>Tps</a></li>
            <li <?php if($page=="tb_partai") echo 'class="active"'; ?>><a href="<?php echo base_url();?>tb_partai/index"><i class="fa fa-circle-o"></i>Partai</a></li>
            <li <?php if($page=="tb_caleg") echo 'class="active"'; ?>><a href="<?php echo base_url();?>tb_caleg/index"><i class="fa fa-circle-o"></i>Caleg</a></li>
          </ul>
        </li>
        <li <?php if($page=="Dapil") echo 'class="treeview active"'; ?>>
          <a href="#">
            <i class="fa fa-table"></i> <span>Suara CALEG dan Partai</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php if($page=="dapil") echo 'class="active"'; ?>><a href="<?php echo base_url('dapil/satu');?>"><i class="fa fa-circle-o"></i>Dapil Satu</a></li>
            <li <?php if($page=="dapil") echo 'class="active"'; ?>><a href="<?php echo base_url('dapil/dua');?>"><i class="fa fa-circle-o"></i>Dapil Dua</a></li>
            <li <?php if($page=="dapil") echo 'class="active"'; ?>><a href="<?php echo base_url('dapil/tiga');?>"><i class="fa fa-circle-o"></i>Dapil Tiga</a></li>
            <li <?php if($page=="dapil") echo 'class="active"'; ?>><a href="<?php echo base_url('dapil/empat');?>"><i class="fa fa-circle-o"></i>Dapil Empat</a></li>
            <li <?php if($page=="dapil") echo 'class="active"'; ?>><a href="<?php echo base_url('dapil/lima');?>"><i class="fa fa-circle-o"></i>Dapil Lima</a></li>
          </ul>
        </li>
        <li <?php if($page=="Metode" || $page=="Hasil") echo 'class="treeview active"'; ?>>
          <a href="#">
            <i class="fa fa fa-th"></i> <span>Perhitungan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php if($page=="Metode") echo 'class="active"'; ?>><a href="<?php echo base_url();?>Metode/index"><i class="fa fa-circle-o"></i>Sainte Lague</a></li>
            <li <?php if($page=="Hasil") echo 'class="active"'; ?>><a href="<?php echo base_url();?>Hasil/index"><i class="fa fa-circle-o"></i>Hasil</a></li>
          </ul>
        </li>
        <li <?php if($page=="") echo 'class="treeview active"'; ?>>
          <a href="#">
            <i class="fa fa-file"></i> <span>Laporan CALEG terpilih</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php if($page=="") echo 'class="active"'; ?>><a href="<?php echo base_url('hasil/cetak_1');?>"><i class="fa fa-circle-o"></i>Dapil Satu</a></li>
            <li <?php if($page=="") echo 'class="active"'; ?>><a href="<?php echo base_url('hasil/cetak_2');?>"><i class="fa fa-circle-o"></i>Dapil Dua</a></li>
            <li <?php if($page=="") echo 'class="active"'; ?>><a href="<?php echo base_url('hasil/cetak_3');?>"><i class="fa fa-circle-o"></i>Dapil Tiga</a></li>
            <li <?php if($page=="") echo 'class="active"'; ?>><a href="<?php echo base_url('hasil/cetak_4');?>"><i class="fa fa-circle-o"></i>Dapil Empat</a></li>
            <li <?php if($page=="") echo 'class="active"'; ?>><a href="<?php echo base_url('hasil/cetak_5');?>"><i class="fa fa-circle-o"></i>Dapil Lima</a></li>
          </ul>
        </li>
        <li <?php if($page=="Users") echo 'class="active"'; ?>>
          <a href="<?php echo base_url('Users/index');?>">
            <i class="fa fa-user"></i> <span>User</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

