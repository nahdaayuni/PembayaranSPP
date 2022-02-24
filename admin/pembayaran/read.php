 <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pembayaran</h3>

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
                  <th>NISN</th>
                  <th>Nama</th>
                  <th>Kelas</th>
                  <th>Tanggal Bayar</th>
                  <th>SPP</th>
                  <th>Bulan</th>
                  <th>Tahun</th>
                  <th>Jumlah Bayar</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                <?php
$pembayaran=$mysqli->query("SELECT * FROM pembayaran,siswa,spp,petugas,kelas where pembayaran.nisn=siswa.nisn 
and pembayaran.id_spp=spp.id_spp and pembayaran.id_petugas=petugas.id_petugas 
and siswa.id_kelas=kelas.id_kelas");
$no=0;
while($data=mysqli_fetch_array($pembayaran)){
$no++;
?>
 <tr>
 <td><?php echo $no;?></td>
 <td><?php echo $data['nama_petugas'];?></td>
 <td><?php echo $data['nisn'];?></span></td>
 <td><?php echo $data['nama'];?></td>
 <td><?php echo $data['nama_kelas'];?></td>
 <td><?php echo $data['tgl_bayar'];?></td>
 <td><?php echo $data['nominal'];?></td>
 <td><?php echo $data['bulan'];?></td>
 <td><?php echo $data['tahun'];?></td>
 <td><?php echo $data['jumlah_bayar'];?></td>
 <td class="align-middle text-center text-m">
                          <?php
                          if($data['jumlah_bayar']==$data['nominal']){ ?>
                              <span class="badge badge-pill badge-primary">LUNAS</span>
                          <?php } else { ?>
                              <span class="badge badge-m bg-gradient-danger">BELUM LUNAS</span> <?php } ?>
                      </td>
 <td><a href="?pembayaran=edit&id_pembayaran=<?php echo $data['id_pembayaran'];?>" class="btn btn-warning btn-xs">Edit</a> | <a 
href="?pembayaran=delete&id_pembayaran=<?php echo $data['id_pembayaran'];?>" class="btn btn-danger btn-xs">Hapus</a></td>
                </tr>
                <?php } ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>