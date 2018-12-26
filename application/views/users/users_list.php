<?php $this->load->view('template/header.php'); ?>
<?php $this->load->view('template/menu.php'); ?>
  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Data User</h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <div class="col-md-4"> 
                            <?php echo anchor(site_url('users/create'),'Create', 'class="btn btn-primary"'); ?>
                        </div>
                        <div class="col-md-4 text-center">
                            <div style="margin-top: 8px" id="message">
                                <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                            </div>
                        </div>
                        <div class="col-md-1 text-right">
                        </div>
                        <div class="col-md-3 text-right">
                            <form action="<?php echo site_url('users/index'); ?>" class="form-inline" method="get">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                                    <span class="input-group-btn">
                                        <?php 
                                            if ($q <> '')
                                            {
                                                ?>
                                                <a href="<?php echo site_url('users'); ?>" class="btn btn-default">Reset</a>
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
                            <th>Dapil</th>
                            <th>Kecamatan</th>
                            <th>Kelurahan</th>
                            <th>No. Tps</th>
                    		<th>Nama</th>
                    		<th>No Telp</th>
                    		<th>Pekerjaan</th>
                    		<th>Username</th>
                    	   <th width="200px">Action</th>
                        </tr><?php
                            foreach ($users_data as $users)
                            {
                                ?>
                        <tr>
                			<td align="center" width="50px"><?php echo ++$start ?></td>
                            <td><?php echo $users->id_dapil ?></td>
                            <td><?php echo $users->id_kecamatan ?></td>
                            <td><?php echo $users->id_kelurahan ?></td>
                            <td><?php echo $users->id_tps ?></td>
                			<td><?php echo $users->nama ?></td>
                			<td><?php echo $users->no_telp ?></td>
                			<td><?php echo $users->pekerjaan ?></td>
                			<td><?php echo $users->username ?></td>
                			<td style="text-align:center" width="200px">
                				<?php 
                				echo anchor(site_url('users/read/'.$users->id),'Read'); 
                                echo ' | '; 
                				echo anchor(site_url('users/update/'.$users->id),'Update'); 
                                echo ' | '; 
                				echo anchor(site_url('users/delete/'.$users->id),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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