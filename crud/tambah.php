<!DOCTYPE html>
<html>
<head>
<?php require_once 'header.php'; ?>
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
</head>
<body>
  <div class="container">
	<br><h3>TAMBAH DATA </h3><hr><br>
	<form method="post" action="tambah_aksi.php">
		<table>
			<div class="form-group">		
			Nama<br>
				<input type="text" name="nama" class="form-control"></span><br>				
			Username<br>
				<input type="text" name="username" class="form-control"><br>
			Password<br>
				<input type="password" name="password" class="form-control"><br>
			Email<br>
				<input type="text" name="email" class="form-control">
				<td></td>
				<td><button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
				<a href="index.php" class="btn btn-danger"><i class="fa fa-ban"></i> Batal</a></td>
			</tr>		
		</table>
	</form>
</div>
<?php require_once 'footer.php'; ?>	
</body>
</html>