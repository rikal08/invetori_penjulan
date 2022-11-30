<?php 
include '../../koneksi.php';

$username = $_POST['username'];
$nama = $_POST['nama'];
$hak_akses = $_POST['hak_akses'];
$password = $_POST['password'];

$simpan = mysqli_query($con,"INSERT INTO tb_user VALUES (NULL,'$username','$nama','$_POST[telepon]','$_POST[alamat]','$hak_akses','$password')");

if ($simpan==true) {
	echo "<script>
	alert('Data berhasil disimpan');
	window.location.href='../../index.php?page=data-user';
	</script>";
}else{
	echo "<script>
	alert('Data gagal disimpan');
	window.location.href='../../index.php?page=data-user';
	</script>";
}

?>