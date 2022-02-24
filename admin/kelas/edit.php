<?php 
$edit=$mysqli->query("select*from kelas where id_kelas='$_GET[id_kelas]'");
$e=mysqli_fetch_array($edit);
?>

<div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form Edit Data Kelas</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="?kelas=update">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">ID Kelas</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="id_kelas" placeholder="Masukkan Id Kelas" name="id_kelasdisabled"  
                    value="<?php echo $e['id_kelas'];?>" disabled >

                    <input type="hidden" class="form-control" id="id_kelas" placeholder="Masukkan Id Kelas" name="id_kelas"  
                    value="<?php echo $e['id_kelas'];?>" >
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Kelas</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama_kelas" placeholder="Masukkan Nama Kelas" name="nama_kelas"
                    value="<?php echo $e['nama_kelas'];?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Kompetensi Keahlian</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="kompetensi_keahlian" 
                    placeholder="Masukkan Kompetensi Keahlian" name="kompetensi_keahlian"
                    value="<?php echo $e['kompetensi_keahlian'];?>">
                  </div>
                </div>
                
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
                <a class="btn btn-default" href="?kelas=read" >Cancel</a>
                <input type="submit" class="btn btn-info pull-right" value="Edit">
              </div>
              <!-- /.box-footer -->
            </form>
          </div>