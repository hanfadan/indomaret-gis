<?php
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$datalogin = pg_query($conn,"select * from admin where username='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = pg_num_rows($datalogin);

if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:view.php");
}else{
	header("location:login.php?pesan=gagal");
}
?>
