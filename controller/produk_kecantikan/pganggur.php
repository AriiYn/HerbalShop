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
                    <li><a href="../../Produk.php.php">Produk</a></li>
                    <li><a href="../../Pelanggan.php #About">Tentang kami</a></li>
                    <li><a href="#contact">Kontak</a></li>
                    <li><a href="../../profil.php">Profil</a></li>
                    <li><a href="../../Login/Logout.php">Log Out</a></li>    
                </ul>
            </div>
        </div>
    </header>
        <div class="flex">
            <div class="cardproduk">
                <div class="imgproduk-cardproduk">
                    <img src="../../Img/Kosmetik/PGH ANGGUR Kosmetik9.png" height="500px" width="500px">
                </div>
            </div>
            <div class="text" style="padding: 20px; margin: 20px; font-family: Verdana;">
                 <h1>PGH ANAK RASA ANGGUR</h1><br><br>
                 <a>Pasta gigi yang diformulasikan khusus untuk anak-anak  dengan rasa  anggur yang disukai anak-anak.</a><br><br>
                 <a><p><b>KOMPOSISI</b></p><br>Sorbitol, Calcium Carbonate, Aqua, Hydrated Silica, Flavour Grape,Glycerin, Xanthan Gum, Sodium Lauroyl Sarcosinate, Propylene Glycol, Salvadora Persica, Piper Betle Extract, Sodium Saccharin, Xylitol, Sodium Benzoate.</a><br><br>
                 <a><p><b>Aturan Pakai</b></p><br>Aplikasikan pasta gigi secukup nya pada sikat gigi. Gosok gigi hingga bersih, kemudian kumur–kumur dengan air bersih.</a><br><br>
                 <a><p><b>Harga</b></p><br>Rp 13.000 (10/2)</a><br><br><br>
                 50gr<br><br>
                 <div class="block" style="padding: 20px;">
                    <a href="https://shp.ee/vp4v73p" class="btn-pesan">Pesan</a>
                </div>
            </div>
        </div>
    <section id="contact" class="contact"></section>
    <footer>
        <div class="card">
            <h3>Alamat Informasi</h3>
            <ul>
                <li><i class="fas fa-map-marker"></i>Jl.Raya Abdul wahab 1</li>
                <li><i class="fas fa-envelope"></i>halalmart@gmail.com</li>
                <li><i class="fas fa-phone"></i>+6287728353986</li>
            </ul>
        </div>
        </div>
        <div class="card1">
            <h3>Hubungi Saya</h3>
            <div class="inputBx">
                <input id="Pesan" type="text" placeholder="pesan">
                <td><input class="input" type="submit" value="Send Message" onclick="sendMessage()"
                    /></td>
            </div>
        </div>
    </footer>
    </body>
</html>