
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
  <title>PEMBAYARAN SPP | Cetak</title>
</head>
<body>
<?php
require_once("../../koneksi.php");
session_start();
    $biodataSiswa = mysqli_query($con, "SELECT * FROM siswa 
                    JOIN kelas ON siswa.id_kelas=kelas.id_kelas 
                    WHERE nisn='".$_GET['nisn']."'");
  
    $historyPembayaran = mysqli_query($con, "SELECT * FROM pembayaran
                         JOIN petugas ON pembayaran.id_petugas=petugas.id_petugas
                         JOIN spp ON pembayaran.id_spp=spp.id_spp
                         WHERE nisn='".$_GET['nisn']."' ORDER BY tgl_bayar");
    $r_siswa = mysqli_fetch_assoc($biodataSiswa);
?>
<div class="container-scroller">
        <!-- partial -->
          <div class="content-wrapper">
            <div class="page-header">
            <h3 class ="card-title text-white">Laporan Pembayaran SPP</h1>
            </div>
            <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
            <div class="card-body">                 
            <hr/>
    <div class="col-md-12">
      <div class="box box-primary">
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
        </br>
        <div class="row">
        <div class="col-xs-12">
            <div class="box-header">
              <h3 align="center">History Pembayaran</h3>
              <div class="box-tools">
                <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                  </div>
                </div>
              </div>
            </div>
            
            <div class="table-responsive pt-3">
              <table class="table table-bordered" cellspacing="2" border="1" cellpadding="5" align="center">
                <thead>
            <tr>
                <td>No. </td>
                <td>Tanggal Pembayaran</td>
                <td>Pembayaran Melalui</td>
                <td>Tahun SPP | Nominal yang harus dibayar</td>
                <td>Bulan</td>
                <td>Jumlah yang sudah dibayar</td>
                <td>Status</td>
                <!-- <td>Aksi</td> -->
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
<?php }else{ ?> <td><span class="label label-danger">BELUM LUNAS</span></td>
<?php } ?>
            </tr>
<?php $no++; }?>
        </table>
</thead>
</br>
</br>    
  <script>
    window.print();
  </script>
</body>  
</html>