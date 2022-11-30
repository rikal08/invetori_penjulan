<div class="box">
	<div class="box-header">
		<h3 class="box-title">Transaksi Keluar</h3>
	</div>
	<div class="box-header">
		<!-- <a href="index.php?page=tambah-transaksi-keluar" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a> -->
	</div>
	<div class="box-body">
		<table id="example1" style="width: 100%;" class="table table-bordered table-striped table-hover">
			<thead>
				<tr>
					<th>No</th>
					<th>Tanggal</th>
					<th>Kode Transaksi</th>
					<th>Pelanggan</th>
					<th>Status</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
			<?php 
			$no=1;
			$t_keluar = mysqli_query($con,"SELECT * FROM tb_transaksi_keluar JOIN tb_user ON tb_transaksi_keluar.id_user=tb_user.id_user ORDER BY id DESC");
			foreach ($t_keluar as $data) {
				
			
			 ?>
			<tr>
				<td><?= $no++ ?></td>
				<td><?= $data['tanggal'] ?></td>
				<td><?= $data['kode_tran_keluar'] ?></td>
				<td><?= $data['nama_user'] ?></td>
				<td>
					<?php if ($data['status']==1): ?>
						<span class="badge bg-red">Sedang diproses</span>
					<?php else: ?>
						<span class="badge bg-green">Berhasil</span>
					<?php endif ?>
				</td>
				<td>
					<?php if ($data['status']==1): ?>
					<?php if ($data['hak_akses']==1): ?>
						
					<a href="index.php?page=konfirmasi&id=<?= $data['id'] ?>" class="btn btn-primary"><i class="fa fa-check"></i></a>
					<?php endif ?>
					<?php else: ?>
					<a href="index.php?page=detail-tk&id=<?= $data['id'] ?>" class="btn btn-success"><i class="fa fa-eye"></i></a>
					<?php endif ?>
				</td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
</div>
</div>