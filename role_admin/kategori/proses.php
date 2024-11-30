<?php 
include("../../koneksi.php");

$id_category = $_POST['id_categoty'];
$nama_category = $_POST['nama_category'];

$query = mysqli_query($koneksi,"INSERT INTO `tb_category`( `id_category` , `nama_category`) VALUES (NULL, '$nama_category')");

if ($query) {
	echo "<script>alert('Data berhasil ditambah.');window.location='data_kategori.php';</script>";
}else{
	echo mysqli_error($koneksi);
}
?>