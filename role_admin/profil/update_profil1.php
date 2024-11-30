<?php 
include '../../koneksi.php';

$id_admin = $_POST['id_admin'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$no_tlp = $_POST['no_tlp'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi, "UPDATE login_admin SET id_admin='$id_admin', nama='$nama', username='$username', password='$password', no_tlp='$no_tlp', email='$email', alamat='$alamat' where id_admin='$id_admin'");
echo "<script>alert('Data berhasil ditambah.');window.location='profil_admin.php';</script>";
?>