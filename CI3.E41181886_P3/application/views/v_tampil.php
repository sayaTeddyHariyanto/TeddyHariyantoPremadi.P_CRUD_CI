<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title>
</head>
<body>
	<center><h1>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</h1></center>
	<center><?php echo anchor('crud/tambah','Tambah Data'); ?></center> <!--function anchor digunakan untuk membuat hyperlink dengan parameter pertama adalah link tujuan, parameter kedua adalah text yang akan ditampilan-->
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th> <!--nama kolom pada tabel-->
			<th>Nama</th> <!--nama kolom pada tabel-->
			<th>Alamat</th> <!--nama kolom pada tabel-->
			<th>Pekerjaan</th> <!--nama kolom pada tabel-->
			<th>Action</th> <!--nama kolom pada tabel-->
		</tr>
		<?php 
		$no = 1; //deklarasi kolom nomor dimulai dari 1
		foreach($user as $u){ //melakakan looping sebanyak input yang dimasukkan, anggap $user adalah $u
		?>
		<tr>
			<td><?php echo $no++ ?></td> <!--nomor menggunakan auto increment dan terus bertambah seiring bertambahnya input yang dimasukkan-->
			<td><?php echo $u->nama ?></td> <!--field nama -->
			<td><?php echo $u->alamat ?></td> <!--field alamat-->
			<td><?php echo $u->pekerjaan ?></td> <!--field pekerjaan-->
			<td>
			      <?php echo anchor('crud/edit/'.$u->id,'Edit'); ?>
                              <?php echo anchor('crud/hapus/'.$u->id,'Hapus'); ?><!--link untuk menghapus yaitu function hapus pada controller crud, mengirim data id karena akan menghapus data menurut data idnya, dan menampilkan tulin 'Hapus'-->
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>