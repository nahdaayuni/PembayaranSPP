<?php
$id_spp = $_POST['id_spp'];
$tahun=$_POST['tahun'];
$nominal=$_POST['nominal'];
if(empty($tahun)){
        echo "<script>alert('tahun tidak boleh kosong');location.href='?spp=add';</script>";
    } elseif(empty($nominal)){
        echo "<script>alert('nominal bayar tidak boleh kosong');location.href='?spp=add';</script>";
    }else{
$mysqli->query( "INSERT INTO spp()VALUES('$id_spp','$tahun','$nominal')");
echo"<script>alert('Berhasil disimpan!')</script>";
echo"<script language='javascript'>window.location.href='?spp=read'</script>";
    }
?>