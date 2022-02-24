 <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Kelas | <a href="?kelas=add">Tambah Data</a></h3>

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
                  <th>Nama Kelas</th>
                  <th>Kompetensi Keahlian</th>
                  <th>Action</th>
                </tr>
                <?php
$kelas=$mysqli->query("SELECT * FROM kelas ORDER BY id_kelas");
$no=0;
while($data=mysqli_fetch_array($kelas)){
$no++;
?>
 <tr>
 <td><?php echo $no;?></td>
 <td><?php echo $data['nama_kelas'];?></td>
 <td><?php echo $data['kompetensi_keahlian'];?></span></td>
 
 <td><a href="?kelas=edit&id_kelas=<?php echo $data['id_kelas'];?>" class="btn btn-warning btn-xs">Edit</a> | <a 
href="?kelas=delete&id_kelas=<?php echo $data['id_kelas'];?>" class="btn btn-danger btn-xs">Hapus</a></td>

                </tr>
                <?php } ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
