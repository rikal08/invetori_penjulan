<?php 

$barang = mysqli_query($con,"SELECT * FROM tb_barang JOIN tb_brand JOIN tb_jenis ON tb_barang.id_brand=tb_brand.id_brand AND tb_barang.id_jenis=tb_jenis.id_jenis WHERE id_barang='$_GET[id]'");
$data = mysqli_fetch_array($barang);

?>
<div class="box">
	<div class="row">
		<div class="col-lg-6">
			<img width="90%" height="100%" align="center" src="foto_barang/<?= $data['foto'] ?>">
			<div class="box-footer">
				<a href="index.php" class="btn btn-danger">Kembali</a>
			</div>
		</div>
		<div class="col-lg-6">
			<div style="margin-top: 50px">
				<div class="box-header">
					<h3 class="box-title" style="font-weight: bold"><?= $data['deskripsi'] ?></h3>
				</div>

				<div class="box-footer" style="background-color: #dd4b39">
					<h6 style="color: #fff;font-weight: bold"><s>Rp. <?= number_format($data['harga_jual']) ?></s></h6>
					<h4 style="color: #fff;font-weight: bold">Rp. <?= number_format($data['harga_jual']-$data['diskon']) ?></h4>
				</div>

				<div class="box-header">
					<h3 class="box-title">Keterangan: </h3>
					<p><?= $data['ket'] ?></p>
				</div>

				<div class="box-footer">
					<?php if (isset($_SESSION['id_user'])): ?>
						
					<a href="index.php?page=pemesanan&id=<?= $data['id_barang'] ?>" class="btn btn-success">Pesan Sekarang</a>
					<?php else: ?>
					<a href="index.php?page=login" onclick="return confirm('Harus login terlebih dahulu')" class="btn btn-success">Pesan Sekarang</a>
					<?php endif ?>
				</div>
			</div>
		</div>
	</div>
</div>