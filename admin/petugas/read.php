 <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Petugas | <a href="?petugas=add">Tambah Data</a></h3>

              <div class="box-tools">
                <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>No</th>
                  <th>ID Petugas</th>
                  <th>Username</th>
                  <th>Nama Petugas</th>
                  <th>Level</th>
                  <th>Action</th>
                </tr>
                <?php
$petugas=$mysqli->query("SELECT * FROM petugas ORDER BY id_petugas");
$no=0;
while($data=mysqli_fetch_array($petugas)){
$no++;
?>
 <tr>
 <td><?php echo $no;?></td>
 <td><?php echo $data['id_petugas'];?></td>
 <td><?php echo $data['username'];?></td>
 <td><?php echo $data['nama_petugas'];?></span></td>
 <td><?php echo $data['level'];?></td>
 
 <td><a href="?petugas=edit&id_petugas=<?php echo $data['id_petugas'];?>" class="btn btn-danger btn-xs">Edit</a> | <a 
href="?petugas=delete&id_petugas=<?php echo $data['id_petugas'];?>" class="btn btn-warning btn-xs">Hapus</a></td>

                </tr>
                <?php } ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>