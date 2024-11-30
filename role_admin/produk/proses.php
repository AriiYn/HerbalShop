<?php 
include("../../koneksi.php");

$id_product = $_POST['id_product'];
$id_category = $_POST['id_category'];
$product_name = $_POST['product_name'];
$product_description = $_POST['product_description'];
$product_image = $_POST['product_image'];
$produk_price = $_POST['product_price'];
$product_status = $_POST['product_status'];

$query = mysqli_query($koneksi,"INSERT INTO `tb_product`( `id_product` , `id_category`, `product_name` , `product_description` , `product_image` , `product_price` , `product_status`) VALUES (NULL, '$product_name','$product_description','$product_image','$product_price','$product_status')");

if ($query) {
	echo "<script>alert('Data berhasil ditambah.');window.location='data_produk.php';</script>";
}else{
	echo mysqli_error($koneksi);
}
?>