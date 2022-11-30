<?php 
session_start();
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];

$cek = mysqli_query($con,"SELECT * FROM tb_user WHERE username='$username' AND password='$password'");
$hasil = mysqli_num_rows($cek);

if ($hasil>0) {
	$user = mysqli_fetch_array($cek);
	$_SESSION['username'] = $user['username'];
	$_SESSION['nama_user'] = $user['nama_user'];
	$_SESSION['hak_akses'] = $user['hak_akses'];
	$_SESSION['id_user'] = $user['id_user'];

	echo "<script>
			window.location.href='index.php'
	</script>";
}else{
	echo "<script>
			alert('Gagal melakukan login');window.location.href='index.php'
	</script>";
}

?>