<?php 
include '../../koneksi.php';

$username = $_POST['username'];
$nama = $_POST['nama'];
$hak_akses = $_POST['hak_akses'];
$password = $_POST['password'];
$id = $_POST['id'];

$update = mysqli_query($con,"UPDATE tb_user SET username='$username',nama_user='$nama',alamat='$_POST[alamat]',telepon='$_POST[telepon]',hak_akses='$hak_akses',password='$password' WHERE id_user='$id'");
if ($update==true) {
	echo "<script>
	alert('Data berhasil diupdate');
	window.location.href='../../index.php?page=data-user';
	</script>";
}else{
	echo "<script>
	alert('Data gagal diupdate');
	window.location.href='../../index.php?page=data-user';
	</script>";
}

?>