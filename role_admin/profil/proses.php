<?php 
include("../../koneksi.php");

$id_admin = $_POST['id_adminn'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$n_tlp = $_POST['no_tlp'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];

$query = mysqli_query($koneksi,"INSERT INTO `login_admin`( `id_admin` , `nama`, `username` , `password` , `no_tlp` , `email` , `alamat`) VALUES (NULL, '$nama','$username','$password','$no_tlp','$email','$alamat')");

if ($query) {
	echo "<script>alert('Data berhasil ditambah.');window.location='profil_admin.php';</script>";
}else{
	echo mysqli_error($koneksi);
}
?>