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
</head>
<body>
<!-- kop -->
<table border="0" align="center">
	<tr>
		<td colspan="5" style="text-align:center">
			<img align="center" width="170px" height="100px" src="<?php echo('assets/datatables/images/kpu.png');?>">
		</td>
	</tr>
	<tr>		
		<td colspan="5" style="text-align: center;font-weight: bold;">
			DAFTAR CALON TERPILIH
		</td>
	</tr>
	<tr>		
		<td colspan="5" style="text-align: center;font-weight: bold;">
			ANGGOTA DEWAN PERWAKILAN RAKYAT DAERAH KABUPATEN/KOTA
		</td>
	</tr>
	<tr>		
		<td colspan="5" style="text-align: center;font-weight: bold;">
			PEMILIHAN UMUM TAHUN 2019
		</td>
	</tr>
	<tr>		
		<td colspan="5">
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
		<td>MAKASSAR 3</td>
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

            <table border="1" width="1032px">
            	<tr>
	                <th style="text-align:center" width="50px">NO</th>
	                <th style="text-align:center">PARTAI POLITIK</th>
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
            <br>
            <br>
            <br>
	        <table  align="center" " width="700px" border="0">
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
	        		<td>Ahmad Yani</td>
	        		<td>Ketua</td>
	        		<td style="text-align:center">1. .........</td>
	        		<td></td>
	        	</tr>
	        	<tr>
	        		<td style="text-align:center">2.</td>
	        		<td>Ahmad Yani</td>
	        		<td>Anggota</td>
	        		<td></td>
	        		<td style="text-align:center">2. .........</td>
	        	</tr>
	        	<tr>
	        		<td style="text-align:center">3.</td>
	        		<td>Ahmad Yani</td>
	        		<td>Anggota</td>
	        		<td style="text-align:center">3. .........</td>
	        		<td></td>
	        	</tr>
	        	<tr>
	        		<td style="text-align:center">4.</td>
	        		<td>Ahmad Yani</td>
	        		<td>Anggota</td>
	        		<td></td>
	        		<td style="text-align:center">4. .........</td>
	        	</tr>
	        	<tr>
	        		<td style="text-align:center">5.</td>
	        		<td>Ahmad Yani</td>
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