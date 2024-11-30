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
                    <li><a href="#">Home</a></li>
                    <li><a href="Produk.php">Produk</a></li>
                    <li><a href="#About">Tentang Kami</a></li>
                    <li><a href="#contact">Kontak</a></li>
                    <li><a href="profil.php">Profil</a></li>
                    <li><a href="Login/Logout.php">Log Out</a></li>
                </ul>
            </div>
        </div>
    </header>

    <section class="hero">
            <div class="card card1"></div>
        </div>
    </section><br><br><br>
    <a style="margin:50px; font-family: Verdana; font-size: 20px;">Selamat datang <?php echo $_SESSION['username']; ?></a>

    <div class="sale">
        <div class="card1"></div>
        <div class="card2"></div>
    </div>

    <section id="About" class="About"></section>

    <div class="specialFood">
        <div class="title">
            <h3>TENTANGKAMI</h3>
        </div>

        <div class="text">
            <h4>PT Herba Penawar Alwahida Indonesia, yang kemudian dikenal sebagai HPAI, merupakan salah satu perusahaan Bisnis Halal Network di Indonesia yang fokus pada penyediaan produk-produk barang konsumsi (consumer goods) yang halal dan berkualitas. HPAI, sesuai dengan akta pendirian perusahaan, secara resmi didirikan pada tanggal 19 Maret 2012.
                HPAI merupakan hasil dari perjuangan panjang dengan tujuan untuk menjayakan produk-produk halal berkualitas yang berazaskan Thibbunnabawi; membumikan, memajukan, dan mengaktualisasikan ekonomi Islam di Indonesia melalui enterpreneurship, dan juga turut serta dalam memberdayakan dan mengangkat UMKM nasional.</h4>
        </div>

        <div class="title">
            <h3>VISI</h3>
        </div>

        <div class="text">
            <h4>Menjadi Pemimpin Industri Halal Kelas Dunia (dari Indonesia)</h4>
        </div>

        <div class="title">
            <h3>MISI</h3>
        </div>

        <div class="text">
            <h4>
                <p>1. Menjadi perusahaan jaringan pemasaran papan atas kebanggaan Ummat.</p>
                <p>2. Menjadi wadah perjuangan penyediaan Produk Halal bagi ummat Islam.</p>
                <p>3. Menghasilkan pengusaha-pengusaha muslim yang dapat dibanggakan,</p> 
                    baik sebagai pemasar, pembangun jaringan maupun produsen.
            </h4>
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