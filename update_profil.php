<?php 
include 'koneksi.php';

$id_pelanggan = $_POST['id_pelanggan'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi,"UPDATE login_pelanggan set id_petugas='$id_petugas', alamat='$alamat' where id_pelanggan='$id_pelanggan'");
echo "<script>alert('Data berhasil ditambah.');window.location='profil.php';</script>";
?>