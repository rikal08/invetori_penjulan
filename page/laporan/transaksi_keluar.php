<div class="box">
	<div class="box-header">
		<h3 class="box-title">Laporan Transaksi Keluar</h3>
	</div>
	<div class="box-header">
		<form action="page/laporan/print/transaksi_keluar.php" method="POST">
			<div class="row">
				<div class="col-lg-4">
					<div class="form-group has-feedback">
						<input type="date" class="form-control" name="tgl_awal">
						 <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="form-group has-feedback	">
						<input type="date" class="form-control" name="tgl_akhir">
						<span class="glyphicon glyphicon-calendar form-control-feedback"></span>
					</div>
				</div>
				<div class="col-lg-4">
					<button type="submit" class="btn btn-danger"><i class="fa fa-print"></i> Print</button>
				</div>
			</div>
		</form>
	</div>
	<div class="box-body">
		<table style="width: 100%;" class="table table-bordered table-striped table-hover">
			<thead>
				<tr>
					<th>No</th>
					<th>Tanggal</th>
					<th>Kode Transaksi</th>
					<th>Pelanggan</th>
					<th>Telepon</th>
					<th>Alamat</th>
					<th>Kode Barang</th>
					<th>Deskripsi Barang</th>
					<th>Jumlah</th>
					<th>Harga Beli</th>
					<th>Harga Jual</th>
					<th>Diskon</th>
					<th>Sub Total</th>
					<th>Keuntungan</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$no=1;
				$t_keluar = mysqli_query($con,"SELECT * FROM tb_transaksi_keluar JOIN tb_user ON tb_transaksi_keluar.id_user=tb_user.id_user WHERE status=2 ORDER BY id DESC");
				foreach ($t_keluar as $data) {


					?>
					<tr>
						<td><?= $no++ ?></td>
						<td><?= $data['tanggal'] ?></td>
						<td><?= $data['kode_tran_keluar'] ?></td>
						<td><?= $data['nama_user'] ?></td>
						<td><?= $data['telepon'] ?></td>
						<td><?= $data['alamat'] ?></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
				


					</tr>
					<?php
					$no1=1;
					$total=0;
					$item = mysqli_query($con,"SELECT * FROM tb_detail_tran_keluar JOIN tb_barang ON tb_detail_tran_keluar.id_barang=tb_barang.id_barang WHERE kode_tran_keluar='$data[kode_tran_keluar]'");
					foreach ($item as $data2) {
						$total=$total+($data2['harga_jual']*$data2['jumlah'])-($data2['diskon']);

						?>
						<tr>
						
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td style="text-align: right;"><?= $no1++; ?>.</td>
							<td><?= $data2['id_barang'] ?></td>
							<td><?= $data2['deskripsi'] ?></td>
							<td><?= $data2['jumlah'] ?></td>
							<td style="color: red"><?='Rp. '. number_format($data2['harga_beli']) ?></td>
							<td style="color: blue"><?='Rp. '. number_format($data2['harga_jual']) ?></td>
							<td><?='Rp. '. number_format($data2['diskon']) ?></td>
							<td><?='Rp. '. number_format(($data2['harga_jual']*$data2['jumlah'])-($data2['diskon'])) ?></td>
							<td style="color: green"><?='Rp. '. number_format((($data2['harga_jual']*$data2['jumlah'])-($data2['diskon']))-($data2['harga_beli']*$data2['jumlah'])) ?></td>


						</tr>
					<?php } ?>
					<!-- <tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<th colspan="6" style="text-align: right;">Total Harga</th>
						<td><?= 'Rp. '. number_format($total) ?></td>
					</tr> -->
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>