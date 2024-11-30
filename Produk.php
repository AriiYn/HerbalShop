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
                    <li><a href="Login/Logout.php">Log Out</a></li>    
                </ul>
            </div>
        </div>
    </header><br><br><br>
    <a style="margin:50px; font-family: Verdana; font-size: 20px;">Selamat datang <?php echo $_SESSION['username']; ?></a>

    <div class="sale">
        <div class="card1"></div>
        <div class="card2"></div>
    </div>

    <div class="specialFood">
        <div class="title">
            <h3>Produk Herbal</h3>
        </div>

        <div class="flex">
            <div class="cardproduk">
                <div class="imgproduk-cardproduk">
                    <img src="Img/Herbal/MAGAFIT Herb1.png" height="200px" width="200px">
                </div>
                <div class="content-text">
                    <h3>MAGAFIT</h3>
                    <h3 class="hargaproduk">Rp 90.000</h3>
                </div>
                <div class="btn-block">
                    <a href="controller/produk_herbal/magafit.php" class="btn-pesan">Pesan</a>
                </div>
            </div>
            <div class="cardproduk">
                <div class="imgproduk-cardproduk">
                    <img src="Img/Herbal/BILBERRY Herb7.png" height="200px" width="200px">
                </div>
                <div class="content-text">
                    <h3>BILBERRY</h3>
                    <h3 class="hargaproduk">Rp 150.000</h3>
                </div>
                <div class="btn-block">
                    <a href="controller/produk_herbal/bilberry.php" class="btn-pesan">Pesan</a>
                </div>
            </div>
            <div class="cardproduk">
                <div class="imgproduk-cardproduk">
                    <img src="Img/Herbal/PEGAGAN Herb4.png" height="200px" width="200px">
                </div>
                <div class="content-text">
                    <h3>PEGAGAN</h3>
                    <h3 class="hargaproduk">Rp 90.000</h3>
                </div>
                <div class="btn-block">
                    <a href="controller/produk_herbal/pegagan.php" class="btn-pesan">Pesan</a>
                </div>
            </div>
            <div class="cardproduk">
                <div class="imgproduk-cardproduk">
                    <img src="Img/Herbal/MINYAAK HERBA SINERGI Herb11.png" height="200px" width="200px">
                </div>
                <div class="content-text">
                    <h3>HERBA SINERGI</h3>
                    <h3 class="hargaproduk">Rp 45.000</h3>
                </div>
                <div class="btn-block">
                    <a href="controller/produk_herbal/butbut.php" class="btn-pesan">Pesan</a>
                </div>
            </div>
            <div class="cardproduk">
                <div class="imgproduk-cardproduk">
                    <img src="Img/Herbal/BIOSIR Herb8.png" height="200px" width="200px">
                </div>
                <div class="content-text">
                    <h3>BIOSIR</h3>
                    <h3 class="hargaproduk">Rp 90.000</h3>
                </div>
                <div class="btn-block">
                    <a href="controller/produk_herbal/biosir.php" class="btn-pesan">Pesan</a>
                </div>
            </div>
            <div class="cardproduk">
                <div class="imgproduk-cardproduk">
                    <img src="Img/Herbal/MINYAK KAYU PUTIH Herb12.png" height="200px" width="200px">
                </div>
                <div class="content-text">
                    <h3>KAYU PUTIH</h3>
                    <h3 class="hargaproduk">Rp 50.000</h3>
                </div>
                <div class="btn-block">
                    <a href="controller/produk_herbal/kayuputih.php" class="btn-pesan">Pesan</a>
                </div>
            </div>
        </div>
    </div>

    <div class="specialFood">
        <div class="title">
            <h3>Produk Makanan & Kesehatan</h3>
        </div>

        <div class="flex">
            <div class="cardproduk">
                <div class="imgproduk-cardproduk">
                    <img src="Img/Health/EGM Health4.png" height="200px" width="200px">
                </div>

                <div class="content-text">
                    <h3>ETTA GOAT MILK</h3>
                    <h3 class="hargaproduk">Rp 75.000</h3>
                </div>

                <div class="btn-block">
                    <a href="controller/produk_makanan/etagoatmilk.php" class="btn-pesan">Pesan</a>
                </div>
            </div>
            <div class="cardproduk">
                <div class="imgproduk-cardproduk">
                    <img src="Img/Health/egm cokelat pouch Health12.png" height="200px" width="200px">
                </div>

                <div class="content-text">
                    <h3>GOAT MILK COKLAT</h3>
                    <h3 class="hargaproduk">Rp 85.000</h3>
                </div>

                <div class="btn-block">
                    <a href="controller/produk_makanan/egmcoklat.php" class="btn-pesan">Pesan</a>
                </div>
            </div>
            <div class="cardproduk">
                <div class="imgproduk-cardproduk">
                    <img src="Img/Health/KOPI 7 ELEMEN Health11.png" height="200px" width="200px">
                </div>

                <div class="content-text">
                    <h3>KOPI 7 ELEMEN</h3>
                    <h3 class="hargaproduk">Rp 120.000</h3>
                </div>

                <div class="btn-block">
                    <a href="controller/produk_makanan/kopi7.php" class="btn-pesan">Pesan</a>
                </div>
            </div>
            <div class="cardproduk">
                <div class="imgproduk-cardproduk">
                    <img src="Img/Health/SARKUM Health9.png" height="200px" width="200px">
                </div>

                <div class="content-text">
                    <h3>SARI KURMA</h3>
                    <h3 class="hargaproduk">Rp 50.000</h3>
                </div>

                <div class="btn-block">
                    <a href="controller/produk_makanan/sarikurma.php" class="btn-pesan">Pesan</a>
                </div>
            </div>
            <div class="cardproduk">
                <div class="imgproduk-cardproduk">
                    <img src="Img/Health/MADU SJ Health7.png" height="200px" width="200px">
                </div>

                <div class="content-text">
                    <h3>MADU SJ</h3>
                    <h3 class="hargaproduk">Rp 120.000</h3>
                </div>

                <div class="btn-block">
                    <a href="controller/produk_makanan/madutj.php" class="btn-pesan">Pesan</a>
                </div>
            </div>
            <div class="cardproduk">
                <div class="imgproduk-cardproduk">
                    <img src="Img/Health/robusta Health13.png" height="200px" width="200px">
                </div>

                <div class="content-text">
                    <h3>HANIA REALCO</h3>
                    <h3 class="hargaproduk">Rp 45.000</h3>
                </div>

                <div class="btn-block">
                    <a href="controller/produk_makanan/haniarelaco.php" class="btn-pesan">Pesan</a>
                </div>
            </div>
        </div>
    </div>

    <div class="specialFood">
        <div class="title">
            <h3>Produk Kosmetik</h3>
        </div>

        <div class="flex">
            <div class="cardproduk">
                <div class="imgproduk-cardproduk">
                    <img src="Img/Kosmetik/DAY CREAM Kosmetik1.png" height="200px" width="200px">
                </div>

                <div class="content-text">
                    <h3>DAY CREAM</h3>
                    <h3 class="hargaproduk">Rp 75.000</h3>
                </div>

                <div class="btn-block">
                    <a href="controller/produk_kosmetik/daycream.php" class="btn-pesan">Pesan</a>
                </div>
            </div>
            <div class="cardproduk">
                <div class="imgproduk-cardproduk">
                    <img src="Img/Kosmetik/NIGHT CREAM Kosmetik2.png" height="200px" width="200px">
                </div>

                <div class="content-text">
                    <h3>NIGHT CREAM</h3>
                    <h3 class="hargaproduk">Rp 85.000</h3>
                </div>

                <div class="btn-block">
                    <a href="controller/produk_kosmetik/nightcream.php" class="btn-pesan">Pesan</a>
                </div>
            </div>
            <div class="cardproduk">
                <div class="imgproduk-cardproduk">
                    <img src="Img/Kosmetik/PGH Kosmetik5.png" height="200px" width="200px">
                </div>

                <div class="content-text">
                    <h3>PASTA GIGI HERBAL</h3>
                    <h3 class="hargaproduk">Rp 20.000</h3>
                </div>

                <div class="btn-block">
                    <a href="controller/produk_kosmetik/pastagigi.php" class="btn-pesan">Pesan</a>
                </div>
            </div>
            <div class="cardproduk">
                <div class="imgproduk-cardproduk">
                    <img src="Img/Kosmetik/PGH ANGGUR Kosmetik9.png" height="200px" width="200px">
                </div>

                <div class="content-text">
                    <h3>PASTA GIGI ANGGUR</h3>
                    <h3 class="hargaproduk">Rp 13.000</h3>
                </div>

                <div class="btn-block">
                    <a href="controller/produk_kosmetik/pganggur.php" class="btn-pesan">Pesan</a>
                </div>
            </div>
            <div class="cardproduk">
                <div class="imgproduk-cardproduk">
                    <img src="Img/Kosmetik/SABUN KOLAGEN Kosmetik6.png" height="200px" width="200px">
                </div>

                <div class="content-text">
                    <h3>SABUN KOLAGEN</h3>
                    <h3 class="hargaproduk">Rp 25.000</h3>
                </div>

                <div class="btn-block">
                    <a href="controller/produk_kosmetik/sabuncolagen.php" class="btn-pesan">Pesan</a>
                </div>
            </div>
            <div class="cardproduk">
                <div class="imgproduk-cardproduk">
                    <img src="Img/Kosmetik/GW DETERGENT Kosmetik3.png" height="200px" width="200px">
                </div>

                <div class="content-text">
                    <h3>DETERGENT</h3>
                    <h3 class="hargaproduk">Rp 50.000</h3>
                </div>

                <div class="btn-block">
                    <a href="controller/produk_kosmetik/deterjen.php" class="btn-pesan">Pesan</a>
                </div>
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
        <script>
            function sendMessage(phoneNumber) {
              window.open('https://api.whatsapp.com/send?phone=' + '6281280470144');
            }
          </script>
          <script>
                function sendMessage() {
                    let NoTlp = document.getElementById("Pesan").value;
                    let textwa = 'Pesan : ' + Pesan;
        
                    let wano = '6281280470144';
                    let waurl = 'https://wa.me/' + wano + '?text=Hallo%20,%0ASaya%20' + name + '%0A' + textwa;
                    window.open(waurl,'_blank');
                }
        </script>
    </footer>

    </body>
</html>