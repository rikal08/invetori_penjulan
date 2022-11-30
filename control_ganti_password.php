<?php 
include 'koneksi.php';

$id = $_POST['id_user'];
$p1 = $_POST['new_password'];
$p2 = $_POST['new_password_2'];

if ($p1 > 0) {

if ($p1==$p2) {
	$update = mysqli_query($con,"UPDATE tb_user SET nama_user='$_POST[nama]',telepon='$_POST[telepon]',alamat='$_POST[alamat]',password='$p1' WHERE id_user='$id'");
	if ($update==true) {
		echo "<script>
			alert('Berhasil di update');window.location.href='index.php?page=profil'
	</script>";
	}

}else{
	echo "<script>
			alert('Pastikan password sama');window.location.href='index.php?page=profil'
	</script>";
}


}else{
	$update = mysqli_query($con,"UPDATE tb_user SET nama_user='$_POST[nama]',telepon='$_POST[telepon]',alamat='$_POST[alamat]' WHERE id_user='$id'");
	if ($update==true) {
		echo "<script>
			alert('Berhasil di update');window.location.href='index.php?page=profil'
	</script>";
}
}

?>