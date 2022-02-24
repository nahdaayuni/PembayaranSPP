<div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form Data Siswa</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="?siswa=create">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">NISN</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nisn" placeholder="Masukkan NISN" name="nisn">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">NIS</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nis" placeholder="Masukkan NIS" name="nis">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Siswa" name="nama">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Kelas</label>
                   <div class="col-sm-10">
                  <select class="form-control" name="id_kelas">
                     <option>Pilih Kelas</option>
                    <?php
$kelas=$mysqli->query("SELECT * FROM kelas ORDER BY id_kelas");
$no=0;
while($data=mysqli_fetch_array($kelas)){
$no++;
?>
                    <option value="<?php echo $data['id_kelas'];?>">
                    <?php echo $data['nama_kelas'];?> | <?php echo $data['kompetensi_keahlian'];?></option>
                   
                    <?php }?>
                  </select>
                </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat" name="alamat">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">No Telepon</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="no_telp" placeholder="Masukkan Nomor Telepon" name="no_telp">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">SPP</label>
                   <div class="col-sm-10">
                    <select class="form-control" name="id_spp">
                     <option>Pilih SPP</option>
                    <?php
$spp=$mysqli->query("SELECT * FROM spp ORDER BY id_spp");
$no=0;
while($data=mysqli_fetch_array($spp)){
$no++;
?>
                    <option value="<?php echo $data['id_spp'];?>">
                    <?php echo $data['tahun'];?> | <?php echo $data['nominal'];?></option>
                   
                    <?php }?>
                  </select>
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
                <a class="btn btn-default" href="?siswa=read" >Cancel</a>
                <input type="submit" class="btn btn-info pull-right" value="Simpan">
              </div>
              <!-- /.box-footer -->
            </form>
          </div>