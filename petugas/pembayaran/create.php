<?php
$id_pembayaran = $_POST['id_pembayaran'];
$id_petugas=$_POST['id_petugas'];
$nisn=$_POST['nisn'];
// $nama=$_POST['nama'];
$tgl_bayar=$_POST['tgl_bayar'];
$id_spp=$_POST['id_spp'];
$bulan=$_POST['bulan'];
// $tahun=$_POST['tahun'];
$jumlah_bayar=$_POST['jumlah_bayar'];



$mysqli->query( "INSERT INTO pembayaran()VALUES('$id_pembayaran','$id_petugas','$nisn','$tgl_bayar',
'$id_spp','$bulan','$jumlah_bayar')");
echo"<script>alert('Berhasil disimpan!')</script>";
echo"<script language='javascript'>window.location.href='?pembayaran=read'</script>";
?>