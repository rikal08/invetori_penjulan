<div class="box">
	<div class="box-header">
		<h3 class="box-title">Transaksi Masuk</h3>
	</div>
	<div class="box-header">
		<a href="index.php?page=tambah-transaksi-masuk" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
	</div>
	<div class="box-body">
		<table id="example1" style="width: 100%;" class="table table-bordered table-striped table-hover">
			<thead>
				<tr>
					<th>No</th>
					<th>Tanggal</th>
					<th>Kode Transaksi</th>
					<th>Supplier</th>
					<th>Aksi</th>
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
				<td>
					<a href="index.php?page=detail-tm&id=<?= $data['id'] ?>" class="btn btn-success"><i class="fa fa-eye"></i></a>
				</td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
</div>
</div>