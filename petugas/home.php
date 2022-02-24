<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: ../index.php");
exit(); }
?>
<div class="ol-md-12">
            <div class="callout callout-info" style="margin-bottom: 0!important;">
              <h4><i class="fa fa-teal"></i><b>Selamat Datang <?=$_SESSION['username']?></b></h4>
            Di aplikasi pembayaran SPP. Kelola dengan baik ya!!
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

              <h3 class="profile-username text-center"><?=$_SESSION['nama_petugas']?></h3>

              <p class="text-muted text-center">Petugas Pembayaran SPP</p>

              <ul class="list-group list-group-unbordered" style="margin: 60px; font-size: 17px;">
                <li class="list-group-item" >
                  <b>Nama : </b> <?=$_SESSION['nama_petugas']?></a>
                </li>
                <li class="list-group-item" >
                  <b>Username : </b> <?=$_SESSION['username']?>
                </li>
               <li class="list-group-item" >
                  <b>Level : </b> <?=$_SESSION['level']?>
                </li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>