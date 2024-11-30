<?php 
	error_reporting(0);
	include 'koneksi.php';
	$kontak = mysqli_query($koneksi, "SELECT no_tlp, email, alamat FROM login_admin WHERE id_admin = 1");
	$a = mysqli_fetch_object($kontak);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.display.css">
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
                    <li><a href="pelanggan.php #About">Tentang kami</a></li>
                    <li><a href="#contact">Kontak</a></li>
                    <li><a href="profil.php">Profil</a></li>
                    <?php
					include 'koneksi.php';
					$select_rows = mysqli_query($koneksi, "SELECT * FROM `cart`") or die('query failed');
					$row_count = mysqli_num_rows($select_rows);
						?>
							<li><a href="cart.php" class="cart">cart <span><?php echo $row_count; ?></span> </a></li>
                    <li><a href="Login/Logout.php">Log Out</a></li>    
                </ul>
            </div>
        </div>
    </header>

	<!-- search -->
	<div class="search">
		<div class="container">
			<form action="produk1.php">
				<input type="text" name="search" placeholder="Cari Produk" value="<?php echo $_GET['search'] ?>">
				<input type="hidden" name="kat" value="<?php echo $_GET['kat'] ?>">
				<input type="submit" name="cari" value="Cari Produk">
			</form>
		</div>
	</div>

	<!-- new product -->
	<div class="section">
		<div class="container">
			<h3>Produk</h3>
			<div class="box">
				<?php 
					if($_GET['search'] != '' || $_GET['kat'] != ''){
						$where = "AND name LIKE '%".$_GET['search']."%'";
					}

					$produk = mysqli_query($koneksi, "SELECT * FROM products WHERE product_status = 1 $where ORDER BY id DESC");
					if(mysqli_num_rows($produk) > 0){
						while($p = mysqli_fetch_array($produk)){
				?>	
					<a href="detail-produk.php?id=<?php echo $p['id'] ?>">
						<div class="col-4">
							<img src="img/<?php echo $p['image'] ?>">
							<p class="nama"><?php echo substr($p['name'], 0, 30) ?></p>
							<p class="harga">Rp <?php echo number_format($p['price']) ?></p>
						</div>
					</a>
				<?php }}else{ ?>
					<p>Produk tidak ada</p>
				<?php } ?>
			</div>
		</div>
	</div>

	<!-- footer -->
	<div class="footer">
		<div class="container">
			<h4>Alamat</h4>
			<p>Jl.Raya Abdul wahab 1</p>

			<h4>Email</h4>
			<p>halalmart@gmail.com</p>

			<h4>No. Hp</h4>
			<p>+62 812-8047-0144</p>
		</div>
	</div>
        <!-- footer -->
	<div class="footer1">
		<div class="container">
			<small>Copyright &copy; 2023 - Fakhri.</small>
		</div>
	</div>
</body>
</html>