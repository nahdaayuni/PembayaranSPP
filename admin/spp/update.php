<?php
$id_spp = $_POST['id_spp'];
$tahun=$_POST['tahun'];
$nominal=$_POST['nominal'];
if(empty($tahun)){
        echo "<script>alert('tahun tidak boleh kosong');location.href='?spp=edit';</script>";
    } elseif(empty($nominal)){
        echo "<script>alert('nominal bayar tidak boleh kosong');location.href='?spp=edit';</script>";
    }else{
$mysqli->query( "update spp set tahun='$tahun',nominal='$nominal' where 
id_spp='$id_spp'");
echo"<script>alert('Berhasil di edit!')</script>";
echo"<script language='javascript'>window.location.href='?spp=read'</script>";
    }
?>