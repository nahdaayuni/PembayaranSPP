 <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Siswa | <a href="?siswa=add">Tambah Data</a></h3>

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
                  <th>NISN</th>
                  <th>NIS</th>
                  <th>Nama</th>
                  <th>Kelas</th>
                  <th>Alamat</th>
                  <th>No Telp</th>
                  <th>SPP</th>
                  <th>Action</th>
                </tr>
                <?php
$siswa=$mysqli->query("SELECT * FROM siswa,kelas,spp where 
siswa.id_kelas=kelas.id_kelas and siswa.id_spp=spp.id_spp");
$no=0;
while($data=mysqli_fetch_array($siswa)){
$no++;
?>
 <tr>
 <td><?php echo $no;?></td>
 <td><?php echo $data['nisn'];?></td>
 <td><?php echo $data['nis'];?></td>
 <td><?php echo $data['nama'];?></span></td>
 <td><?php echo $data['nama_kelas'];?> | <?php echo $data['kompetensi_keahlian'];?></td>
 <td><?php echo $data['alamat'];?></td>
 <td><?php echo $data['no_telp'];?></td>
 <td><?php echo $data['nominal'];?></td>
<td><a href="?pembayaran=add&nisn=<?php echo $data['nisn'];?>" class="btn btn-success btn-xs">Bayar</a> |
<a href="?siswa=edit&nisn=<?php echo $data['nisn'];?>" class="btn btn-warning btn-xs">Edit</a> |
<a href="?siswa=delete&nisn=<?php echo $data['nisn'];?>" class="btn btn-danger btn-xs">Hapus</a></td>

                </tr>
                <?php } ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>