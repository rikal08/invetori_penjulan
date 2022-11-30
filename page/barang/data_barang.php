<div class="box">
	<div class="box-header">
		<h3 class="box-title">Data Barang</h3>
	</div>
	<div class="box-header">
		<a data-toggle="modal" data-target="#tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
		<?php include 'page/barang/tambah.php'; ?>
	</div>
	<div class="box-body">
		<table id="example1" style="width: 100%;" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>No</th>
					<th>Foto</th>
					<th>ID Barang</th>
					<th>Deskripsi</th>
					<th>Jenis</th>
					<th>Brand</th>
					<th>Harga Beli</th>
					<th>Harga Jual</th>
					<th>Diskon</th>
					<th>Stok</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
			<?php 
			$no=1;
			$jenis = mysqli_query($con,"SELECT * FROM tb_barang JOIN tb_jenis JOIN tb_brand ON tb_barang.id_jenis=tb_jenis.id_jenis AND tb_barang.id_brand=tb_brand.id_brand");
			foreach ($jenis as $data) {
				
			
			 ?>
			<tr>
				<td><?= $no++ ?></td>
				<td><img width="50px" src="foto_barang/<?= $data['foto'] ?>"></td>
				<td><?= $data['id_barang'] ?></td>
				<td><?= $data['deskripsi'] ?></td>
				<td><?= $data['nama_jenis'] ?></td>
				<td><?= $data['nama_brand'] ?></td>
				<td><?= 'Rp. '. number_format($data['harga_beli']) ?></td>
				<td><?= 'Rp. '. number_format($data['harga_jual']) ?></td>
				<td><?= 'Rp. '. number_format($data['diskon']) ?></td>
				<td><?= $data['stok'] ?></td>
				<td>
					<a href="index.php?page=edit-barang&id=<?= $data['id_barang'] ?>"class="btn btn-primary" ><i class="fa fa-pencil"></i></a>
					<a onclick="return confirm('Yakin untuk menghapus data?')" href="index.php?page=hapus-barang&id_barang=<?= $data['id_barang'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
				</td>
			</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>
</div>