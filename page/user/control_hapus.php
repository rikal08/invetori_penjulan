<?php 
$id = $_GET['id_user'];

$hapus = mysqli_query($con,"DELETE FROM tb_user WHERE id_user='$id'");

if ($hapus==true) {
	echo "<script>
	alert('Data berhasil dihapus');
	window.location.href='index.php?page=data-user';
	</script>";
}else{
	echo "<script>
	alert('Data gagal dihapus');
	window.location.href='index.php?page=data-user';
	</script>";
}


 ?>