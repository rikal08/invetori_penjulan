<?php 

include '../../koneksi.php';

$id_barang = $_POST['id_barang'];
$jumlah = $_POST['jumlah_keluar'];
$simpan = mysqli_query($con,"INSERT INTO tb_detail_tran_keluar VALUES (NULL,'0','$id_barang','$jumlah')");

?>