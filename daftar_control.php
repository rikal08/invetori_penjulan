<?php 
include 'koneksi.php';

$user = $_POST['username'];
$nama = $_POST['nama'];
$tel = $_POST['telepon'];
$alamat = $_POST['alamat'];
$pass = $_POST['password'];

$simpan = mysqli_query($con,"INSERT INTO tb_user VALUES(NULL,'$user','$nama','$tel','$alamat',3,'$pass')");

echo "<script>
			alert('Pendaftaran berhasil');window.location.href='index.php?page=login'
	</script>";

 ?>