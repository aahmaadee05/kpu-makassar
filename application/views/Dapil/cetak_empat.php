<!DOCTYPE html>
<html><head>
<!-- <link rel="shortcut icon" href="<?=base_url('assets/frontend/images/X.ico');?>"> -->
  
<title>Hasil</title>

	<style>
	  
		table{
		      
		border-collapse: collapse;
		      
		/*width: 100%;*/
		      
		/*margin: 0 auto;*/
		  
		}
		  
		table th{
		      
		border:1px solid #000;
		      
		padding: 3px;
		      
		font-weight: bold;
		      
		text-align: center;
		  
		}
		  
		table td{
		      
		border:1px solid #000;
		      
		padding: 3px;
		      
		vertical-align: top;
		  
		}
	</style>
</head><body>
<!-- kop -->
<table border="0">
	<tr>
		<td colspan="5" style="text-align:center">
			<img align="center" width="170px" height="100px" src="<?php echo('assets/datatables/images/kpu.png');?>">
		</td>
	</tr>
	<tr>		
		<td colspan="5">
			<p style="text-align: center;font-weight: bold;">RINCIAN JUMLAH PEROLEHAN SUARA SAH SETIAP PARTAI POLITIK DAN CALON ANGGOTA DPRD KABUPATEN/KOTA SERTA PERINGKAT SUARA SAH CALON ANGGOTA DPRD KABUPATEN/KOTA DALAM PEMILU TAHUN 2019</p>
		</td>
	</tr>
	<tr>
		<td></td>
		<td>KOTA</td>
		<td width="10px">:</td>
		<td>MAKASSAR</td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td>PROVINSI</td>
		<td width="10px">:</td>
		<td>SULAWESI SELATAN</td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td>DAERAH PEMILIHAN</td>
		<td width="10px">:</td>
		<td>MAKASSAR 4</td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
</table>
<hr>
<br>
<!-- N Kop -->

<!-- <h3 style="text-align: center; font-weight: bold;">Hasil Diagnosa</h3> -->
<!-- <p style="font-weight: bold;">NIK : <?php echo $this->session->userdata('nik'); ?></p> -->
<!-- <p style="font-weight: bold;">Nama Pasien : <?php echo $this->session->userdata('nama'); ?></p> -->
<!-- <p style="font-weight: bold;">Waktu Diagnosa : <?php echo $row->waktu;?></p> -->
<!-- <p style="font-weight: bold">Gejala yang dipilih :</p> -->
	<!-- <?php $i = 1; foreach($listGejala as $value){ 
		$cek_rule= $this->Diagnosa_model->get_row_rule($nm_penyakit->kd_penyakit,$value->id_gejala)->num_rows(); 
        $rule= $this->Diagnosa_model->get_row_rule($nm_penyakit->kd_penyakit,$value->id_gejala)->row(); { 
        	if ($cek_rule !== 0) $mb=$rule->mb; else $mb='-';
            if ($cek_rule !== 0) $md=$rule->md; else $md='-'; ?>
        <?php echo $i++."."?>
        <?php echo $value->gejala?><br>&nbsp;&nbsp;&nbsp;<?php echo ' MB: '.$mb.' MD: '.$md; ?><br>
    <?php }?>
    <?php }?>

<br>
<p style="font-weight: bold">Pasien Menderita : </p>
<!-- // <?php echo $nm_penyakit->nama_penyakit; ?> dengan nilai CF = <?php echo $row->cf; ?>-->

            <?php 
            	foreach ($partai as $partaii){
            ?>
            <table border="1" width="700px">
	            <tr>
	              <th style="text-align:center" width="50px">NOMOR URUT DCT</th>
	              <th style="text-align:center">PARTAI POLITIK / NAMA CALON</th>
	              <th style="text-align:center" width="100px">SUARA SAH</th>
	              <th style="text-align:center" width="100px">PERINGKAT SUARA SAH CALON</th>
	            </tr>
	            <tr>
	              <th></th>
	              <th style="text-align:center"><?php echo $partaii->no_urut ?>. <?php echo $partaii->kode ?>(<?php echo $partaii->nama ?>)</th>
	              <th></th>
	              <th></th>
	            </tr>
	            <?php 
	                $caleg_data = $this->Dapil_model->get_caleg4($partaii->id);
	                foreach ($caleg_data as $cal)
	                {
	               ?>
	            <tr>
	              <td style="text-align:center" width="50px"><?php echo $cal->no_caleg ?></td>
	              <td><?php echo $cal->nm_caleg ?></td>
	              <td style="text-align:right" width="100px"><?php echo $cal->suara ?></td>
	              <td style="text-align:center" width="100px"><?php echo $cal->rank ?></td>
	            </tr>
	              <?php
	                }
	              ?>
	            <?php 
	                $suara_partai = $this->Dapil_model->get_supar4($partaii->id);
	                foreach ($suara_partai as $supar)
	                {
	               ?>
	            <tr>
	              <th style="text-align:center" colspan="2">Jumlah</th>
	              <th style="text-align:right"><?php echo $supar->suara ?></th>
	              <th></th>
	            </tr>  
                  <?php
                    }
                  ?>  
            </table>
            <br>
            <br>
            <br>
	        <?php
	          }
	        ?>
	        <table width="700px" border="0">
	        	<tr>
	        		<td colspan="3"></td>
	        		<td style="text-align:right;" colspan="2" id="dateformat">Makassar, 5 Desember 2018</td>
	        	</tr>
	        	<tr>
	        		<td style="text-align:center" colspan="5"></td>
	        	</tr>
	        	<tr>
	        		<td style="text-align:center" colspan="5">KOMISI PEMILIHAN UMUM KOTA MAKASSAR</td>
	        	</tr>
	        	<tr>
	        		<td style="text-align:center" colspan="5"></td>
	        	</tr>
	        	<tr>
	        		<td style="text-align:center" colspan="5"></td>
	        	</tr>
	        	<tr>
	        		<td style="text-align:center">1.</td>
	        		<td>M. SYARIEF AMIR, S.Sos</td>
	        		<td>Ketua</td>
	        		<td style="text-align:center">1. .........</td>
	        		<td></td>
	        	</tr>
	        	<tr>
	        		<td style="text-align:center">2.</td>
	        		<td>ARMIN, S.Ag., M.Pd.I.</td>
	        		<td>Anggota</td>
	        		<td></td>
	        		<td style="text-align:center">2. .........</td>
	        	</tr>
	        	<tr>
	        		<td style="text-align:center">3.</td>
	        		<td>ANDI SHAIFUDDIN, S.Pd., S.Ag., MA.</td>
	        		<td>Anggota</td>
	        		<td style="text-align:center">3. .........</td>
	        		<td></td>
	        	</tr>
	        	<tr>
	        		<td style="text-align:center">4.</td>
	        		<td>RAHMA SAIYEDI, SS., M.COMN.</td>
	        		<td>Anggota</td>
	        		<td></td>
	        		<td style="text-align:center">4. .........</td>
	        	</tr>
	        	<tr>
	        		<td style="text-align:center">5.</td>
	        		<td>ABDULLAH MANSHUR, S.H.I.</td>
	        		<td>Anggota</td>
	        		<td style="text-align:center">5. .........</td>
	        		<td></td>
	        	</tr>
	        </table>
 <!-- <p style="font-weight: bold">Defenisi Penyakit :</p>   
 <p><?php echo $solusi->defenisi;?></p>
 <p style="font-weight: bold">Solusi Penyakit :</p>   
 <p><?php echo $solusi->solusi;?></p> -->
<!-- //	 -->
</body></html>