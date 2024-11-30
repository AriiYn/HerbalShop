<?php 
include '../../koneksi.php';

$id_admin = $_GET['id'];

mysqli_query($koneksi,"DELETE from login_admin where id_admin='$id_admin'");
header("location:data_pelanggan.php");
?>