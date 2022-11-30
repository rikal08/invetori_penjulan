<?php 

include '../../koneksi.php';

$id = $_GET['id_detail'];

$hapus = mysqli_query($con,"DELETE FROM tb_detail_tran_keluar WHERE id_detail='$id'");

?>