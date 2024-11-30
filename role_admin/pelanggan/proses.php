<?php 
include("../../koneksi.php");

$id_pelanggan = $_POST['id_pelanggan'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$no_tlp = $_POST['no_tlp'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];

$query = mysqli_query($koneksi,"INSERT INTO `login_pelanggan`( `id_pelanggan` , `nama`, `username` , `password` , `no_tlp` , `email` , `alamat`) VALUES (NULL, '$nama','$username','$password','$no_tlp','$email','$alamat')");

if ($query) {
	echo "<script>alert('Data berhasil ditambah.');window.location='data_pelanggan.php';</script>";
}else{
	echo mysqli_error($koneksi);
}
?>