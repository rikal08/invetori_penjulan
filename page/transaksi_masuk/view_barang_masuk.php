<?php 
include '../../koneksi.php';

$view = mysqli_query($con,"SELECT * FROM tb_detail_tran_masuk JOIN tb_barang ON tb_detail_tran_masuk.id_barang=tb_barang.id_barang WHERE kode_tran_masuk='0'");

$no=1;
foreach ($view as $data) {
$id = $data['id_detail'];
?>

	<tr>
		<td><?= $no++ ?></td>
		<td><?= $data['deskripsi'] ?></td>
		<td><?= $data['jumlah'] ?></td>
		<td><a onclick="return hapusItemMasuk(<?= $data['id_detail'] ?>)" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
	</tr>

<?php } ?>