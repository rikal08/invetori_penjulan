 <div class="modal fade" id="tambah">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Tambah Master Data Jenis</h4>
        </div>
        <div class="modal-body">
          <form action="page/jenis/control_tambah.php" method="POST">
              <div class="form-group">
                  <label>Nama Jenis</label>
                  <input type="" class="form-control" required="" name="nama_jenis" placeholder="Jenis">
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