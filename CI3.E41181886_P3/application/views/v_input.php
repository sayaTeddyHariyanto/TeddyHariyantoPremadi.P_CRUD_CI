<!--v_input digunakan sebagai form inputan data-->
<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title>
</head>
<body>
	<center>
		<h1>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</h1>
		<h3>Tambah data baru</h3>
	</center>
	<form action="<?php echo base_url(). 'crud/tambah_aksi'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama</td> <!--label untuk menandakan inputan nama-->
				<td><input type="text" name="nama"></td> <!--inputan namanya-->
			</tr>
			<tr>
				<td>Alamat</td> <!--label untuk menandakan inputan alamat-->
				<td><input type="text" name="alamat"></td><!--inputan alamat-->
			</tr>
			<tr>
				<td>Pekerjaan</td> <!--label untuk menandakan inputan alamat-->
				<td><input type="text" name="pekerjaan"></td> <!--inputan alamatnya-->
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td> <!--Tombol untuk menambahkan data yang telah dimasukkan -->
			</tr>
		</table>
	</form>	
</body>
</html>