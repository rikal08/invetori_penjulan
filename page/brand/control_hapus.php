<?php 
$id = $_GET['id_brand'];

$hapus = mysqli_query($con,"DELETE FROM tb_brand WHERE id_brand='$id'");

if ($hapus==true) {
	echo "<script>
	alert('Data berhasil dihapus');
	window.location.href='index.php?page=data-brand';
	</script>";
}else{
	echo "<script>
	alert('Data gagal dihapus');
	window.location.href='index.php?page=data-brand';
	</script>";
}


 ?>