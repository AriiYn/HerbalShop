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
                    <li><a href="../../Produk.php">Home</a></li>
                    <li><a href="../../Produk.php">Produk</a></li>
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
                    <img src="../../Img/Kosmetik/DAY CREAM Kosmetik1.png" height="500px" width="500px">
                </div>
            </div>
            <div class="text" style="padding: 20px; margin: 20px; font-family: Verdana;">
                 <h1>BEAUTY DAY CREAM</h1><br><br>
                 <a><p><b>KEGUNAAN</b></p><br>Beauty Day Cream, krim perawatan pada pagi hari, membantu melindungi kulit dari efek buruk sinar matahari serta merawat kulit tetap sehat</a><br><br>
                 <a><p><b>KANDUNGAN</b></p><br>Aqua, ethylhexyl methoxycinnamate, butyl methoxydibenzoylmethane, benzophenone-3, butylene glycol, phospholipids, phenoxyethanol, propanediol, acrylamides copolymer, C13-14 isoparaffin, laureth-7, glyceryl stearate, cetyl alcohol, PEG-75 stearate, ceteth-20, steareth-20, olea europaea oil, ethanol, urea, foeniculum vulgare extract, humulus lupulus extract, melissa officinalis leaf extract, viscum album leaf extract, chamomilla recutita leaf extract, achillea millefolium extract, allantoin, propylene glycol, aloe barbadensis leaf extract, glycerin, glycine soja seed extract, hamamelis virginiana distillate, ethylhexylglycerin, titanium dioxide, sodium hyaluronate, allantoin, disodium edta</a><br><br>
                 <a><p><b>Aturan Pakai</b></p><br>Beauty Day Cream, krim perawatan pada pagi atau siang hari, aplikasikan pada wajah yang bersih. Gunakan secara rutin untuk hasil yang baik</a><br><br>
                 <a><p><b>Harga</b></p><br>Rp 75.000 (60/20)</a><br><br><br>
                 15 gr<br><br>
                 <div class="block" style="padding: 20px;">
                    <a href="https://shp.ee/6s2uqpu" class="btn-pesan">Pesan</a>
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