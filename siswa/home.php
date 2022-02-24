<?php
session_start();
if(!isset($_SESSION["nisn"])){
header("Location: index_siswa.php");
exit(); }
?>
<div class="ol-md-12">
            <div class="callout callout-info" style="margin-bottom: 0!important;">
              <h4><i class="fa fa-teal"></i><b>Selamat Datang <?=$_SESSION['nama']?></b></h4>
            Di aplikasi pembayaran SPP. Kamu bisa lihat data pembayaran kamu disini !!!
           </div>
    </div>
</br>
    <div class="row">
        <div class="col-md-12">
          <!-- Profile Image -->
          <div class="box box-primary">
            <h2 align="center"><b>Biodata Kamu</h2></b></br>
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="https://img.freepik.com/free-vector/man-avatar-profile-round-icon_24640-14044.jpg?size=338&ext=jpg" alt="User profile picture">

              <h3 class="profile-username text-center"><?=$_SESSION['nama']?></h3>
              <p class="text-muted text-center">Siswa</p>
              <ul class="list-group list-group-unbordered" style="margin-left: 150px; margin-bottom: 70px; margin-right: 150px; margin-top: 40px; font-size: 16px;" >
                <li class="list-group-item" >
                  <b>Nama : </b> <?=$_SESSION['nama']?></a>
                </li>
                <li class="list-group-item" >
                  <b>NISN : </b> <?=$_SESSION['nisn']?>
                </li>
               <li class="list-group-item" >
                  <b>NIS : </b> <?=$_SESSION['nis']?>
                </li>
                <li class="list-group-item" >
                  <b>Alamat : </b> <?=$_SESSION['alamat']?>
                </li>
                <li class="list-group-item" >
                  <b>No. Telpon : </b> <?=$_SESSION['no_telp']?>
                </li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>