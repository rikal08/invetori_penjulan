<div class="box">
	<div class="box-header">
		<h3 class="box-title">Data Jenis</h3>
	</div>
	<div class="box-header">
		<a data-toggle="modal" data-target="#tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
		<?php include 'page/jenis/tambah.php'; ?>
	</div>
	<div class="box-body">
		<table id="example1" style="width: 100%;" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>No</th>
					<th>Jenis</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
			<?php 
			$no=1;
			$jenis = mysqli_query($con,"SELECT * FROM tb_jenis ORDER BY id_jenis DESC");
			foreach ($jenis as $data) {
				
			
			 ?>
			<tr>
				<td><?= $no++ ?></td>
				<td><?= $data['nama_jenis'] ?></td>
				<td>
					<a onclick="return confirm('Yakin untuk menghapus data?')" href="index.php?page=hapus-jenis&id_jenis=<?= $data['id_jenis'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
				</td>
			</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>
</div>