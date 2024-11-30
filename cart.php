<?php

include 'koneksi.php';

if(isset($_POST['update_update_btn'])){
   $update_value = $_POST['update_quantity'];
   $update_id = $_POST['update_quantity_id'];
   $update_quantity_query = mysqli_query($koneksi, "UPDATE `cart` SET quantity = '$update_value' WHERE id = '$update_id'");
   if($update_quantity_query){
      header('location:cart.php');
   };
};

if(isset($_GET['remove'])){
   $remove_id = $_GET['remove'];
   mysqli_query($koneksi, "DELETE FROM `cart` WHERE id = '$remove_id'");
   header('location:cart.php');
};

if(isset($_GET['delete_all'])){
   mysqli_query($koneksi, "DELETE FROM `cart`");
   header('location:cart.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style1.css">
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

<div class="container">

<section class="shopping-cart">

   <h1 class="heading">shopping cart</h1>

   <table>

      <thead>
         <th>Gambar</th>
         <th>Nama</th>
         <th>Harga</th>
         <th>Quantity</th>
         <th>Total Harga</th>
         <th>Aksi</th>
      </thead>

      <tbody>

         <?php 
         
         $select_cart = mysqli_query($koneksi, "SELECT * FROM `cart`");
         $grand_total = 0;
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
         ?>

         <tr>
            <td><img src="img/<?php echo $fetch_cart['image']; ?>" height="100" alt=""></td>
            <td><?php echo $fetch_cart['name']; ?></td>
            <td>Rp <?php echo number_format($fetch_cart['price']); ?></td>
            <td>
               <form action="" method="post">
                  <input type="hidden" name="update_quantity_id"  value="<?php echo $fetch_cart['id']; ?>" >
                  <input type="number" name="update_quantity" min="1"  value="<?php echo $fetch_cart['quantity']; ?>" >
                  <input type="submit" value="update" name="update_update_btn">
               </form>   
            </td>
            <td>Rp <?php echo $sub_total = number_format($fetch_cart['price'] * $fetch_cart['quantity']); ?></td>
            <td><a href="cart.php?remove=<?php echo $fetch_cart['id']; ?>" onclick="return confirm('remove item from cart?')" class="delete-btn"> <i class="fas fa-trash"></i> remove</a></td>
         </tr>
         <?php
           $grand_total += $sub_total;  
            };
         };
         ?>
         <tr class="table-bottom"><?php
						include 'koneksi.php';
							$produk = mysqli_query($koneksi, "SELECT * FROM products ORDER BY id DESC LIMIT 1");
							if(mysqli_num_rows($produk) > 0){
								while($a = mysqli_fetch_array($produk)){
						?>
            <td><a href="produk.php?id=<?php echo $a['id'] ?>" class="option-btn" style="margin-top: 0;">continue shopping</a></td>
            <td colspan="3">grand total</td>
            <td>Rp <?php echo $grand_total; ?>,000</td>
            <td><a href="cart.php?delete_all" onclick="return confirm('are you sure you want to delete all?');" class="delete-btn"> <i class="fas fa-trash"></i> delete all </a></td>
         </tr>
      </tbody>
      <?php }} ?>
   </table>

   <div class="checkout-btn">
   <?php
      include 'koneksi.php';
      $produk = mysqli_query($koneksi, "SELECT * FROM login_admin ORDER BY id_admin DESC");
      if(mysqli_num_rows($produk) > 0){
         while($a = mysqli_fetch_array($produk)){
   ?>
      <a href="https://api.whatsapp.com/send?phone=<?php echo $a['no_tlp']; ?>&text=Hai, saya tertarik dengan produk Anda." target="_blank" class="btn <?= ($grand_total > 1)?'':'disabled'; ?>">Checkout</a>
   </div>
   <?php }} ?>
</section>

</div>
   
<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>