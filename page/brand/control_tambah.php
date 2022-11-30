<?php 
include '../../koneksi.php';

$nama_brand = $_POST['nama_brand'];

$simpan = mysqli_query($con,"INSERT INTO tb_brand VALUES (NULL,'$nama_brand')");

if ($simpan==true) {
	echo "<script>
	alert('Data berhasil disimpan');
	window.location.href='../../index.php?page=data-brand';
	</script>";
}else{
	echo "<script>
	alert('Data gagal disimpan');
	window.location.href='../../index.php?page=data-brand';
	</script>";
}


?>