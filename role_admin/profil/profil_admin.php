<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../../login/Index.php?pesan=belum_login");
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
                    <li><a href="profil_admin.php">Profil</a></li>
                    <li><a href="../pelanggan/data_pelanggan.php">Data Pelanggan</a></li>
                    <li><a href="../kategori/data_kategori.php">Data Kategori</a></li>
                    <li><a href="../produk/data_produk.php">Data Produk</a></li>
                    <li><a href="../../Login/Logout.php">Log Out</a></li>
                </ul>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row mb-3">
            <div class="col-auto">
                <img src="../../img/avatar.jpg"></img>
            </div>
            <div class="col">
                <h2><?php echo $_SESSION['username']; ?> </h2>
            </div>
        </div><br>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                <h4>Data Admin</h4>
                <div class="card-header-form">
                </div>
            </div>   
        </div>
      <br>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nama Lengkap</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">No Telepon</th>
      <th scope="col">Email</th>
      <th scope="col">Alamat</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  include("../../koneksi.php");
  $sql = mysqli_query($koneksi,"SELECT * FROM login_admin");
  while($d = mysqli_fetch_array($sql)){
   ?>
    <tr>
      <td><?php echo $d['id_admin']; ?></td>
      <td><?php echo $d['nama']; ?></td>
      <td><?php echo $d['username']; ?></td>
      <td><?php echo $d['password']; ?></td>
      <td><?php echo $d['no_tlp']; ?></td>
      <td><?php echo $d['email']; ?></td>
      <td><?php echo $d['alamat']; ?></td>
      <td>
        <a href="edit.php?id=<?php echo $d['id_admin']; ?>" class="btn btn-primary" style="background-color: #068622;">Edit</a> | <a href="delete.php?id=<?php echo $d['id_admin']; ?>" class="btn btn-danger">delete</a>
      </td>
    </tr>
  </tbody>
</table>
<br>
<a href="tambah.php?id=<?php echo $d['id_admin']; ?>" class="btn btn-primary" style="background-color: #068622;">Tamabah Data</a>
<?php } ?>
</body>
</html>