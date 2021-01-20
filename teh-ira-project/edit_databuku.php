<html>
    <head>
        <title>edit data buku</title>
    </head>
<body>
<?php
    include 'koneksi.php';
		 $id_buku= $_GET['id_buku'];
		 $ubah = mysqli_query($koneksi,"select *from buku where id_buku='$id_buku'");
		 while ($d = mysqli_fetch_array ($ubah)){
			 ?>
	
	<h1 class="panel-heading">ubah data buku</h1>
    <form action="update_databuku.php" method="POST">
	<input type="hidden"name="id_buku" value="<?php echo $d['id_buku'];?>">
	<table>
		<tbody>
					<tr>
                        <th>id buku</th>
                        <td><input type="text" value="<?php echo $d['id_buku']; ?>" readonly class="form-control" placeholder="id_buku" name="id_buku"  required></td>
                      </tr>

				    <tr>
                        <th>nama buku</th>
                        <td><input type="text" value="<?php echo $d['nama_buku']; ?>" class="form-control" placeholder="nama buku"  name="nama_buku" required ></td>
                      </tr>
   
					  <tr>
                        <th>penerbit</th>
                        <td><input type="text" value="<?php echo $d['penerbit']; ?>" class="form-control" placeholder="penerbit"  name="penerbit"  required></td>
                      </tr>

					  <tr>
                        <th>nama penulis</th>
                        <td><input type="text" value="<?php echo $d['nama_penulis']; ?>" class="form-control" placeholder="nama penulis"  name="nama_penulis"  required></td>
                      </tr>

					  <tr>
                        <th>jenis buku</th>
                        <td><input type="text" value="<?php echo $d['jenis_buku']; ?>" class="form-control" placeholder="jenis_buku"  name="jenis_buku"  required></td>
                      </tr>

					  <tr>
                        <th>jumlah buku</th>
                        <td><input type="text" value="<?php echo $d['jumlah_buku']; ?>" class="form-control" placeholder="jumlah_buku"  name="jumlah_buku" required></td>
                      </tr>

               		  
					<tr>
						<td>
						<button class="btn btn-success" type="submit" name="tambah">SIMPAN</button>
						</td>
               		 </tr>
                
                </form>
			</tbody>	
        </table>
        <?php	
         }
		?>
	</div>
</body>
</html>