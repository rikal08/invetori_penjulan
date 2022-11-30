<?php 

include '../../koneksi.php';

$id_barang = $_POST['id_barang'];
$jumlah = $_POST['jumlah_masuk'];
$simpan = mysqli_query($con,"INSERT INTO tb_detail_tran_masuk VALUES (NULL,'0','$id_barang','$jumlah')");

?>