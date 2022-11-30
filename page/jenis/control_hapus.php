<?php 
$id = $_GET['id_jenis'];

$hapus = mysqli_query($con,"DELETE FROM tb_jenis WHERE id_jenis='$id'");

if ($hapus==true) {
	echo "<script>
	alert('Data berhasil dihapus');
	window.location.href='index.php?page=data-jenis';
	</script>";
}else{
	echo "<script>
	alert('Data gagal dihapus');
	window.location.href='index.php?page=data-jenis';
	</script>";
}


 ?>