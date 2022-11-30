<?php 
$id = $_GET['id_barang'];

$hapus = mysqli_query($con,"DELETE FROM tb_barang WHERE id_barang='$id'");

if ($hapus==true) {
	echo "<script>
	alert('Data berhasil dihapus');
	window.location.href='index.php?page=data-barang';
	</script>";
}else{
	echo "<script>
	alert('Data gagal dihapus');
	window.location.href='index.php?page=data-barang';
	</script>";
}


 ?>