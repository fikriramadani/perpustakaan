<html lang="en">
<head>
    <title>tambah data buku</title>
</head>
<style>
body{
    padding:10px;
}
</style>
<body>
<h1>input buku</h1>
<form action="proses_databuku.php" method="POST">
        <table class="table">
                     <tr>
                        <th>nama buku</th>
                        
                        <td><input type="text" class="form-control" placeholder="nama buku" name="nama_buku"  required></td>
                      </tr>

                      <tr>
                        <th>penerbit</th>
                       
                        <td><input type="text" class="form-control" placeholder="penerbit"  name="penerbit"  required></td>
                      </tr>

                      <tr>
                        <th>nama penulis</th>
                        
                        <td><input type="text" class="form-control" placeholder="nama_penulis"  name="nama_penulis"  required></td>
                      </tr>

                      <tr>
                        <th>jenis buku</th>
                        
                        <td><input type="text" class="form-control" placeholder="jenis buku" name="jenis_buku"  required></td>
                      </tr>

                      <tr>
                        <th>jumlah buku</th>
                       
                        <td><input type="text" class="form-control" placeholder="jumlah buku"  name="jumlah_buku"  required></td>
                      </tr>

                      <tr>
		                <td></td>
		                <td>
			                <button class="btn btn-success" type="submit" name="tambah">SIMPAN</button>
		                </td>
	                </tr>
        </table>
    </body>
</html>
