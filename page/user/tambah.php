 <div class="modal fade" id="tambah">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Tambah Data User</h4>
        </div>
        <div class="modal-body">
          <form action="page/user/control_tambah.php" method="POST">
            <div class="form-group">
              <label>Username</label>
              <input type="" class="form-control" required="" name="username" placeholder="Username">
            </div>
            <div class="form-group">
              <label>Nama</label>
              <input type="" class="form-control" required="" name="nama" placeholder="Nama">
            </div>
            <div class="form-group has-feedback">
              <label>Telepon</label>
              <input  onkeypress="return hanyaAngka(event)" class="form-control" name="telepon" placeholder="Telepon">
             
            </div>
            <div class="form-group has-feedback">
              <label>Alamat</label>
              <input type="" class="form-control" name="alamat" placeholder="Alamat">
            </div>
            <div class="form-group">
              <label>Hak Akses</label>
              <select class="form-control" name="hak_akses">
                <option value="1">Admin</option>
                <option value="2">Pimpinan</option>
                <option value="3">Pelanggan</option>
              </select>
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" name="password" required="" class="form-control" placeholder="Password">
            </div>

            <div class="form-group">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-primary">Simpan Data</button>
            </div>
          </form>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
        <!-- /.modal -->