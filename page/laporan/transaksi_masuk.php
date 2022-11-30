<div class="box">
	<div class="box-header">
		<h3 class="box-title">Laporan Transaksi Masuk</h3>
	</div>
	<div class="box-header">
		<form action="page/laporan/print/transaksi_masuk.php" method="POST">
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
					<th>Supplier</th>
					<th>Kode Barang</th>
					<th>Deskripsi Barang</th>
					<th>Jumlah</th>
				</tr>
			</thead>
			<tbody>
			<?php 
			$no=1;
			$t_masuk = mysqli_query($con,"SELECT * FROM tb_transaksi_masuk ORDER BY id DESC");
			foreach ($t_masuk as $data) {
				
			
			 ?>
			<tr>
				<td><?= $no++ ?></td>
				<td><?= $data['tanggal'] ?></td>
				<td><?= $data['kode_tran_masuk'] ?></td>
				<td><?= $data['supplier'] ?></td>
				<td></td>
				<td></td>
				<td></td>
				
			
			</tr>
			<?php
			$no1=1;
			$item = mysqli_query($con,"SELECT * FROM tb_detail_tran_masuk JOIN tb_barang ON tb_detail_tran_masuk.id_barang=tb_barang.id_barang WHERE kode_tran_masuk='$data[kode_tran_masuk]'");
			foreach ($item as $data2) {
				
			?>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td style="text-align: right;"><?= $no1++; ?>.</td>
				<td><?= $data2['id_barang'] ?></td>
				<td><?= $data2['deskripsi'] ?></td>
				<td colspan="2"><?= $data2['jumlah'] ?></td>

				
			</tr>
			<?php } ?>
			<?php } ?>
			</tbody>
		</table>
	</div>
</div>