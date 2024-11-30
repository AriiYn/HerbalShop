<?php 
include '../../koneksi.php';

$id_category = $_POST['id_category'];
$nama_category = $_POST['nama_category'];

mysqli_query($koneksi, "UPDATE tb_category SET id_category='$id_category', nama_category='$nama_category' where id_category='$id_category'");
echo "<script>alert('Data berhasil ditambah.');window.location='data_kategori.php';</script>";
?>