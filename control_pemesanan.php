<?php 

include 'koneksi.php';
date_default_timezone_set("Asia/Jakarta");
$query = mysqli_query($con,"SELECT max(kode_tran_keluar) as Kode FROM tb_transaksi_keluar");
$data = mysqli_fetch_array($query);

$kodeTran = $data['Kode'];

$urutan = (int) substr($kodeTran,5,5);

$urutan++;

$huruf = "TK";

$kodeTran = $huruf.sprintf("%05s",$urutan);

$waktu = date('Y-m-d H:i:s');
$id_user = $_POST['id_user'];
$simpan = mysqli_query($con,"INSERT INTO tb_transaksi_keluar VALUES (NULL,'$kodeTran','$waktu','$id_user','1')");

$id_barang = $_POST['id_barang'];
$simpan = mysqli_query($con,"INSERT INTO tb_detail_tran_keluar VALUES (NULL,'$kodeTran','$id_barang','1')");

if ($simpan==true) {
	$update = mysqli_query($con,"UPDATE tb_detail_tran_keluar SET kode_tran_keluar='$kodeTran' WHERE kode_tran_keluar='0'");

	$cek_id = mysqli_query($con,"SELECT * FROM tb_detail_tran_keluar WHERE kode_tran_keluar='$kodeTran'");
	foreach ($cek_id as $data) {
		$update_2 = mysqli_query($con,"UPDATE tb_barang SET stok=stok-'$data[jumlah]' WHERE id_barang='$data[id_barang]'");
	}
}

echo "<script>
			alert('Pemesanan berhasil');window.location.href='index.php?page=transaksi'
	</script>";
?>