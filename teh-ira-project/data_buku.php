<html lang="en">
<head>
    <title>Data buku</title>
</head>
	<style>
		body{
			padding:10px;
		}
	</style>
<body>
	
	<a href="#">data buku</a>
    <a href="data_pegawai.php">data pegawai</a>
    <a href="data_user.php">data pengunjung</a>
    <br>
    <table border="1">
	<a href="tambah_databuku.php">tambah data</a>
    <thead>
        <tr>
            <th>No</th>
            <th>ID buku</th>
            <th>nama buku</th>
            <th>penerbit</th>
            <th>nama penulis</th>
			<th>jenis buku</th>
			<th>jumlah buku</th>
			<th>action</th>
        </tr>
        </thead>
        
		<?php 
			include "koneksi.php";
			$no=1;
			$data=mysqli_query($koneksi, "select * from buku");
			while($d=mysqli_fetch_array($data)){
				?>
				<tr>
					<td><?php echo $no++;?></td>
					<td><?php echo $d['id_buku']?></td>
					<td><?php echo $d['nama_buku']?></td>
					<td><?php echo $d['penerbit']?></td>
					<td><?php echo $d['nama_penulis']?></td>
					<td><?php echo $d['jenis_buku']?></td>
					<td><?php echo $d['jumlah_buku']?></td>
					<td>
                    <a class="glyphicon glyphicon-edit btn btn-warning btn-sm" href="edit_databuku.php?id_buku=<?php echo $d['id_buku'];?>">EDIT</a>
					<a class="glyphicon glyphicon-edit btn btn-danger btn-sm" href="hapus_databuku.php?id_buku=<?php echo $d['id_buku'];?>"onclick="return confirm('yakin mau hapus??')">HAPUS</a>
				</td>
					
				</tr>
				
		<?php
			}
		?>
    </table>
    
</body>
</html>