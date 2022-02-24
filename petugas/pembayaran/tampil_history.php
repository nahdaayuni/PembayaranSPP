<?php
require_once("../koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
<body >
     <?php require_once("index.php"); ?>

<?php
// Kita lakukan proses pencariannya disini
if(isset($_POST['cari'])){
    $nisn = $_POST['nisn'];
    // Kita panggil table siswa
    $biodataSiswa = mysqli_query($con, "SELECT * FROM siswa 
                    JOIN kelas ON siswa.id_kelas=kelas.id_kelas 
                    WHERE nisn='$nisn'");
    // Table pembayaran wajib kita panggil
    $historyPembayaran = mysqli_query($con, "SELECT * FROM pembayaran
                         JOIN petugas ON pembayaran.id_petugas=petugas.id_petugas
                         JOIN spp ON pembayaran.id_spp=spp.id_spp JOIN siswa ON pembayaran.nisn=siswa.nisn
                         ORDER BY tgl_bayar");
    $r_siswa = mysqli_fetch_assoc($biodataSiswa);
?>

    <!-- Kita tampilkan Biodata Siswa -->
    <div class="col-md-12">
          <div class="box box-primary">
            <!-- <div class="box-header"> -->
              <!-- <h3 class="box-title">Date picker</h3> --> 
        <h3 align="center">Biodata Siswa</h3></br>
        <ul class="list-group list-group-unbordered" style="margin-left: 60px; font-size: 15px;">
                <p>
                  <b>NISN  : </b> <?= $r_siswa['nisn']; ?></a>
              </p>
              <p>
                  <b>NIS : </b> <?= $r_siswa['nis']; ?>
              </p>
              <p>
                  <b>Nama : </b><?= $r_siswa['nama']; ?>
              </p>
               <p>
                  <b>Kelas : </b><?= $r_siswa['nama_kelas'] . " | " . $r_siswa['kompetensi_keahlian'];?>
              </p>
            </ul>
        <!-- Sekarang kita tampilkan history pembayarannya -->
        <div class="row">
        <div class="col-xs-12">
          <!-- <div class="box "> -->
            <div class="box-header">
              <h3 align="center">History Pembayaran</h3></br>
              <!-- <div class="box-tools">
                <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div> -->
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
            <tr>
                <td>No. </td>
                <td>Tanggal Pembayaran</td>
                <td>Pembayaran Melalui</td>
                <td>Tahun SPP | Nominal yang harus dibayar</td>
                <td>Bulan</td>
                <td>Jumlah yang sudah dibayar</td>
                <td>Status</td>
                <td>Aksi</td>
            </tr>
        
<?php 
$no=1;
while($r_trx = mysqli_fetch_assoc($historyPembayaran)){ ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $r_trx['tgl_bayar']; ?></td>
                <td><?= $r_trx['nama_petugas']; ?></td>
                <td><?= $r_trx['tahun'] . " | Rp. " . $r_trx['nominal']; ?></td>
                <td><?= $r_trx['bulan']; ?></td>
                <td><?= "Rp. " . $r_trx['jumlah_bayar']; ?></td>
<?php
if($r_trx['jumlah_bayar'] == $r_trx['nominal']){ ?>
                <td ><span class = "label label-success">LUNAS</span></td>
                <td>-</td>
<?php }else{ ?> <td><span class="label label-danger">BELUM LUNAS</span></td>
                <td><a href="?pembayaran=edit&id_pembayaran=<?php echo $r_trx['id_pembayaran'];?>" class="label label-warning">
                BAYAR LUNAS</a></td>
<?php } ?>
            </tr>
<?php $no++; }?>
        </table>  
</br>
</br>
</br>
         <!-- <a href="?pembayaran=print" target="_blank" class="btn btn-success btn-block btn-sm"><b>CETAK HISTORY PEMBAYARAN</b></a> -->
<?php } ?>
   
<body>
</html>