<?php
if($_POST){
$id_kelas = $_POST['id_kelas'];
$nama_kelas=$_POST['nama_kelas'];
$kompetensi_keahlian=$_POST['kompetensi_keahlian'];
if(empty($nama_kelas)){
        echo "<script>alert('nama kelas tidak boleh kosong');location.href='?kelas=add';</script>";
    } elseif(empty($kompetensi_keahlian)){
        echo "<script>alert('kompetisi keahlian  tidak boleh kosong');location.href='?kelas=add';</script>";
    }else{
$mysqli->query( "INSERT INTO kelas()VALUES('$id_kelas','$nama_kelas','$kompetensi_keahlian')");
echo"<script>alert('Berhasil disimpan!')</script>";
echo"<script language='javascript'>window.location.href='?kelas=read'</script>";
}
}
?>
