<div class="box">
	<div class="box-header">
		<h3 class="box-title">Laporan Stok</h3>
	</div>
	<div class="box-header">
		<a href="page/laporan/print/stok.php" class="btn btn-danger"><i class="fa fa-print"></i> cetak Laporan</a>
	</div>
	<div class="box-body">
		<table id="example1" style="width: 100%;" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>No</th>
					<th>ID Barang</th>
					<th>Deskripsi</th>
					<th>Jenis</th>
					<th>Brand</th>
					<th>Harga Beli</th>
					<th>Harga Jual</th>
					<th>Diskon</th>
					<th>Stok</th>
					
				</tr>
			</thead>
			<tbody>
			<?php 
			$no=1;
			$barang = mysqli_query($con,"SELECT * FROM tb_barang JOIN tb_jenis JOIN tb_brand ON tb_barang.id_jenis=tb_jenis.id_jenis AND tb_barang.id_brand=tb_brand.id_brand");
			foreach ($barang as $data) {
				
			
			 ?>
			<tr>
				<td><?= $no++ ?></td>
				<td><?= $data['id_barang'] ?></td>
				<td><?= $data['deskripsi'] ?></td>
				<td><?= $data['nama_jenis'] ?></td>
				<td><?= $data['nama_brand'] ?></td>
				<td><?= 'Rp. '. number_format($data['harga_beli']) ?></td>
				<td><?= 'Rp. '. number_format($data['harga_jual']) ?></td>
				<td><?= 'Rp. '. number_format($data['diskon']) ?></td>
				<td><?= $data['stok'] ?></td>
			</tr>
			
			<?php } ?>
			</tbody>
		</table>
	</div>
</div>