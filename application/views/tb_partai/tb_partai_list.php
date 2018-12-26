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
                    <div class="col-md-4">
                        <?php echo anchor(site_url('tb_partai/create'),'Create', 'class="btn btn-primary"'); ?>
                    </div>
                    <div class="col-md-4 text-center">
                        <div style="margin-top: 8px" id="message">
                            <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                        </div>
                    </div>
                    <div class="col-md-1 text-right">
                    </div>
                    <div class="col-md-3 text-right">
                        <form action="<?php echo site_url('tb_partai/index'); ?>" class="form-inline" method="get">
                            <div class="input-group">
                                <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                                <span class="input-group-btn">
                                    <?php 
                                        if ($q <> '')
                                        {
                                            ?>
                                            <a href="<?php echo site_url('tb_partai'); ?>" class="btn btn-default">Reset</a>
                                            <?php
                                        }
                                    ?>
                                  <button class="btn btn-primary" type="submit">Search</button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
                <table class="table table-striped table-hover" style="margin-bottom: 10px">
                    <tr>
                        <th align="center">No</th>
                		<th>No Urut</th>
                		<th>Kode</th>
                		<th>Nama</th>
                		<th width="200px">Action</th>
                    </tr><?php
                    foreach ($tb_partai_data as $tb_partai)
                    {
                        ?>
                    <tr>
            			<td align="center" width="50px"><?php echo ++$start ?></td>
            			<td><?php echo $tb_partai->no_urut ?></td>
            			<td><?php echo $tb_partai->kode ?></td>
            			<td><?php echo $tb_partai->nama ?></td>
                        <td class="btn group" style="text-align:center" width="200px">
                            <?php 
                                echo anchor(site_url('tb_partai/read/'.$tb_partai->id),'Read',array('class'=>'btn btn-info btn-sm'));
                                echo anchor(site_url('tb_partai/update/'.$tb_partai->id),'Update',array('class'=>'btn btn-primary btn-sm'));
                                echo anchor(site_url('tb_partai/delete/'.$tb_partai->id),'Delete',array('class'=>'btn btn-danger btn-sm'),'onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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