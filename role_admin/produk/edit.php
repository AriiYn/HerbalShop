<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../../login/Index.php?pesan=belum_login");
	}

        include '../../koneksi.php';

        $id = $_GET['id'];

        if(isset($_POST['update_product'])){

        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $description = $_POST['description'];
        $berat = $_POST['berat'];
        $product_image = $_FILES['product_image']['name'];
        $nama_kategori = $_POST['nama_kategori'];
        $stok = $_POST['stok'];
        $product_status = $_POST['product_status'];
        $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
        $product_image_folder = 'uploaded_img/'.$product_image;

        if(empty($product_name) || empty($product_price) || empty($product_image)){
            $message[] = 'please fill out all!';    
        }else{

            $update_data = "UPDATE products SET name='$product_name', nama_kategori='$nama_kategori', stok='$stok', product_status='$product_status', price='$product_price', description='$description', berat='$berat', image='$product_image'  WHERE id = '$id'";
            $upload = mysqli_query($koneksi, $update_data);

            if($upload){
                move_uploaded_file($product_image_tmp_name, $product_image_folder);
                header('location:data_produk.php');
            }else{
                $message[] = 'please fill out all!'; 
            }

        }
        };
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
    <div class="container">
        <div class="row mb-3">
        </div>
  </body>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '<span class="message">'.$message.'</span>';
   }
}

?>
</body>
    <body id="bg-login">
       <div class="form-login">

    <?php
        $select = mysqli_query($koneksi, "SELECT * FROM products WHERE id = '$id'");
        while($row = mysqli_fetch_assoc($select)){
    ?>
        <form action="" method="post" enctype="multipart/form-data">
            <h3 class="title">update the product</h3><br>
            <input type="text" class="form-control" class="box" name="product_name" value="<?php echo $row['name']; ?>" placeholder="Nama Produk" required><br>
            <div class="form-group">
                <?php $jk = $row['nama_kategori']; ?>
                <select class="form-control" name="nama_kategori">
                    <option value=""> Pilih Nama Kategori..</option>
                    <option value="Produk Herbal" <?php echo $jk == 'Produk Herbal' ? 'selected="selected"' : '' ?>>Produk Herbal</option>
                    <option value="Produk Makanan & Kesehatan" <?php echo $jk == 'Produk Makanan & Kesehatan' ? 'selected="selected"' : '' ?>>Produk Makanan & Kesehatan</option>
                    <option value="Produk Kecantikan" <?php echo $jk == 'Produk Kecantikan' ? 'selected="selected"' : '' ?>>Produk Kecantikan</option>
                </select>
            </div><br>
            <input type="number" class="form-control" class="box" name="stok" value="<?php echo $row['stok']; ?>" placeholder="Stok" required><br>
            <input type="text" class="form-control" min="0" class="box" name="product_price" value="<?php echo $row['price']; ?>" placeholder="Harga Produk" required><br>
            <input type="text" class="form-control" class="box" name="description" value="<?php echo $row['description']; ?>" placeholder="Deskripsi Produk" required><br>
            <input type="text" class="form-control" class="box" name="berat" value="<?php echo $row['berat']; ?>" placeholder="Berat dan Isi Produk" required><br>
            <select class="form-control" name="product_status">
                <option value="">--Pilih--</option>
					<option value="1" <?php echo ($row['product_status'] == 1)? 'selected':''; ?>>Aktif</option>
					<option value="0" <?php echo ($row['product_status'] == 0)? 'selected':''; ?>>Tidak Aktif</option>
				</select><br>
            <input type="file" class="form-control" class="box" name="product_image"  accept="image/png, image/jpeg, image/jpg"><br>
            <input type="submit" value="update product" name="update_product" class="btn">
        </form>
        <?php } ?><br><br>
        <a href="data_produk.php" class="btn btn-primary" style="background-color: #068622;">Kembali</a>
        </div>
    </div>
</body>
</html>