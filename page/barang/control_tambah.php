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

$rand = rand();
$filename = $_FILES['foto']['name'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

// konversi ke angka
$hb = preg_replace("/[^0-9]/","",$harga_beli);
$hj = preg_replace("/[^0-9]/","",$harga_jual);
$dis = preg_replace("/[^0-9]/","",$diskon);

$xx = $rand.'_'.$filename;
move_uploaded_file($_FILES['foto']['tmp_name'], '../../foto_barang/'.$rand.'_'.$filename);
$simpan = mysqli_query($con,"INSERT INTO tb_barang VALUES ('$id_barang','$id_jenis','$id_brand','$des','$hb','$hj','$dis','$stok','$xx','$_POST[ket]')");
if ($simpan==true) {
	echo "<script>
	alert('Data berhasil disimpan');
	window.location.href='../../index.php?page=data-barang';
	</script>";
}else{
	echo "<script>
	alert('Data gagal disimpan');
	window.location.href='../../index.php?page=data-barang';
	</script>";
}

?>