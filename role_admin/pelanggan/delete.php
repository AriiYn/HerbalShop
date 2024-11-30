<?php 
include '../../koneksi.php';

$id_pelanggan = $_GET['id'];

mysqli_query($koneksi,"DELETE from login_pelanggan where id_pelanggan='$id_pelanggan'");
header("location:data_pelanggan.php");
?>