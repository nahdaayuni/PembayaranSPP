<div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form Data Petugas</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="?petugas=create">
              <div class="box-body">
                <div class="form-group">
                  <!-- <label for="inputEmail3" class="col-sm-2 control-label">ID Petugas</label> -->

                  <div class="col-sm-10">
                    <input type="hidden" class="form-control" id="id_petugas" placeholder="Masukkan Id Petugas" name="id_petugas">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Username</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="username" placeholder="Masukkan Username" name="username">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Petugas</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama_petugas" placeholder="Masukkan Nama Petugas" name="nama_petugas">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Level</label>
                   <div class="col-sm-10">
                  <select class="form-control" name="level">
                    <option value="admin">admin</option>
                    <option value="petugas">petugas</option>
                    
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
                <a class="btn btn-default" href="?petugas=read" >Cancel</a>
                <input type="submit" class="btn btn-info pull-right" value="Simpan">
              </div>
              <!-- /.box-footer -->
            </form>
          </div>