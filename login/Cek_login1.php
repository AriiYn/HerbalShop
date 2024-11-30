<?php 

session_start();
include '../Koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($koneksi,"SELECT * FROM login_pelanggan where username='$username' and password='$password'");
$cek = mysqli_num_rows($data);

if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	echo "<script>alert('Login berhasil.');window.location='../pelanggan.php';</script>";
}else {
	echo '<script>alert("username atau password Anda salah!");window.location="Index.php";</script>';
	}
?>