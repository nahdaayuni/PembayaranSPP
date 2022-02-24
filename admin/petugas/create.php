<?php
$id_petugas = $_POST['id_petugas'];
$username=$_POST['username'];
$password=$_POST['password'];
$nama_petugas=$_POST['nama_petugas'];
$level=$_POST['level'];

if(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='?petugas=add';</script>";
    } elseif(empty($password)){
        echo "<script>alert('password  tidak boleh kosong');location.href='?petugas=add';</script>";
    } elseif(empty($nama_petugas)){
        echo "<script>alert('nama petugas tidak boleh kosong');location.href='?petugas=add';</script>";
    }elseif(empty($level)){
        echo "<script>alert('bulan  tidak boleh kosong');location.href='?level=add';</script>";
    }else{
$mysqli->query( "INSERT INTO petugas()VALUES('$id_petugas','$username','$password','$nama_petugas','$level')");
echo"<script>alert('Berhasil disimpan!')</script>";
echo"<script language='javascript'>window.location.href='?petugas=read'</script>";
    }
?>