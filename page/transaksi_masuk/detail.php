<?php 
$t_masuk = mysqli_query($con,"SELECT * FROM tb_transaksi_masuk WHERE id='$_GET[id]'");
$data = mysqli_fetch_array($t_masuk);
?>
<div class="box">
	<div class="row">
		<div class="col-lg-12">
			<div class="row">
				<div class="col-lg-6">
					<div class="box-header">
						<h3 class="box-title">Detail Transaksi</h3>
					</div>
				</div>
			</div>
		</div>
		
		<div class="col-lg-6">
			<div class="box-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<td style="width: 150px">Kode Transaksi</td>
							<td style="width: 10px">:</td>
							<td><?= $data['kode_tran_masuk'] ?></td>
						</tr>
						<tr>
							<td style="width: 150px">Waktu</td>
							<td style="width: 10px">:</td>
							<td><?= $data['tanggal'] ?></td>
						</tr>
						<tr>
							<td style="width: 150px">Supplier</td>
							<td style="width: 10px">:</td>
							<td><?= $data['supplier'] ?></td>
						</tr>
					</thead>
				</table>
			</div>
		</div>

		<div class="col-lg-12">
			<div class="box-body">
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<td>No</td>
							<td>Deskripsi Barang</td>
							<td>Jenis</td>
							<td>Brand</td>
							<td>Jumlah Masuk</td>
						</tr>
					</thead>

					<tbody>
						<?php 

						$view = mysqli_query($con,"SELECT * FROM tb_detail_tran_masuk JOIN tb_barang JOIN tb_jenis JOIN tb_brand ON tb_detail_tran_masuk.id_barang=tb_barang.id_barang AND tb_barang.id_jenis=tb_jenis.id_jenis AND tb_brand.id_brand=tb_barang.id_brand WHERE kode_tran_masuk='$data[kode_tran_masuk]'");

						$no=1;
						$total=0;
						foreach ($view as $data2) {
							$total=$total+$data2['jumlah'];
							
							?>

							<tr>
								<td><?= $no++ ?></td>
								<td><?= $data2['deskripsi'] ?></td>
								<td><?= $data2['nama_jenis'] ?></td>
								<td><?= $data2['nama_brand'] ?></td>
								<td><?= $data2['jumlah'] ?></td>
								
							</tr>
						<?php } ?>
							<tr>
								<td colspan="4">Total Barang</td>
								<td><?= $total ?></td>
							</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="col-lg-12" style="text-align: center;">
			<div class="box-footer">
				<a href="index.php?page=transaksi-masuk" class="btn btn-danger"><i class="fa fa-arrow-left"></i> Kembali</a>	
				<a href="page/transaksi_masuk/print.php?id=<?= $_GET['id'] ?>" class="btn btn-primary"><i class="fa fa-print"></i> Cetak</a>	
				
			</div>
		</div>
	</div>
</div>