<?php
$nisn = $_POST['nisn'];
$nis=$_POST['nis'];
$nama=$_POST['nama'];
$id_kelas=$_POST['id_kelas'];
$alamat=$_POST['alamat'];
$no_telp=$_POST['no_telp'];
$id_spp=$_POST['id_spp'];


$mysqli->query( "update siswa set nis='$nis',nama='$nama',id_kelas='$id_kelas',
alamat='$alamat',no_telp='$no_telp',id_spp='$id_spp' where 
nisn='$nisn'");
echo"<script>alert('Berhasil di edit!')</script>";
echo"<script language='javascript'>window.location.href='?siswa=read'</script>";
?>