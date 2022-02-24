<div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form Data SPP</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="?spp=create">
              <div class="box-body">
                <div class="form-group">
                  <!-- <label for="inputEmail3" class="col-sm-2 control-label">ID SPP</label> -->

                  <div class="col-sm-10">
                    <input type="hidden" class="form-control" id="id_spp" placeholder="Masukkan Id SPP" name="id_spp">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Tahun</label>

                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="tahun" placeholder="Masukkan Tahun" name="tahun">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nominal</label>

                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="nominal" 
                    placeholder="Masukkan Nominal" name="nominal">
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
                <input type="submit" class="btn btn-info pull-right" value="Simpan">
              </div>
              <!-- /.box-footer -->
            </form>
          </div>