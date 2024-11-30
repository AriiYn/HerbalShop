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

	<!-- product detail -->
		<div class="section">
			<div class="container">
				<h3>Detail Produk</h3><br>
				<div class="box">
				<?php
					include 'koneksi.php';
					$produk = mysqli_query($koneksi, "SELECT * FROM products WHERE id = '".$_GET['id']."' ");
						if(mysqli_num_rows($produk) > 0){
							while($p = mysqli_fetch_array($produk)){
					?>
					<div class="col-2">
						<img src="img/<?php echo $p['image'] ?>" width="100%">
					</div>
					<div class="col-2">
						<h3><?php echo $p['name'] ?></h3>
						<h4>Rp. <?php echo number_format($p['price']) ?></h4><br>
						<h5>Stok : <?php echo number_format($p['stok']) ?></h5><br>
						<h5><?php echo $p['berat'] ?></h5>
						<p>Deskripsi<br>
							<?php echo $p['description'] ?>
						</p>
						<?php }} ?>
						<?php
							include 'koneksi.php';
								$produk = mysqli_query($koneksi, "SELECT * FROM login_admin ORDER BY id_admin DESC");
								if(mysqli_num_rows($produk) > 0){
									while($a = mysqli_fetch_array($produk)){
							?>
						<p><a href="https://api.whatsapp.com/send?phone=<?php echo $a['no_tlp']; ?>&text=Hai, saya tertarik dengan produk Anda." target="_blank">
							Hubungin via Whatsapp | <a href="view_product.php">View Product</a>
						</p>
					</div>
				<?php }} ?>
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