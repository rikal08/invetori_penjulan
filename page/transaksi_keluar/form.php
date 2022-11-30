<div class="row">
	<div class="col-lg-12">
		<div id="alert_berhasil">
			
		</div>
	</div>
	<div class="col-lg-4">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Cari Barang</h3>
			</div>
			<div class="box-body">
				<div class="form-group">
					<label>Cari Barang</label>
					<select class="form-control select2" id="id_barang2" style="width: 100%" name="id_barang">
						<option selected="" value="0">Pilih Barang</option>
						<?php 
							$barang = mysqli_query($con,"SELECT * FROM tb_barang");
							foreach ($barang as $data) {
						
						 ?>
						 <option value="<?= $data['id_barang'] ?>"><?= $data['deskripsi'] ?></option>
						<?php } ?>
					</select>
				</div>
				<div class="form-group">
					<label>Jumlah Stok</label>
					<input type="" readonly="" class="form-control" id="stok" name="">
				</div>
				<div class="form-group">
					<label>Harga</label>
					<input type="" readonly="" class="form-control" id="harga" name="">
				</div>
				<div class="form-group">
					<label>Jumlah Masuk</label>
					<input type="" class="form-control" id="jumlah_keluar" name="">
				</div>
				<div class="form-group">
					<button class="btn btn-primary" id="tambah_item_keluar">Tambah</button>
				</div>
			</div>
		</div>
	</div>

	<div class="col-lg-8">
		<div class="box">
			<div style="background-color: #fb5f5f;color:#fff" class="box-header">
			<h3 class="box-title">Form Proses Transaksi Keluar</h3>
		</div>
		<div class="box-body">
			<table style="width: 100%" class="table table-bordered table-striped">
				<thead>
					<tr>
						<td>No</td>
						<td>Deskripsi Barang</td>
						<td>Jumlah Keluar</td>
						<td>Harga</td>
						<td>Diskon</td>
						<td>Sub Total</td>
						<td>Aksi</td>
					</tr>
				</thead>
				<tbody id="view_barang_keluar">
					
				</tbody>
					
				
			</table>
		</div>
		<div class="box-footer">
			<div class="form-group">
				<label>Waktu Transaksi</label>
				<input type="datetime" readonly="" class="form-control" name="" value="<?= date('Y-m-d H:i:s') ?>">
			</div>
			<div class="form-group">
				<label>Nama Pelanggan</label>
				<input type="" class="form-control" id="pelanggan" placeholder="Pelanggan">
			</div>
			<div class="form-group">
				<label>Telepon</label>
				<input type="" class="form-control" id="telepon" placeholder="Telepon">
			</div>
			<button style="float:right;" id="simpan_transaksi_keluar" class="btn btn-success">Selesai</button>
		</div>
		</div>
	</div>
</div>