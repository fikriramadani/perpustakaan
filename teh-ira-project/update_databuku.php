<?php
include 'koneksi.php';

$id_buku = $_POST['id_buku'];
$nama_buku = $_POST['nama_buku'];
$penerbit = $_POST['penerbit'];
$nama_penulis=$_POST['nama_penulis'];
$jenis_buku = $_POST['jenis_buku'];
$jumlah_buku=$_POST['jumlah_buku'];

mysqli_query($koneksi,"UPDATE buku set   nama_buku ='$nama_buku',
                                            penerbit='$penerbit',
										    nama_penulis ='$nama_penulis',
                                            jenis_buku='$jenis_buku',
										    jumlah_buku ='$jumlah_buku' where
                                            id_buku='$id_buku'")or die (mysqli_error($koneksi));

header("location:data_buku.php");
?>