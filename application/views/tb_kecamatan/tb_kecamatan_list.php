<?php $this->load->view('template/header.php'); ?>
<?php $this->load->view('template/menu.php'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Data Kecamatan</h1>
    </section>
    <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
            
                    <div class="col-md-4">
                        <?php echo anchor(site_url('tb_kecamatan/create'),'Create', 'class="btn btn-primary"'); ?>
                    </div>
                    <div class="col-md-4 text-center">
                        <div style="margin-top: 8px" id="message">
                            <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                        </div>
                    </div>
                    <div class="col-md-1 text-right">
                    </div>
                    <div class="col-md-3 text-right">
                        <form action="<?php echo site_url('tb_kecamatan/index'); ?>" class="form-inline" method="get">
                            <div class="input-group">
                                <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                                <span class="input-group-btn">
                                    <?php 
                                        if ($q <> '')
                                        {
                                            ?>
                                            <a href="<?php echo site_url('tb_kecamatan'); ?>" class="btn btn-default">Reset</a>
                                            <?php
                                        }
                                    ?>
                                  <button class="btn btn-primary" type="submit">Search</button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
                <table class="table table-bordered table-hover" style="margin-bottom: 10px">
                    <tr>
                        <th style="text-align:center">No</th>
                		<th>Id Dapil</th>
                		<th>Nama</th>
                		<th style="text-align:center">Action</th>
                    </tr><?php
                            foreach ($tb_kecamatan_data as $tb_kecamatan)
                            {
                                ?>
                    <tr>
            			<td style="text-align:center" width="80px"><?php echo ++$start ?></td>
            			<td><?php echo $tb_kecamatan->id_dapil ?></td>
            			<td><?php echo $tb_kecamatan->nama ?></td>
                        <td style="text-align:center">
                            <?php 
                                echo anchor(site_url('tb_kecamatan/read/'.$tb_kecamatan->id),'Read'); 
                                echo ' | '; 
                                echo anchor(site_url('tb_kecamatan/update/'.$tb_kecamatan->id),'Update'); 
                                echo ' | '; 
                                echo anchor(site_url('tb_kecamatan/delete/'.$tb_kecamatan->id),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
                                ?>
                        </td>
            		</tr>
                                <?php
                            }
                            ?>
                </table>
                <div class="box-header">
                    <div class="col-md-6">
                        <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
                    </div>
                    <div class="col-md-6 text-right">
                        <?php echo $pagination ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php $this->load->view('template/footer.php'); ?>