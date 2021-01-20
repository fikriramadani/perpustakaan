<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['level']=="petugas"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "petugas";
		// alihkan ke halaman dashboard petugas
		header("location:index_petugas.php");
 
	// cek jika user login sebagai mahasiswa
	}else if($data['level']=="mahasiswa"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "mahasiswa";
		// alihkan ke halaman dashboard mahasiswa
		header("location:index_mahasiswa.php");
	}else{
 
		// alihkan ke halaman login kembali
		header("location:login.php?pesan=gagal");
	}	
}else{
	header("location:login.php?pesan=gagal");
}
 
?>