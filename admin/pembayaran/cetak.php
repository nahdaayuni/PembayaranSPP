<?php
require_once("../koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
<body >
     <?php require_once("index.php"); ?>
     <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-primary">
            <!-- <div class="box-header with-border"> -->
              <h3 class="box-title" align="center"><b>Cetak History Pembayaran Siswa</b></h3>
</br>
                <form action="?pembayaran=print" method="POST" autocomplete="off" align="center">
                  <h4 class="glyphicon glyphicon-print"> Generate to PDF <h4>
                    <h4> - - - -   Inputkan NISN Siswa Untuk Mencetak Data Pembayaran  - - - - <h4></br>
                    <input type="text" name="nisn" placeholder="NISN" autofocus>
                    <button type="submit" class="btn btn-primary " name="cari">Cari</button>
                </form>
                <!-- <a class="btn btn-default" href="?pembayaran=read" >Cancel</a> -->
</br>
</br>
</br>
         <!-- <a href="?pembayaran=cetak" target="_blank" class="btn btn-success btn-block btn-sm"><b>CETAK HISTORY PEMBAYARAN</b></a> -->
   
<body>
</html>