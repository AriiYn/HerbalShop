<?php 
include '../../koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi,"DELETE from products where id='$id'");
header("location:data_produk.php");
?>