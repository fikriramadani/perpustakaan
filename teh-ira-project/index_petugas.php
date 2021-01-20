<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin | dashboard</title>
</head>
<body>
<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
 
	?>

	<a href="data_buku.php">data buku</a>
    <a href="data_pegawai.php">data pegawai</a>
    <a href="data_user.php">data pengunjung</a>
    
	<h1>selamat datang</h1>
    <h4>anda berada dihalaman admin</h4>

    
</body>
</html>