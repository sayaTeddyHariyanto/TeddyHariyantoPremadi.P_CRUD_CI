<!--untuk tampilan form edit-->
<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title>
</head>
<body>
	<center>
		<h1>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</h1>
		<h3>Edit Data</h3>
	</center>
	<?php foreach($user as $u){ ?> <!--membuat looping-->
	<form action="<?php echo base_url(). 'crud/update'; ?>" method="post"> <!--method untuk menangani update data dari crud/update menggunakan post-->
		<table style="margin:20px auto;"> <!--membuat table-->
			<tr>
				<td>Nama</td> <!--label Nama -->
				<td>
					<input type="hidden" name="id" value="<?php echo $u->id ?>"> <!--diselipkan id karena data akan melakukan proses crud berdasarkan idnya-->
					<input type="text" name="nama" value="<?php echo $u->nama ?>"> <!--menampilkan data nama yang akan atau tidak akan diedit-->
				</td>
			</tr>
			<tr>
				<td>Alamat</td> <!--label Alamat-->
				<td><input type="text" name="alamat" value="<?php echo $u->alamat ?>"></td> <!--menampilkan data alamat yang akan aatu tidak akan diedit-->
			</tr>
			<tr>
				<td>Pekerjaan</td> <!--label Pekerjaan-->
				<td><input type="text" name="pekerjaan" value="<?php echo $u->pekerjaan ?>"></td> <!--menampilkan data Pekerjaan yang bisa diedit(sudah terisi data sebelumnya)-->
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td> <!--Tombol untuk menyimpan perubahan-->
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>