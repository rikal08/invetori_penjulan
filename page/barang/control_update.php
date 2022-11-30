<?php 
include '../../koneksi.php';

$id_barang = $_POST['id_barang'];
$id_jenis = $_POST['id_jenis'];
$id_brand = $_POST['id_brand'];
$des = $_POST['deskripsi'];
$harga_beli = $_POST['harga_beli'];
$harga_jual = $_POST['harga_jual'];
$diskon = $_POST['diskon'];
$stok = $_POST['stok'];

// konversi ke angka
$hb = preg_replace("/[^0-9]/","",$harga_beli);
$hj = preg_replace("/[^0-9]/","",$harga_jual);
$dis = preg_replace("/[^0-9]/","",$diskon);

$update = mysqli_query($con,"UPDATE tb_barang SET id_jenis='$id_jenis',id_brand='$id_brand',deskripsi='$des',harga_beli='$hb',harga_jual='$hj',diskon='$dis',stok='$stok',ket='$_POST[ket]' WHERE id_barang='$id_barang'");

if ($update==true) {
	echo "<script>
	alert('Data berhasil diupdate');
	window.location.href='../../index.php?page=data-barang';
	</script>";
}else{
	echo "<script>
	alert('Data gagal diupdate');
	window.location.href='../../index.php?page=data-barang';
	</script>";
}

 ?>