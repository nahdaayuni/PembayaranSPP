<?php 
$edit=$mysqli->query("select * from pembayaran,siswa,spp where pembayaran.nisn=siswa.nisn and
siswa.id_spp=spp.id_spp and pembayaran.id_pembayaran='$_GET[id_pembayaran]'");
$e=mysqli_fetch_array($edit);
?>
<div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form Data Pembayaran</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="?pembayaran=update">
              <div class="box-body">
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Id Pembayaran</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="id_pembayaran" 
                    placeholder="Masukkan Id pembayaran" name="id_pembayarandisabled" value="<?php echo $e['id_pembayaran'];?>" disabled >

                    <input type="hidden" class="form-control" id="id_pembayaran" placeholder="Masukkan Id Pembayaran" name="id_pembayaran"  
                    value="<?php echo $e['id_pembayaran'];?>" >
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Petugas</label>
                   <div class="col-sm-10">
                  <select class="form-control" name="id_petugas">
                     <option>Pilih Petugas</option>
                    <?php

                        $petugas=$mysqli->query("SELECT * FROM petugas ORDER BY id_petugas");
                        $no=0;
                        while($data=mysqli_fetch_array($petugas)){
                        $no++;
                        ?>
                        <option value="<?php echo $data['id_petugas'];?>">

                    <?php echo $data['nama_petugas'];?></option>
                    <?php }?>
                  </select>
                </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">NISN</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nisn" 
                    placeholder="Masukkan NISN" name="nisndisabled" value="<?php echo $e['nisn'];?>" disabled >

                    <input type="hidden" class="form-control" id="nisn" placeholder="Masukkan NISN" name="nisn"  
                    value="<?php echo $e['nisn'];?>" >
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Siswa</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" 
                    placeholder="Masukkan Nama Siswa" name="namadisabled" value="<?php echo $e['nama'];?>" disabled >

                    <input type="hidden" class="form-control" id="nama" placeholder="Masukkan Nama Siswa" name="nama"  
                    value="<?php echo $e['nama'];?>" >
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Tanggal Bayar</label>

                  <div class="col-sm-10">
                    <input type="date" class="form-control" id="tgl_bayar" 
                    placeholder="Masukkan Tanggal Bayar" name="tgl_bayar" value="<?php echo $e['tgl_bayar'];?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">SPP</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nisn" 
                    placeholder="Masukkan Id SPP" name="idsppdisabled" value="<?php echo $e['nominal'];?>" disabled >

                    <input type="hidden" class="form-control" id="id_spp" placeholder="Masukkan Id SPP" name="id_spp"  
                    value="<?php echo $e['id_spp'];?>" >
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Bulan</label>
                   <div class="col-sm-10">
                  <select class="form-control" name="bulan" value="<?php echo $e['bulan'];?>">
                    <option>Pilih Bulan</option>
                    <option value="Januari">Januari</option>
                    <option value="Februari">Februari</option>
                    <option value="Maret">Maret</option>
                    <option value="April">April</option>
                    <option value="Mei">Mei</option>
                    <option value="Juni">Juni</option>
                    <option value="Juli">Juli</option>
                    <option value="Agustus">Agustus</option>
                    <option value="September">September</option>
                    <option value="Oktober">Oktober</option>
                    <option value="November">November</option>
                    <option value="Desember">Desember</option>
                  
                  </select>
                </div>
                </div>
                <!-- <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Tahun</label>

                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="tahun" 
                    placeholder="Masukkan Tahun" name="tahun" value="">
                  </div>
                </div>    -->

              <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Jumlah Bayar</label>

                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="jumlah_bayar" 
                    placeholder="Masukkan Jumlah Bayar" name="jumlah_bayar" value="<?php echo $e['jumlah_bayar'];?>">
                  </div>
                </div>                                                                                                                                                     
                
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Remember me
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              
              <!-- /.box-body -->
              <div class="box-footer">
                <a class="btn btn-default" href="?pembayaran=read" >Cancel</a>
                <input type="submit" class="btn btn-info pull-right" value="Simpan">
              </div>
              <!-- /.box-footer -->
            </form>
          </div>