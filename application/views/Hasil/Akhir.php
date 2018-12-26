<?php $this->load->view('template/header.php'); ?>
<?php $this->load->view('template/menu.php'); ?>
  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Daftar Calon Terpilih</h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
			            <table class="table table-Striped">
			            	<tr>
			            		<td colspan="7" style="text-align: center;font-weight: bold;">Daerah Pemilihan 1</td>
			            	</tr>
			            	<tr>
				                <th style="text-align:center" width="50px">NO</th>
				                <th style="text-align:center">PARTAI POLITIK</th>
				                <th style="text-align:center" width="50px">KURSI</th>
				                <th style="text-align:center" width="50px">NO URUT DCT</th>
				                <th style="text-align:center">NAMA CALON TERPILIH</th>
				                <th style="text-align:center">SUARA SAH</th>
				                <th style="text-align:center" width="100px">PERINGKAT SUARA SAH</th>
			            	</tr>
			            	<?php
			              	$no = 1;
			               	foreach ($satu as $satul) {
				            ?>
				            <tr>
				                <td style="text-align:center"><?php echo $no ?></td>
				                <td><?php echo $satul->nama ?></td>
				                <td style="text-align:center"><?php echo $satul->kursi ?></td>
				                <td style="text-align:center"><?php echo $satul->no_urut ?></td>
				                <td><?php echo $satul->caleg ?></td>
				                <td style="text-align:center"><?php echo $satul->suara ?></td>
				                <td style="text-align:center"><?php echo $satul->rank ?></td>
				            </tr>
			              <?php
			              	$no++;
			              }
			              ?>
			            </table>
                    </div>   
                </div>
                <div class="box">
                    <div class="box-header">
			            <table class="table table-Striped">
			            	<tr>
			            		<td colspan="7" style="text-align: center;font-weight: bold;">Daerah Pemilihan 2</td>
			            	</tr>
			            	<tr>
				                <th style="text-align:center" width="50px">NO</th>
				                <th style="text-align:center">PARTAI POLITIK</th>
				                <th style="text-align:center" width="50px">KURSI</th>
				                <th style="text-align:center" width="50px">NO URUT DCT</th>
				                <th style="text-align:center">NAMA CALON TERPILIH</th>
				                <th style="text-align:center">SUARA SAH</th>
				                <th style="text-align:center" width="100px">PERINGKAT SUARA SAH</th>
			            	</tr>
			            	<?php
			              	$no = 1;
			               	foreach ($dua as $dual) {
				            ?>
				            <tr>
				                <td style="text-align:center"><?php echo $no ?></td>
				                <td><?php echo $dual->nama ?></td>
				                <td style="text-align:center"><?php echo $dual->kursi ?></td>
				                <td style="text-align:center"><?php echo $dual->no_urut ?></td>
				                <td><?php echo $dual->caleg ?></td>
				                <td style="text-align:center"><?php echo $dual->suara ?></td>
				                <td style="text-align:center"><?php echo $dual->rank ?></td>
				            </tr>
			              <?php
			              	$no++;
			              }
			              ?>
			            </table>
                    </div>   
                </div>
                <div class="box">
                    <div class="box-header">
			            <table class="table table-Striped">
			            	<tr>
			            		<td colspan="7" style="text-align: center;font-weight: bold;">Daerah Pemilihan 3</td>
			            	</tr>
			            	<tr>
				                <th style="text-align:center" width="50px">NO</th>
				                <th style="text-align:center">PARTAI POLITIK</th>
				                <th style="text-align:center" width="50px">KURSI</th>
				                <th style="text-align:center" width="50px">NO URUT DCT</th>
				                <th style="text-align:center">NAMA CALON TERPILIH</th>
				                <th style="text-align:center">SUARA SAH</th>
				                <th style="text-align:center" width="100px">PERINGKAT SUARA SAH</th>
			            	</tr>
			            	<?php
			              	$no = 1;
			               	foreach ($tiga as $tigal) {
				            ?>
				            <tr>
				                <td style="text-align:center"><?php echo $no ?></td>
				                <td><?php echo $tigal->nama ?></td>
				                <td style="text-align:center"><?php echo $tigal->kursi ?></td>
				                <td style="text-align:center"><?php echo $tigal->no_urut ?></td>
				                <td><?php echo $tigal->caleg ?></td>
				                <td style="text-align:center"><?php echo $tigal->suara ?></td>
				                <td style="text-align:center"><?php echo $tigal->rank ?></td>
				            </tr>
			              <?php
			              	$no++;
			              }
			              ?>
			            </table>
                    </div>   
                </div>
                <div class="box">
                    <div class="box-header">
			            <table class="table table-Striped">
			            	<tr>
			            		<td colspan="7" style="text-align: center;font-weight: bold;">Daerah Pemilihan 4</td>
			            	</tr>
			            	<tr>
				                <th style="text-align:center" width="50px">NO</th>
				                <th style="text-align:center">PARTAI POLITIK</th>
				                <th style="text-align:center" width="50px">KURSI</th>
				                <th style="text-align:center" width="50px">NO URUT DCT</th>
				                <th style="text-align:center">NAMA CALON TERPILIH</th>
				                <th style="text-align:center">SUARA SAH</th>
				                <th style="text-align:center" width="100px">PERINGKAT SUARA SAH</th>
			            	</tr>
			            	<?php
			              	$no = 1;
			               	foreach ($empat as $empatl) {
				            ?>
				            <tr>
				                <td style="text-align:center"><?php echo $no ?></td>
				                <td><?php echo $empatl->nama ?></td>
				                <td style="text-align:center"><?php echo $empatl->kursi ?></td>
				                <td style="text-align:center"><?php echo $empatl->no_urut ?></td>
				                <td><?php echo $empatl->caleg ?></td>
				                <td style="text-align:center"><?php echo $empatl->suara ?></td>
				                <td style="text-align:center"><?php echo $empatl->rank ?></td>
				            </tr>
			              <?php
			              	$no++;
			              }
			              ?>
			            </table>
                    </div>   
                </div>
                <div class="box">
                    <div class="box-header">
			            <table class="table table-Striped">
			            	<tr>
			            		<td colspan="7" style="text-align: center;font-weight: bold;">Daerah Pemilihan 5</td>
			            	</tr>
			            	<tr>
				                <th style="text-align:center" width="50px">NO</th>
				                <th style="text-align:center">PARTAI POLITIK</th>
				                <th style="text-align:center" width="50px">KURSI</th>
				                <th style="text-align:center" width="50px">NO URUT DCT</th>
				                <th style="text-align:center">NAMA CALON TERPILIH</th>
				                <th style="text-align:center">SUARA SAH</th>
				                <th style="text-align:center" width="100px">PERINGKAT SUARA SAH</th>
			            	</tr>
			            	<?php
			              	$no = 1;
			               	foreach ($lima as $limal) {
				            ?>
				            <tr>
				                <td style="text-align:center"><?php echo $no ?></td>
				                <td><?php echo $limal->nama ?></td>
				                <td style="text-align:center"><?php echo $limal->kursi ?></td>
				                <td style="text-align:center"><?php echo $limal->no_urut ?></td>
				                <td><?php echo $limal->caleg ?></td>
				                <td style="text-align:center"><?php echo $limal->suara ?></td>
				                <td style="text-align:center"><?php echo $limal->rank ?></td>
				            </tr>
			              <?php
			              	$no++;
			              }
			              ?>
			            </table>
                    </div>   
                </div>
            </div>
        </div>
    </section>
</div>

<?php $this->load->view('template/footer.php'); ?>