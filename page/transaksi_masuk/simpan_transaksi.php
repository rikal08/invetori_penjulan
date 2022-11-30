<?php 

include '../../koneksi.php';
date_default_timezone_set("Asia/Jakarta");
$query = mysqli_query($con,"SELECT max(kode_tran_masuk) as Kode FROM tb_transaksi_masuk");
$data = mysqli_fetch_array($query);

$kodeTran = $data['Kode'];

$urutan = (int) substr($kodeTran,5,5);

$urutan++;

$huruf = "TM";

$kodeTran = $huruf.sprintf("%05s",$urutan);

$sup = $_POST['sup'];
$waktu = date('Y-m-d H:i:s');
$id_user = $_POST['id_user'];
$simpan = mysqli_query($con,"INSERT INTO tb_transaksi_masuk VALUES (NULL,'$kodeTran','$waktu','$sup','$id_user')");

if ($simpan==true) {
	$update = mysqli_query($con,"UPDATE tb_detail_tran_masuk SET kode_tran_masuk='$kodeTran' WHERE kode_tran_masuk='0'");

	$cek_id = mysqli_query($con,"SELECT * FROM tb_detail_tran_masuk WHERE kode_tran_masuk='$kodeTran'");
	foreach ($cek_id as $data) {
		$update_2 = mysqli_query($con,"UPDATE tb_barang SET stok=stok+'$data[jumlah]' WHERE id_barang='$data[id_barang]'");
	}
}

?>