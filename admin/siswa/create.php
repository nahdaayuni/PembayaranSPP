<?php
$nisn = $_POST['nisn'];
$nis=$_POST['nis'];
$nama=$_POST['nama'];
$id_kelas=$_POST['id_kelas'];
$alamat=$_POST['alamat'];
$no_telp=$_POST['no_telp'];
$id_spp=$_POST['id_spp'];

if(empty($nisn)){
        echo "<script>alert('nisn tidak boleh kosong');location.href='?siswa=add';</script>";
    } elseif(empty($nis)){
        echo "<script>alert('tanggal bayar tidak boleh kosong');location.href='?siswa=add';</script>";
    } elseif(empty($nama)){
        echo "<script>alert('spp tidak boleh kosong');location.href='?siswa=add';</script>";
    }elseif(empty($id_kelas)){
        echo "<script>alert('kelas tidak boleh kosong');location.href='?siswa=add';</script>";
    }elseif(empty($alamat)){
        echo "<script>alert('alamat tidak boleh kosong');location.href='?siswa=add';</script>";
    }elseif(empty($no_telp)){
        echo "<script>alert('nomor telpon tidak boleh kosong');location.href='?siswa=add';</script>";
    }elseif(empty($id_spp)){
        echo "<script>alert('spp tidak boleh kosong');location.href='?siswa=add';</script>";
    }else{
$mysqli->query( "INSERT INTO siswa()VALUES('$nisn','$nis','$nama','$id_kelas','$alamat','$no_telp','$id_spp')");
echo"<script>alert('Berhasil disimpan!')</script>";
echo"<script language='javascript'>window.location.href='?siswa=read'</script>";
    }
?>