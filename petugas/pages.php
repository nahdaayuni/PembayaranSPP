<?php 
error_reporting( error_reporting() & ~E_NOTICE );
include "koneksi.php";
if(isset($_GET['siswa'])){
    include("siswa/".$_GET['siswa'].".php");
}elseif(isset($_GET['kelas'])){
    include("kelas/".$_GET['kelas'].".php");
}elseif(isset($_GET['petugas'])){
    include("petugas/".$_GET['petugas'].".php");
}elseif(isset($_GET['spp'])){
    include("spp/".$_GET['spp'].".php");
}elseif(isset($_GET['pembayaran'])){
    include("pembayaran/".$_GET['pembayaran'].".php");
}
else{
include "home.php";
}
?>
