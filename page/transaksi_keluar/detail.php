<?php 
$t_keluar = mysqli_query($con,"SELECT * FROM tb_transaksi_keluar JOIN tb_user ON tb_transaksi_keluar.id_user=tb_user.id_user WHERE id='$_GET[id]'");
$data = mysqli_fetch_array($t_keluar);
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
							<td><?= $data['kode_tran_keluar'] ?></td>
						</tr>
						<tr>
							<td style="width: 150px">Waktu</td>
							<td style="width: 10px">:</td>
							<td><?= $data['tanggal'] ?></td>
						</tr>
						<tr>
							<td style="width: 150px">Pelanggan</td>
							<td style="width: 10px">:</td>
							<td><?= $data['nama_user'] ?></td>
						</tr>
						<tr>
							<td style="width: 150px">Telepon</td>
							<td style="width: 10px">:</td>
							<td><?= $data['telepon'] ?></td>
						</tr>
						<tr>
							<td style="width: 150px">Alamat</td>
							<td style="width: 10px">:</td>
							<td><?= $data['alamat'] ?></td>
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
							<td>Jumlah</td>
							<td>Harga</td>
							<td>Diskon</td>
							<td>Sub Total</td>
						</tr>
					</thead>

					<tbody>
						<?php 

						$view = mysqli_query($con,"SELECT * FROM tb_detail_tran_keluar JOIN tb_barang JOIN tb_jenis JOIN tb_brand ON tb_detail_tran_keluar.id_barang=tb_barang.id_barang AND tb_barang.id_jenis=tb_jenis.id_jenis AND tb_brand.id_brand=tb_barang.id_brand WHERE kode_tran_keluar='$data[kode_tran_keluar]'");

						$no=1;
						$total=0;
						foreach ($view as $data2) {
							$total=$total+($data2['harga_jual']*$data2['jumlah'])-($data2['diskon']);
							
							?>

							<tr>
								<td><?= $no++ ?></td>
								<td><?= $data2['deskripsi'] ?></td>
								<td><?= $data2['nama_jenis'] ?></td>
								<td><?= $data2['nama_brand'] ?></td>
								<td><?= $data2['jumlah'] ?></td>
								<td><?='Rp. '. number_format($data2['harga_jual']) ?></td>
								<td><?='Rp. '. number_format($data2['diskon']) ?></td>
								<td><?='Rp. '. number_format(($data2['harga_jual']*$data2['jumlah'])-($data2['diskon'])) ?></td>
								
							</tr>
						<?php } ?>
							<tr>
								<td colspan="7">Total Harga</td>
								<td><?= 'Rp. '. number_format($total) ?></td>
							</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="col-lg-12" style="text-align: center;">
			<div class="box-footer">
				<a href="index.php?page=transaksi-keluar" class="btn btn-danger"><i class="fa fa-arrow-left"></i> Kembali</a>	
				<a href="page/transaksi_keluar/print.php?id=<?= $_GET['id'] ?>" class="btn btn-primary"><i class="fa fa-print"></i> Cetak</a>	
				
			</div>
		</div>
	</div>
</div>