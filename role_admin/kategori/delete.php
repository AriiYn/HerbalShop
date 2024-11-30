<?php 
include '../../koneksi.php';

$id_category = $_GET['id'];

mysqli_query($koneksi,"DELETE from tb_category where id_category='$id_category'");
header("location:data_kategori.php");
?>