
<?php
include 'koneksi.php';
$nama_buku = $_POST['nama_buku'];
$penerbit = $_POST['penerbit'];
$nama_penulis = $_POST['nama_penulis'];
$jenis_buku = $_POST['jenis_buku'];
$jumlah_buku = $_POST['jumlah_buku'];

$masuk=mysqli_query($koneksi,"insert into buku values
('','$nama_buku','$penerbit','$nama_penulis','$jenis_buku','$jumlah_buku')")or die (mysqli_error($koneksi));
 

if($masuk){
     echo"data sudah masuk";
}else{
     echo"data gagal masuk";
    }
  header("location:data_buku.php");
?>