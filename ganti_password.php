<div class="row">
	<div class="col-lg-4">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Ganti Password</h3>
			</div>
			<div class="box-body">
				<form action="control_ganti_password.php" method="POST">
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
						<button type="submit" class="btn btn-primary">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>