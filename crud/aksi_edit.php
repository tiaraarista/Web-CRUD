<?php 
require_once 'header.php';
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

if(empty($nama) || empty($username) || empty($password) || empty($email))
{
	echo "<div class='container'><center><h1><b>CRUD</b></h1></center><hr></div><br/><br/><br/><br/>";
	echo "<div class='container'><h3><center><p class='text-danger'><b>GAGAL UPDATE!</b></p>OOPS! Data belum lengkap, pastikan semua kolom di form telah terisi!</center></h3><center><br><a href='http://localhost/crud/' class='btn btn-outline-danger' role='button' title='Batal'>Batal</a></div><br><br>";
	require_once 'footer.php';
	return;
}elseif(!preg_match("/^[a-zA-Z ]*$/",$nama)){
	echo "<div class='container'><center><h1><b>CRUD</b></h1></center></div><br/><br/><br/><br/>";  
	echo "<div class='container'><h3><center>Nama hanya boleh menggunakan huruf dan Spasi saja!</center></h3><center><br><a href='http://localhost/crud/' class='btn btn-outline-danger' role='button' title='Batal'>Batal</a></center></div><br><br>";
	require_once 'footer.php';
}elseif (!preg_match("/^[a-zA-Z]*$/",$username)){
	echo "<div class='container'><center><h1><b>CRUD</b></h1></center></div><br/><br/><br/><br/>";  
	echo "<div class='container'><h3><center>Kombinasi username hanya huruf tanpa spasi!</center></h3><center><br><a href='http://localhost/crud/' class='btn btn-outline-danger' role='button' title='Batal'>Batal</a></center></div>";  
}elseif (!preg_match("/^[a-zA-Z0-9]*$/",$password)){
	echo "<div class='container'><center><h1><b>CRUD</b></h1></center></div><br/><br/><br/><br/>";  
	echo "<div class='container'><h3><center>Kombinasi password hanya huruf dan angka tanpa spasi!</center></h3><center><br><a href='http://localhost/crud/' class='btn btn-outline-danger' role='button' title='Batal'>Batal</a></center></div>";  
}elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
	echo "<div class='container'><center><h1><b>CRUD</b></h1></center></div><br/><br/><br/><br/>";  
	echo "<div class='container'><h3><center>Email anda tidak Valid contoh : tiaraarista@gmail.com!</center></h3><center><br><a href='http://localhost/crud/' class='btn btn-outline-danger' role='button' title='Batal'>Batal</a></center></div>";
}
else{
  mysqli_query($koneksi,"update user set nama='$nama', username='$username', password='$password', email='$email' where id='$id'");
  header("location:index.php");
}
$koneksi->close();
?>