<!DOCTYPE html>
<html>
<head>
<?php require_once 'header.php'; ?>
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
</head>
<body>
  <div class="container">
	<br><h3>EDIT DATA </h3><hr><br>

	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from user where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="aksi_edit.php">
			<table>
				<div class="form-group">		
					Nama<br>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>" class="form-control">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>" class="form-control"><br>

					Username<br>
					<input type="text" name="username" value="<?php echo $d['username']; ?> " class="form-control"><br>

					Password<br>
					<input type="text" name="password" value="<?php echo $d['password']; ?>" class="form-control"><br>

					Email<br>
					<input type="text" name="email" value="<?php echo $d['email']; ?>" class="form-control">

					<td></td>
					<td><button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
					<a href="index.php" class="btn btn-danger"><i class="fa fa-ban"></i> Batal</a></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>	
<?php require_once 'footer.php'; ?>	
</body>
</html>	