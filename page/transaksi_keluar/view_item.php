<?php 
include '../../koneksi.php';

$view = mysqli_query($con,"SELECT * FROM tb_detail_tran_keluar JOIN tb_barang ON tb_detail_tran_keluar.id_barang=tb_barang.id_barang WHERE kode_tran_keluar='0'");

$no=1;
$total=0;
foreach ($view as $data) {
$total = $total + (($data['jumlah']*$data['harga'])-$data['diskon']);
$id = $data['id_detail'];
?>

	<tr>
		<td><?= $no++ ?></td>
		<td><?= $data['deskripsi'] ?></td>
		<td><?= $data['jumlah'] ?></td>
		<td><?= number_format($data['harga']) ?></td>
		<td><?= number_format($data['diskon']) ?></td>
		<td><?= number_format(($data['harga']*$data['jumlah'])-($data['diskon'])) ?></td>
		<td><a onclick="return hapusItemMasuk(<?= $data['id_detail'] ?>)" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
	</tr>

<?php } ?>

	<tr>
		<td colspan="5">Total</td>
		<td colspan="2"><?= 'Rp. '. number_format($total) ?></td>
	</tr>