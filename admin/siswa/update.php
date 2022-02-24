<?php
$nisn = $_POST['nisn'];
$nis=$_POST['nis'];
$nama=$_POST['nama'];
$id_kelas=$_POST['id_kelas'];
$alamat=$_POST['alamat'];
$no_telp=$_POST['no_telp'];
$id_spp=$_POST['id_spp'];

if(empty($nisn)){
        echo "<script>alert('nisn tidak boleh kosong');location.href='?siswa=edit';</script>";
    } elseif(empty($nis)){
        echo "<script>alert('tanggal bayar tidak boleh kosong');location.href='?siswa=edit';</script>";
    } elseif(empty($nama)){
        echo "<script>alert('spp tidak boleh kosong');location.href='?siswa=edit';</script>";
    }elseif(empty($id_kelas)){
        echo "<script>alert('kelas tidak boleh kosong');location.href='?siswa=edit';</script>";
    }elseif(empty($alamat)){
        echo "<script>alert('alamat tidak boleh kosong');location.href='?siswa=edit';</script>";
    }elseif(empty($no_telp)){
        echo "<script>alert('nomor telpon tidak boleh kosong');location.href='?siswa=edit';</script>";
    }elseif(empty($id_spp)){
        echo "<script>alert('spp tidak boleh kosong');location.href='?siswa=edit;</script>";
    }else{
$mysqli->query( "update siswa set nis='$nis',nama='$nama',id_kelas='$id_kelas',
alamat='$alamat',no_telp='$no_telp',id_spp='$id_spp' where 
nisn='$nisn'");
echo"<script>alert('Berhasil di edit!')</script>";
echo"<script language='javascript'>window.location.href='?siswa=read'</script>";
    }
?>