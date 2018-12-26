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
                        <div class="col-md-4">          
                            <?php echo anchor(site_url('tb_caleg/create'),'Create', 'class="btn btn-primary"'); ?>
                        </div>
                        <div class="col-md-4 text-center">
                            <div style="margin-top: 8px" id="message">
                                <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                            </div>
                        </div>
                        <div class="col-md-1 text-right">
                        </div>
                        <div class="col-md-3 text-right">
                            <form action="<?php echo site_url('tb_caleg/index'); ?>" class="form-inline" method="get">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                                    <span class="input-group-btn">
                                        <?php 
                                            if ($q <> '')
                                            {
                                                ?>
                                                <a href="<?php echo site_url('tb_caleg'); ?>" class="btn btn-default">Reset</a>
                                                <?php
                                            }
                                        ?>
                                      <button class="btn btn-primary" type="submit">Search</button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <table class="table table-striped" style="margin-bottom: 10px">
                        <tr>
                            <th align="center">No</th>
<!--                     		<th>Id Dapil</th>
                    		<th>Id Partai</th> -->
                    		<th>No Urut</th>
                    		<th>Nama</th>
                    		<th>Jk</th>
                    		<th>Alamat</th>
                    		<th>Action</th>
                        </tr><?php
                            foreach ($tb_caleg_data as $tb_caleg)
                            {
                                ?>
                        <tr>
                			<td align="center" width="50px"><?php echo ++$start ?></td>
<!--                 			<td><?php echo $tb_caleg->id_dapil ?></td>
                			<td><?php echo $tb_caleg->id_partai ?></td> -->
                			<td><?php echo $tb_caleg->no_urut ?></td>
                			<td><?php echo $tb_caleg->nama ?></td>
                			<td><?php echo $tb_caleg->jk ?></td>
                			<td><?php echo $tb_caleg->alamat ?></td>
                            <td class="btn group" style="text-align:center" width="80px">
                                <?php 
                                    echo anchor(site_url('tb_caleg/read/'.$tb_caleg->id),'Read',array('class'=>'btn btn-info btn-sm'));
                                    echo anchor(site_url('tb_caleg/update/'.$tb_caleg->id),'Update',array('class'=>'btn btn-primary btn-sm'));
                                    echo anchor(site_url('tb_caleg/delete/'.$tb_caleg->id),'Delete',array('class'=>'btn btn-danger btn-sm'),'onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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
        </div>
    </section>
</div>

<?php $this->load->view('template/footer.php'); ?>