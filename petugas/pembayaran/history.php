<?php
require_once("../koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>History Pembayaran</title>
</head>
<body>
    <!-- Panggil header -->
    <?php require_once("index.php"); ?>
    <!-- Konten -->
    <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-primary">
            <!-- <div class="box-header with-border"> -->
              <h3 class="box-title" align="center"><b>History Pembayaran Siswa</b></h3>
</br>
</br>
                <form action="?pembayaran=tampil_history" method="POST" autocomplete="off" align="center">
                    <h4>Cari Siswa Berdasarkan NISN<h4>
                    <input type="text" name="nisn" placeholder="Cari" autofocus>
                    <button type="submit" class="btn btn-primary" name="cari">Cari</button>
                </form>
                <!-- <a class="btn btn-default" href="?pembayaran=read" >Cancel</a> -->

</br> 
</br>
</div>
</div>    
</body>
</html>
