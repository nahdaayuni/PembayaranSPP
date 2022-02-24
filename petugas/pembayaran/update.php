<?php
    $id_pembayaran = $_POST['id_pembayaran'];
    $id_petugas=$_POST['id_petugas'];
    $nisn=$_POST['nisn'];
    $tgl_bayar=$_POST['tgl_bayar'];
    $id_spp=$_POST['id_spp'];
    $bulan=$_POST['bulan'];
    $jumlah_bayar=$_POST['jumlah_bayar'];

    $mysqli->query ("UPDATE `pembayaran` SET `id_petugas`='".$id_petugas."',`tgl_bayar`='".$tgl_bayar."',
    `bulan`='".$bulan."',`jumlah_bayar`='".$jumlah_bayar."' WHERE `id_pembayaran` ='".$id_pembayaran."'");
    echo"<script>alert('Berhasil di edit!')</script>";
    echo"<script language='javascript'>window.location.href='?pembayaran=read'</script>";

?>

         
    
  
