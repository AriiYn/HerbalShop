<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../login/Index.php?pesan=belum_login");
	}
	?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/tambah.css">
  <link rel="stylesheet" href="../css/style.css">
  <title>LAPORAN</title>
</head>
<body>
<header>
        <div class="navbar">
            <div class="logo">
                <h3>SPP_Sekolah</h3>
            </div>
            <div class="navigation">
                <ul>
                    <li><a href="../Index.php">Home</a></li>
                    <li><a href="data_spp.php">Data SPP</a></li>
                    <li><a href="data_petugas.php">Data Petugas</a></li>
                    <li><a href="data_kelas.php">Data Kelas</a></li>
                    <li><a href="data_siswa.php">Data Siswa</a></li>
                    <li><a href="laporan.php">Laporan</a></li>
                    <li><a href="../login/Logout.php">Log Out</a></li>
                </ul>
            </div>
        </div>
    </header>
    <br><br>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                <h4>Laporan pembayaran</h4>
                <div class="card-header-form">
                </div>
            </div>   
        </div>
      <br>
      <div>
        <section>
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h4>LAPORAN TRANSAKSI</h4>
                    <div class="card-header-form">
                    </div>
                  </div>
              <form method="POST" action="../ekspor.php" enctype="multipart/form-data" >
        <div>
          <label>Dari Tanggal</label>
          <input type="date" name="daritanggal" autofocus="" required="" />
        </div>
        <div>
          <label>Sampai Tanggal</label>
         <input type="date" name="sampaitanggal" required=""/>
        </div>
        
        <div>
         <button type="submit">Ekspor ke DOKUMEN</button>
        </div>
        </section>
      </form>
</body>
</html>