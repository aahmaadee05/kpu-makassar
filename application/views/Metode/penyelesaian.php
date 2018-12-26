<?php $this->load->view('template/header.php'); ?>
<?php $this->load->view('template/menu.php'); ?>
  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Perhitungan Alokasi Kursi</h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <form action="<?php echo site_url('Metode/create_action'); ?>" class="form-inline" method="post">
                            <div class="form-group">
                                <label for="varchar">Pilih Dapil</label>
                                <select name="id_dapil" class="form-control" id="id_dapil" placeholder="Kode">
                                    <option value="">--Pilih--</option> {
                                    <?php foreach ($dapil as $dap){
                                        echo "<option value='$dap[id]'>$dap[kode_dapil]</option>";
                                    } ?>
                                </select>
                            </div>
                            <button class="btn btn-primary" type="submit">Tampil</button>
		                </form>
				            <hr>
				            <table class="table table-Striped" style="margin-bottom: 25px">
			            		<tr>
			            			<th bgcolor="concrete" colspan="8">TAHAP 1 : Perolehan suara sah di BAGI dengan angka ganjil 1,3,5,7,9</th>
			            		</tr>
				              	<tr bgcolor="turquoise">
				                	<th style="text-align:center" width="50px">NOMOR URUT</th>
				                	<th style="text-align:center">PARTAI POLITIK</th>
				                	<th style="text-align:center">SUARA SAH</th>
				                	<th style="text-align:center">Nilai 1</th>
				                	<th style="text-align:center">Nilai 2</th>
				                	<th style="text-align:center">Nilai 3</th>
				                	<th style="text-align:center">Nilai 4</th>
				                	<th style="text-align:center">Nilai 5</th>
				              	</tr>
					              <?php 
					               foreach ($partai as $partaii) {

					              ?>
				            	<tr>
				                	<td style="text-align:center"><?php echo $partaii->no_urut ?></td>
				                	<td><?php echo $partaii->kode ?></td>
					                <td style="text-align:center"><?php echo number_format($partaii->suara,0) ?></td>
					                <td style="text-align:center"><?php echo number_format($partaii->N1,0) ?></td>
					                <td style="text-align:center"><?php echo number_format($partaii->N2,0) ?></td>
					                <td style="text-align:center"><?php echo number_format($partaii->N3,0) ?></td>
					                <td style="text-align:center"><?php echo number_format($partaii->N4,0) ?></td>
					                <td style="text-align:center"><?php echo number_format($partaii->N5,0) ?></td>
					            </tr>
					              <?php
					              	}
					              ?>
				            </table>
				            <table class="table table-Striped" style="margin-bottom: 25px">
			            		<tr>
			            			<th bgcolor="concrete" colspan="4">TAHAP 2 : Bilangan hasil bagi tersebut di Rangking berdasarkan jumlah kursi tiap dapil</th>
			            		</tr>
				            	<tr bgcolor="turquoise">
					                <th style="text-align:center" width="50px">NO</th>
					                <th style="text-align:center">PERINGKAT SUARA</th>
					                <th style="text-align:center">SUARA SAH</th>
					                <th style="text-align:center">PARTAI POLITIK</th>
				            	</tr>
					              <?php 
					              $no = 1;
					               foreach ($ranking as $rankingg) {

					              ?>
					            <tr>
					            	<td style="text-align:center"><?php echo $no ?></td>
					                <td> Kursi Ke - <?php echo $no ?></td>
					                <td style="text-align:center"><?php echo number_format($rankingg->Ranking,0) ?></td>
					                <td style="text-align:center"><?php echo $rankingg->kode ?></td>
					            </tr>
					              <?php
					              	$no++;
					              }
					              ?>
				            </table>
				            <table class="table table-Striped" style="margin-bottom: 25px">
			            		<tr>
			            			<th bgcolor="concrete" colspan="3">TAHAP 3 : Menentukan perolehan kursi berdasarkan nilai tertinggi</th>
			            		</tr>
				            	<tr bgcolor="turquoise">
					                <th style="text-align:center" width="50px">NO</th>
					                <th style="text-align:center">PARTAI POLITIK</th>
					                <th style="text-align:center">KURSI</th>
				            	</tr>
				            	<?php 
				              	$no = 1;
				               	foreach ($kursi_partai as $k_partai) {
					            ?>
					            <tr>
					                <td style="text-align:center"><?php echo $no ?></td>
					                <td style="text-align:center"><?php echo $k_partai->kode ?></td>
					                <td style="text-align:center"><?php echo $k_partai->jm_kursi ?></td>
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