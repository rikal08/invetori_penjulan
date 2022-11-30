<?php 

$user = mysqli_query($con,"SELECT * FROM tb_user WHERE id_user='$_SESSION[id_user]'");
$data = mysqli_fetch_array($user);

?>
<div class="row">
	<div class="col-lg-4">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Ganti Password</h3>
			</div>
			<div class="box-body">
				<form action="control_ganti_password.php" method="POST">
					<div class="form-group">
						<label>Username</label>
						<input type="" hidden="" name="id" value="<?= $data['id_user'] ?>">
						<input readonly="" type="" class="form-control" required="" value="<?= $data['username'] ?>" name="username" placeholder="Username">
					</div>
					<div class="form-group">
						<label>Nama</label>
						<input  type="" class="form-control" required="" value="<?= $data['nama_user'] ?>" name="nama" placeholder="Nama">
					</div> 
					<div class="form-group has-feedback">
						<label>Telepon</label>
						<input  type="" value="<?= $data['telepon'] ?>" class="form-control" name="telepon" placeholder="Telepon">

					</div>
					<div class="form-group has-feedback">
						<label>Alamat</label>
						<input  type="" value="<?= $data['alamat'] ?>" class="form-control" name="alamat" placeholder="Alamat">
					</div>
					<div class="form-group">
						<label>Password Baru</label>
						<input type="" name="id_user" value="<?= $_SESSION['id_user'] ?>" hidden>
						<input type="password" name="new_password" class="form-control" placeholder="Masukan Passwor Baru">
					</div>
					<div class="form-group">
						<label>Ulangi Password</label>
						<input type="password" name="new_password_2" class="form-control" placeholder="Ulangi Password">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Update</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>