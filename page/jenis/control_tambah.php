<?php 
include '../../koneksi.php';

$nama_jenis = $_POST['nama_jenis'];

$simpan = mysqli_query($con,"INSERT INTO tb_jenis VALUES (NULL,'$nama_jenis')");

if ($simpan==true) {
	echo "<script>
	alert('Data berhasil disimpan');
	window.location.href='../../index.php?page=data-jenis';
	</script>";
}else{
	echo "<script>
	alert('Data gagal disimpan');
	window.location.href='../../index.php?page=data-jenis';
	</script>";
}


?>