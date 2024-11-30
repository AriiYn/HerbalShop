<?php 
include '../../koneksi.php';

$id_pelanggan = $_POST['id_pelanggan'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$no_tlp = $_POST['no_tlp'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi, "UPDATE login_pelanggan SET id_pelanggan='$id_pelanggan', nama='$nama', username='$username', password='$password', no_tlp='$no_tlp', email='$email', alamat='$alamat' where id_pelanggan='$id_pelanggan'");
echo "<script>alert('Data berhasil ditambah.');window.location='data_pelanggan.php';</script>";
?>