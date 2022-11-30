 <div class="modal fade" id="tambah">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Tambah Data Barang</h4>
        </div>
        <div class="modal-body">
          <form action="page/barang/control_tambah.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label>ID Barang</label>
              <input type="" class="form-control" required="" name="id_barang" placeholder="ID Barang">
            </div>
            <div class="form-group">
              <label>Jenis</label>
             <select class="form-control" name="id_jenis">
               <?php 
               $jenis = mysqli_query($con,"SELECT * FROM tb_jenis");
               foreach ($jenis as $data) {
                ?>
                <option value="<?= $data['id_jenis'] ?>"><?= $data['nama_jenis'] ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
              <label>Brand</label>
             <select class="form-control" name="id_brand">
               <?php 
               $brand = mysqli_query($con,"SELECT * FROM tb_brand");
               foreach ($brand as $data) {
                ?>
                <option value="<?= $data['id_brand'] ?>"><?= $data['nama_brand'] ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label>Deskripsi</label>
            <textarea class="form-control" name="deskripsi" placeholder="Deskripsi"></textarea>
          </div>
          <div class="form-group">
            <label>Harga Beli</label>
            <input type="text" class="form-control" id="rupiah"  name="harga_beli" placeholder="Ex: 1000000">
          </div> 
          <div class="form-group">
            <label>Harga Jual</label>
            <input type="text" class="form-control" id="rupiah2" name="harga_jual" placeholder="Ex: 1000000">
          </div> 
          <div class="form-group">
            <label>Diskon</label>
            <input type="" class="form-control" id="diskon" name="diskon" placeholder="Ex: 1000000">
          </div> 
          <div class="form-group">
            <label>Stok</label>
            <input type="" onkeypress="return hanyaAngka(event)" class="form-control" name="stok" placeholder="Ex: 1000000">
          </div>
          <div class="form-group">
            <label>Foto Barang</label>
            <input type="file" name="foto" class="form-control">
          </div>

          <div class="form-group">
            <label>Keterangan</label>
            <textarea class="form-control" name="ket" placeholder="Keterangan"></textarea>
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
