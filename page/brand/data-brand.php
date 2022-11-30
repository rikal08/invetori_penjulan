<div class="box">
	<div class="box-header">
		<h3 class="box-title">Data Brand</h3>
	</div>
	<div class="box-header">
		<a data-toggle="modal" data-target="#tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
		<?php include 'page/brand/tambah.php'; ?>
	</div>
	<div class="box-body">
		<table id="example1" style="width: 100%;" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Brand</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
			<?php 
			$no=1;
			$brand = mysqli_query($con,"SELECT * FROM tb_brand ORDER BY id_brand DESC");
			foreach ($brand as $data) {
				
			
			 ?>
			<tr>
				<td><?= $no++ ?></td>
				<td><?= $data['nama_brand'] ?></td>
				<td>
					<a onclick="return confirm('Yakin untuk menghapus data?')" href="index.php?page=hapus-brand&id_brand=<?= $data['id_brand'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
				</td>
			</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>
</div>