<?php 
include '../../koneksi.php';
$id = $_GET['id_barang'];

$view = mysqli_query($con,"SELECT * FROM tb_barang WHERE id_barang='$id'");

$data = mysqli_fetch_array($view);

echo json_encode($data);

?>