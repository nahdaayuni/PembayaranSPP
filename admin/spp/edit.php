<?php 
$edit=$mysqli->query("select*from spp where id_spp='$_GET[id_spp]'");
$e=mysqli_fetch_array($edit);
?>

<div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form Edit Data SPP</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="?spp=update">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">ID SPP</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="id_spp" 
                    placeholder="Masukkan Id SPP" name="id_sppdisabled"  
                    value="<?php echo $e['id_spp'];?>" disabled >

                    <input type="hidden" class="form-control" id="id_spp" 
                    placeholder="Masukkan Id SPP" name="id_spp"  
                    value="<?php echo $e['id_spp'];?>" >
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Tahun</label>

                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="tahun" placeholder="Masukkan Tahun" name="tahun"
                    value="<?php echo $e['tahun'];?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nominal</label>

                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="nominal" 
                    placeholder="Masukkan Nominal" name="nominal"
                    value="<?php echo $e['nominal'];?>">
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
               <a class="btn btn-default" href="?spp=read" >Cancel</a>
                <input type="submit" class="btn btn-info pull-right" value="Edit">
              </div>
              <!-- /.box-footer -->
            </form>
          </div>