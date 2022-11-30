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
					<select class="form-control select2" id="id_barang" style="width: 100%" name="id_barang">
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
					<input type="" readonly="" class="form-control" id="view_stok" name="">
				</div>
				<div class="form-group">
					<label>Jumlah Masuk</label>
					<input type="" onkeypress="return hanyaAngka(event)" class="form-control" id="jumlah_masuk" name="">
				</div>
				<div class="form-group">
					<a href="index.php?page=transaksi-masuk" class="btn btn-danger">Kembali</a>
					<button class="btn btn-primary" id="btn_tambah">Tambah</button>
				</div>
			</div>
		</div>
	</div>

	<div class="col-lg-8">
		<div  class="box">
			<div style="background-color: #00abff;color: #fff" class="box-header">
			<h3 class="box-title">Form Proses Transaksi Masuk</h3>
		</div>
		<div class="box-body">
			<table style="width: 100%" class="table table-bordered table-striped">
				<thead>
					<tr>
						<td>No</td>
						<td>Deskripsi Barang</td>
						<td>Jumlah Masuk</td>
						<td>Aksi</td>
					</tr>
				</thead>
				<tbody id="view_barang_masuk">
					
				</tbody>
					
				
			</table>
		</div>
		<div class="box-footer">
			<div class="form-group">
				<label>Waktu Transaksi</label>
				<input type="datetime" readonly="" class="form-control" name="" value="<?= date('Y-m-d H:i:s') ?>">
			</div>
			<div class="form-group">
				<label>Supplier</label>
				<input type="" class="form-control" id="sup" placeholder="Nama Supplier">
			</div>
			<button style="float:right;" id="simpan_transaksi_masuk" class="btn btn-success">Selesai</button>
		</div>
		</div>
	</div>
</div>