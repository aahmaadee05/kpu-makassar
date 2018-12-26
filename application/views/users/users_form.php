<?php $this->load->view('template/header.php'); ?>
<?php $this->load->view('template/menu.php'); ?>
  <!-- Content Wrapper. Contains page content -->
          <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
        <script>
            function kecamatan_masuk() {
                var id = document.getElementById("id_dapil").value;
                $.ajax({
                            url : "<?php echo site_url('Users/get_kecamatan')?>/"+id,
                            method : "POST",
                            // data : {id: id},
                            async : false,
                            dataType : 'json',
                            success: function(data){
                                var html = '';
                                var i;
                                for(i=0; i<data.length; i++){
                                    html += '<option value="'+data[i].id+'">'+data[i].nama+'</option>';
                                }
                                document.getElementById("id_kecamatan").innerHTML = html;
                                 
                            }
                        });
                
            }
            function kelurahan_masuk() {
                var id = document.getElementById("id_kecamatan").value;
                $.ajax({
                            url : "<?php echo site_url('Users/get_kelurahan')?>/"+id,
                            method : "POST",
                            // data : {id: id},
                            async : false,
                            dataType : 'json',
                            success: function(data){
                                var html = '';
                                var i;
                                for(i=0; i<data.length; i++){
                                    html += '<option value="'+data[i].id+'">'+data[i].nama+'</option>';
                                }
                                document.getElementById("id_kelurahan").innerHTML = html;
                                 
                            }
                        });
                
            }
            function tps_masuk() {
                var id = document.getElementById("id_kelurahan").value;
                $.ajax({
                            url : "<?php echo site_url('Users/get_tps')?>/"+id,
                            method : "POST",
                            // data : {id: id},
                            async : false,
                            dataType : 'json',
                            success: function(data){
                                var html = '';
                                var i;
                                for(i=0; i<data.length; i++){
                                    html += '<option value="'+data[i].id+'">'+data[i].no_tps+'</option>';
                                }
                                document.getElementById("id_tps").innerHTML = html;
                                 
                            }
                        });
                
            }
        </script>
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

                            <h2 style="margin-top:0px"><?php echo $button ?></h2>
                            <form action="<?php echo $action; ?>" method="post">
                                <div class="form-group">
                                    <label for="varchar">Dapil <?php echo form_error('id_dapil') ?></label>
                                    <select name="id_dapil" onchange="kecamatan_masuk()" class="form-control dapil" id="id_dapil">
                                    <option value="">--Pilih--</option>
                                    <?php foreach ($dapil as $dap) {
                                        echo "<option value='$dap[id]'>$dap[kode_dapil]</option>";
                                    } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="varchar">Kecamatan <?php echo form_error('id_kecamatan') ?></label>
                                    <select name="id_kecamatan" onchange="kelurahan_masuk()" class="form-control" id="id_kecamatan">
                                        <option value="0">--Pilih--</option>            
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="varchar">Kelurahan <?php echo form_error('id_kelurahan') ?></label>
                                    <select name="id_kelurahan" onchange="tps_masuk()" class="form-control" id="id_kelurahan">
                                        <option value="0">--Pilih--</option>            
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="varchar">No. Tps <?php echo form_error('id_tps') ?></label>
                                    <select name="id_tps" class="form-control" id="id_tps">
                                        <option value="0">--Pilih--</option>            
                                    </select>
                                </div>
                        	    <div class="form-group">
                                    <label for="varchar">Nama <?php echo form_error('nama') ?></label>
                                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo $nama; ?>" />
                                </div>
                                <div class="form-group">
                                    <label for="varchar">Jenis Kelamin<?php echo form_error('jk') ?></label><br>
                                    <label class="radio-inline">
                                      <input value="L" class="col-md-2" type="radio" name="jk" id="jk" required/>Laki-Laki
                                    </label>
                                    <label  class="radio-inline">
                                      <input value="P" class="col-md-2" type="radio" name="jk" id="jk" required/>Perempuan
                                    </label>
                                </div>
                        	    <div class="form-group">
                                    <label for="varchar">No Telp <?php echo form_error('no_telp') ?></label>
                                    <input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="No Telp" value="<?php echo $no_telp; ?>" />
                                </div>
                        	    <div class="form-group">
                                    <label for="varchar">Pekerjaan <?php echo form_error('pekerjaan') ?></label>
                                    <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" placeholder="Pekerjaan" value="<?php echo $pekerjaan; ?>" />
                                </div>
                        	    <div class="form-group">
                                    <label for="varchar">Username <?php echo form_error('username') ?></label>
                                    <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?php echo $username; ?>" />
                                </div>
                        	    <div class="form-group">
                                    <label for="varchar">Password <?php echo form_error('password') ?></label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo $password; ?>" />
                                </div>
                        	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
                        	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
                        	    <a href="<?php echo site_url('users') ?>" class="btn btn-default">Cancel</a>
                        	</form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

<?php $this->load->view('template/footer.php'); ?>