<!DOCTYPE html>
<html>
<head>
	<title>Membuat Login Dengan CodeIgniter | www.malasngoding.com</title>
</head>
<body>
	<h1>Membuat Login Dengan CodeIgniter <br/> www.malasngoding.com</h1>
	<form action="<?php echo base_url('login/aksi_login'); ?>" method="post"><!--memanggil contoller login dengan function aksi_login-->		
		<table>
			<tr>
				<td>Username</td> <!--label username-->
				<td><input type="text" name="username"></td> <!--inputan untuk username-->
			</tr>
			<tr>
				<td>Password</td> <!--label password-->
				<td><input type="password" name="password"></td> <!--inputan password-->
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Login"></td> <!--tombol login-->
			</tr>
		</table>
	</form>
</body>
</html>