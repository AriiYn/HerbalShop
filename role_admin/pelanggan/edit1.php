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
                    <li><a href="../profil/profil_admin.php">Profil</a></li>
                    <li><a href="data_pelanggan.php">Data Pelanggan</a></li>
                    <li><a href="../kategori/data_kategori.php">Data Kategori</a></li>
                    <li><a href="../produk/data_produk.php">Data Produk</a></li>
                    <li><a href="../../Login/Logout.php">Log Out</a></li>
                </ul>
            </div>
        </div>
    </header>
    <br><br>
    <div class="container">
        <div class="row mb-3">
            <div class="col-auto">
                <img src="../../img/avatar.jpg"></img>
            </div>
            <div class="col">
                <h2>Pelanggan</h2>
            </div>
        </div><br><br>
        <form method="POST" action="update_profil.php" class="needs-validation" novalidate>
            <?php
                include("../../koneksi.php"); 
                $id_pelanggan = $_GET['id'];
                $sql = mysqli_query($koneksi,"SELECT * FROM login_pelanggan WHERE id_pelanggan='$id_pelanggan'");
                $a = mysqli_fetch_array($sql);
            ?>
            <body id="bg-login">
            <div class="form-login">
        <h2>Ubah Data Pelanggan</h2><br>
        <a href="data_pelanggan.php" class="btn btn-primary" style="background-color: #068622;">Kembali</a><br><br>
        <label>Id Pelanggan</label>
            <input type="text" name="id_pelanggan" placeholder="Nama Lengkap" class="form-control" id="validationCustom01" value="<?php echo $a['id_pelanggan']; ?>" required><br>
        <label>Nama</label>
            <input type="text" name="nama" placeholder="Nama Lengkap" class="form-control" id="validationCustom01" value="<?php echo $a['nama']; ?>" required><br>
        <label>Username</label>
            <input type="text" name="username" placeholder="Username" class="form-control" id="validationCustom01" value="<?php echo $a['username']; ?>" required><br>
        <label>Password</label>
            <input type="text" name="password" placeholder="Password" class="form-control" id="validationCustom01" value="<?php echo $a['password']; ?>" required><br>
        <label>No Telepon</label>
            <input type="text" name="no_tlp" placeholder="No Telepon" class="form-control" id="validationCustom01" value="<?php echo $a['no_tlp']; ?>" required><br>
        <label>Email</label>
            <input type="email" name="email" placeholder="Email" class="form-control" id="validationCustom01" value="<?php echo $a['email']; ?>" required><br>
        <label>Alamat</label>
            <input type="text" name="alamat" placeholder="Alamat" class="form-control" id="validationCustom01" value="<?php echo $a['alamat']; ?>" required><br>
            <button type="submit">Submit</button>
        </div>
        </form>
    </body>
</html>