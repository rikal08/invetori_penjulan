 <div class="modal fade" id="edit<?= $data['id_user'] ?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Tambah Data User</h4>
        </div>
        <div class="modal-body">
          <form action="page/user/control_update.php" method="POST">
              <div class="form-group">
                  <label>Username</label>
                  <input type="" hidden="" name="id" value="<?= $data['id_user'] ?>">
                  <input type="" class="form-control" required="" value="<?= $data['username'] ?>" name="username" placeholder="Username">
              </div>
              <div class="form-group">
                  <label>Nama</label>
                  <input type="" class="form-control" required="" value="<?= $data['nama_user'] ?>" name="nama" placeholder="Nama">
              </div> 
               <div class="form-group has-feedback">
              <label>Telepon</label>
              <input type="" value="<?= $data['telepon'] ?>" class="form-control" name="telepon" placeholder="Telepon">
             
            </div>
            <div class="form-group has-feedback">
              <label>Alamat</label>
              <input type="" value="<?= $data['alamat'] ?>" class="form-control" name="alamat" placeholder="Alamat">
            </div>
              <div class="form-group">
                  <label>Hak Akses</label>
                  <select class="form-control" name="hak_akses">
                      <option value="<?= $data['hak_akses'] ?>">
                        <?php if ($data['hak_akses']==1): ?>
                          Admin
                        <?php elseif($data['hak_akses']==2): ?>
                          Pimpinan
                        <?php else: ?>
                          Pelanggan
                        <?php endif ?>
                      </option>
                      <option value="1">Admin</option>
                      <option value="2">Pimpinan</option>
                  </select>
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" value="<?= $data['password'] ?>" name="password" required="" class="form-control" placeholder="Password">
              </div>

              <div class="form-group">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Update</button>
              </div>
          </form>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
        <!-- /.modal -->