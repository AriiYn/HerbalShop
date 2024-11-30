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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/profil.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
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
                    <li><a href="pelanggan.php">Home</a></li>
                    <li><a href="Produk.php">Produk</a></li>
                    <li><a href="pelanggan.php #About">Tentang Kami</a></li>
                    <li><a href="pelanggan.php #contact">Kontak</a></li>
                    <li><a href="#contact">Profil</a></li>
                    <li><a href="Login/Logout.php">Log Out</a></li>
                </ul>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row mb-3">
            <div class="col-auto">
                <img src="img/avatar.jpg"></img>
            </div>
            <div class="col">
                <h2><?php echo $_SESSION['username']; ?> </h2>
            </div>
        </div><br><br>
        <form method="POST" action="update_profil.php" class="needs-validation" novalidate>
            <body id="bg-login">
            <div class="form-login">
        <h2>Tambah Alamat</h2><br>
            <input type="text" name="nama" placeholder="Alamat" class="form-control" id="validationCustom01" required><br>
            <button type="submit">Submit</button>
        </div>
        </form>
    </body>
</html>