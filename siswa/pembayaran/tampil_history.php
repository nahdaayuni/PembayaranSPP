<?php
require_once("../koneksi.php");
?>
<?php session_start();
if($_SESSION['status_login']!=true){
  header ('location: ../login_siswa.php');
} ?>
<!DOCTYPE html>
<html lang="en">
<body >
     <?php require_once("index_siswa.php"); ?>
    <!-- Kita tampilkan Biodata Siswa -->
    <div class="col-md-12">
          <div class="box box-primary">
            <!-- <div class="box-header"> -->
              <!-- <h3 class="box-title">Date picker</h3> --> 
        <h3 align="center">Biodata Siswa</h3>
      </br>
      </br>
      <?php 
			include "../koneksi.php";
			$qry_siswa=mysqli_query($con,"select * from siswa join kelas on siswa.id_kelas=kelas.id_kelas where siswa.nisn = "  .$_SESSION['nisn'] );
			$r_siswa =mysqli_fetch_array($qry_siswa);
			?>

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
              <p>
                  <b>Alamat : </b><?= $r_siswa['alamat']; ?>
              </p>
               <p>
                  <b>No.Telpon : </b><?= $r_siswa['no_telp']; ?>
              </p>
            </ul>
        <!-- Sekarang kita tampilkan history pembayarannya -->
        <div class="row">
        <div class="col-xs-12">
          <!-- <div class="box "> -->
            <div class="box-header">
              <h3 align="center">History Pembayaran</h3></br>
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
            </tr>
        
            <?php 

								include "../koneksi.php";
								$qry_pembayaran=mysqli_query($con,"select * from pembayaran join spp on spp.id_spp = pembayaran.id_spp join petugas ON petugas.id_petugas= pembayaran.id_petugas where pembayaran.nisn = " .$_SESSION['nisn'] );
								$no=0;
								while($r_trx=mysqli_fetch_array($qry_pembayaran)){
								$no++;
                ?>

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
              
<?php }else{ ?> <td><span class="label label-danger">BELUM LUNAS</span></td>
<?php } ?>
            </tr>
<?php }?>
        </table>  
</br>
</br>
</br>
         <!-- <a href="?pembayaran=print" target="_blank" class="btn btn-success btn-block btn-sm"><b>CETAK HISTORY PEMBAYARAN</b></a> -->

   
<body>
</html>