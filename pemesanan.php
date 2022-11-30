<?php 

$barang = mysqli_query($con,"SELECT * FROM tb_barang WHERE id_barang='$_GET[id]'");
$data = mysqli_fetch_array($barang);

$user = mysqli_query($con,"SELECT * FROM tb_user WHERE id_user='$_SESSION[id_user]'");
$data2 = mysqli_fetch_array($user);

?>
<div class="row">
	<div class="col-lg-6">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Konfirmasi Pemesanan</h3>
			</div>
		<div class="box-body">
			<form action="control_pemesanan.php" method="POST">
				<div class="form-group">
					<label>Nama Barang</label>
					<input hidden="" type="" value="<?= $data['id_barang'] ?>" name="id_barang">
					<input hidden="" type="" value="<?= $data2['id_user'] ?>" name="id_user">
					<input type=""  readonly="" class="form-control" name="" value="<?= $data['deskripsi'] ?>">
				</div>
				<div class="form-group">
					<label>Total Bayar</label>
					<input type=""  readonly="" class="form-control" name="" value="Rp. <?= number_format($data['harga_jual']-$data['diskon']) ?>">
				</div>
				<div class="form-group">
					<label>Nama Pemesan</label>
					<input type=""  readonly="" class="form-control" name="" value="<?= $data2['nama_user'] ?>">
				</div>
				<div class="form-group">
					<label>Telepon</label>
					<input type="" class="form-control" name="" value="<?= $data2['telepon'] ?>">
				</div>
				<div class="form-group">
					<label>Alamat</label>
					<input type="" class="form-control" name="" value="<?= $data2['alamat'] ?>">
				</div>

				<div class="form-group">
					<button type="submit" onclick="return confirm('Klik oke')" class="btn btn-success">Konfirmasi</button>
				</div>
			</form>			
			</div>
		</div>
	</div>
</div>