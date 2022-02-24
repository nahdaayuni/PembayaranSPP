<?php
if($_POST){
$id_petugas = $_POST['id_petugas'];
$username=$_POST['username'];
$password=$_POST['password'];
$nama_petugas=$_POST['nama_petugas'];
$level=$_POST['level'];

if(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='?petugas=read';</script>";
    } elseif(empty($nama_petugas)){
        echo "<script>alert('nama petugas tidak boleh kosong');location.href='?petugas=read';</script>";
    }
 else {
     include "../koneksi.php";
    if(empty($password)){
        $update=mysqli_query($con,"update petugas set
        username='".$username."',nama_petugas='".$nama_petugas."', level='".$level."' where id_petugas =
        '".$id_petugas."'") or die(mysqli_error($con));

        if($update){
            echo "<script>alert('Sukses update petugas');location.href='?petugas=read';</script>";
        } else {
            echo "<script>alert('Gagal update petugas');location.href='?petugas=edit?id_petugas".$id_petugas."';</script>";
        }
    } 

    else {
        $update=mysqli_query($con,"update petugas set
        username='".$username."',password='".$password."',
        nama_petugas='".$nama_petugas."', level='".$level."' where id_petugas =
        '".$id_petugas."'") or die(mysqli_error($con));
            if($update){
                echo "<script>alert('Sukses update petugas');location.href='?petugas=read';</script>";
        }   else {
                echo "<script>alert('Gagal update petugas');location.href='?petugas=edit?id_petugas=".$id_petugas."';</script>";
         }
        }
    }
}
?>