<?php
$id_pembayaran = $_POST['id_pembayaran'];
$id_petugas=$_POST['id_petugas'];
$nisn=$_POST['nisn'];
// $nama=$_POST['nama'];
$tgl_bayar=$_POST['tgl_bayar'];
$id_spp=$_POST['id_spp'];
$bulan=$_POST['bulan'];
$jumlah_bayar=$_POST['jumlah_bayar'];

if(empty($id_petugas)){
        echo "<script>alert('petugas tidak boleh kosong');location.href='?pembayaran=add';</script>";
    } elseif(empty($tgl_bayar)){
        echo "<script>alert('tanggal bayar tidak boleh kosong');location.href='?pembayaran=add';</script>";
    } elseif(empty($id_spp)){
        echo "<script>alert('spp tidak boleh kosong');location.href='?pembayaran=add';</script>";
    }elseif(empty($bulan)){
        echo "<script>alert('bulan  tidak boleh kosong');location.href='?pembayaran=add';</script>";
    }else{
$mysqli->query( "INSERT INTO pembayaran()VALUES('$id_pembayaran','$id_petugas','$nisn','$tgl_bayar',
'$id_spp','$bulan','$jumlah_bayar')");
echo"<script>alert('Berhasil disimpan!')</script>";
echo"<script language='javascript'>window.location.href='?pembayaran=read'</script>";
    }
?>