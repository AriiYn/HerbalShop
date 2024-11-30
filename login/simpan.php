<?php 
include("../koneksi.php");

$id_pelanggan = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi,"INSERT INTO `login_pelanggan`( `id_pelanggan` , `nama`, `username` , `password`) VALUES (NULL, '$nama','$username','$password')");

if ($query) {
	echo "<script>alert('Data berhasil ditambah.');window.location='Index.php';</script>";
}else{
	echo mysqli_error($koneksi);
}
?>