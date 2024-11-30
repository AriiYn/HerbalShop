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
        <form method="POST" action="update.php" class="needs-validation" novalidate>
            <?php
                include("../../koneksi.php"); 
                $id_category = $_GET['id'];
                $sql = mysqli_query($koneksi,"SELECT * FROM tb_category WHERE id_category='$id_category'");
                $a = mysqli_fetch_array($sql);
            ?>
            <body id="bg-login">
            <div class="form-login">
        <h2>Ubah Data Kategori</h2><br>
        <a href="data_kategori.php" class="btn btn-primary" style="background-color: #068622;">Kembali</a><br><br>
        <label>Id Pelanggan</label>
            <input type="text" name="id_category" placeholder="Id Kategori" class="form-control" id="validationCustom01" value="<?php echo $a['id_category']; ?>" required><br>
        <label>Nama Kategori</label>
            <input type="text" name="nama_category" placeholder="Nama Kategori" class="form-control" id="validationCustom01" value="<?php echo $a['nama_category']; ?>" required><br>
            <button type="submit">Submit</button>
        </div>
        </form>
    </body>
</html>