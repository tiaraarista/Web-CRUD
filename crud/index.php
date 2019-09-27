<!DOCTYPE html>
<html>
<head>
<?php require_once 'header.php'; ?>
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
</head>
<body>
  <div class="container">
	<br><h1>CRUD Data <b>User</b></h1><hr>
	<br><br>
	<div class="box-header">
          <a href="./tambah.php" class="btn btn-info" role="button" title="Tambah Data"><i class="fa fa-plus"></i> TAMBAH DATA</a>
          </div>
	<br/>
	<table class="table table-bordered table-striped table-hover">
		<tr>
			<th><center>NO</center></th>
			<th><center>Nama</center></th>
			<th><center>username</center></th>
			<th><center>Password</center></th>
			<th><center>Email</center></th>
			<th><center>Aksi</center></th>
		</tr>
<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from user");
		if($koneksi->connect_error){
                            echo "Gagal Koneksi : ". $koneksi->connect_error;
                            echo "</td></tr>";
                        }

                        $query = "select * from user order by nama";
                        $data  = $koneksi->query($query);
                        
                        if($data->num_rows <= 0){
                            echo "<tr>";
                            echo "<td colspan='7' class='text-center'><i>Tidak ada data</i></td>";
                            echo "</tr>";
                        } else{
                            $sql = mysqli_query($koneksi, "SELECT * FROM user"); // jika tidak ada filter maka tampilkan semua entri
                            
                            if(mysqli_num_rows($sql) == 0){ 
                                echo '<tr><td colspan="14">Data Tidak Ada.</td></tr>'; // jika tidak ada entri di database maka tampilkan 'Data Tidak Ada.'
                            }else{ // jika terdapat entri maka tampilkan datanya
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><center><?php echo $no++; ?></center></td>
				<td><center><?php echo $d['nama']; ?></center></td>
				<td><center><?php echo $d['username']; ?></center></td>
				<td><center><?php echo $d['password']; ?></center></td>
				<td><center><?php echo $d['email']; ?></center></td>
				<td><center>
					<a href="edit.php?id=<?php echo $d['id']; ?>" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i> EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> HAPUS</a>
				</center></td>
			</tr>
			<?php 
		}
	}
}
		?>
	</table>
</div>	
	<?php require_once 'footer.php'; ?>
</body>
</html>


