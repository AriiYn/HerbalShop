<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:login/Index.php?pesan=belum_login");
	}
	?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/profil.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>HALALMART</title>
</head>
<body>
    <header>
        <div class="navbar">
            <div class="logo">
                <h3><i>HALAL<span>MART</span></i></h3>
            </div>
            <div class="navigation">
                <ul>
                    <li><a href="../../Index.php">Home</a></li>
                    <li><a href="../profil/profil_admin.php">Profil</a></li>
                    <li><a href="../pelanggan/data_pelanggan.php">Data Pelanggan</a></li>
                    <li><a href="../kategori/data_kategori.php">Data Kategori</a></li>
                    <li><a href="data_produk.php">Data Produk</a></li>
                    <li><a href="../../Login/Logout.php">Log Out</a></li>
                </ul>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row mb-3">
    </div><br>
        <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                <h4>Data Produk</h4>
                <div class="card-header-form">
                </div>
            </div>   
        </div>
      <br>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Kategori</th>
      <th scope="col">Nama Produk</th>
      <th scope="col">Harga Produk</th>
      <th scope="col">Deskripsi Produk</th>
      <th scope="col">Gambar Produk</th>
      <th scope="col">Status</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  include("../../koneksi.php");
  $sql = mysqli_query($koneksi,"SELECT * FROM tb_product LEFT JOIN tb_category USING (id_category) ORDER BY id_product DESC");
  if(mysqli_fetch_array($sql) > 0){
  while($d = mysqli_fetch_array($sql)){
   ?>
    <tr>
      <td><?php echo $d['id_product']; ?></td>
      <td><?php echo $d['id_category']; ?></td>
      <td><?php echo $d['product_name']; ?></td>
      <td><?php echo $d['product_price']; ?></td>
      <td><?php echo $d['product_description']; ?></td>
      <td><img src="produk/<?php echo $d['product_image'] ?>" width="50px"></td>
      <td><?php echo $d['product_status']; ?></td>
      <td>
        <a href="edit1.php?id=<?php echo $d['id_product']; ?>" class="btn btn-primary" style="background-color: #068622;">Ubah</a> | <a href="delete.php?id=<?php echo $d['id_product']; ?>" class="btn btn-danger">delete</a>
      </td>
      </tr>
  <?php }}else{ ?>
    <tr>
      <td colspan="8">Tidak ada data</td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<br>
<a href="tambah.php" class="btn btn-primary" style="background-color: #068622;">Tambah Data</a>
</body>
</html>