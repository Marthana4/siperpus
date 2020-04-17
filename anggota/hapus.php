<?php
include '../koneksi.php';
$id_anggota =$_GET['id_anggota'];
$query = "DELETE FROM anggota WHERE id_anggota = '$id_anggota'";
$anggota = mysqli_query($kon,$query);

if(! $anggota){
    die("Gagal menghapus date: " .mysqli_errno($kon). "-".mysqli_error($kon));
}
else{
    echo "<script>alert('Data berhasil dihapus.'); window.location='index.php'; </script>";
}
?>