<?php
$id_kelas = $_POST['id_kelas'];
$nama_kelas=$_POST['nama_kelas'];
$kompetensi_keahlian=$_POST['kompetensi_keahlian'];
if(empty($nama_kelas)){
        echo "<script>alert('nama kelas tidak boleh kosong');location.href='?kelas=edit';</script>";
    } elseif(empty($kompetensi_keahlian)){
        echo "<script>alert('kompetisi keahlian  tidak boleh kosong');location.href='?kelas=edit';</script>";
    }else{
$mysqli->query( "update kelas set nama_kelas='$nama_kelas',kompetensi_keahlian='$kompetensi_keahlian' where 
id_kelas='$id_kelas'");
echo"<script>alert('Berhasil di edit!')</script>";
echo"<script language='javascript'>window.location.href='?kelas=read'</script>";
    }
?>