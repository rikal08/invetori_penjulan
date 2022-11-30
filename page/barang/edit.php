<?php 

$barang = mysqli_query($con,"SELECT * FROM tb_barang WHERE id_barang='$_GET[id]'");
$data = mysqli_fetch_array($barang);

?>
<div class="row">
  <div class="col-lg-12">
    <div class="box">
      <div class="row">
        <div class="col-lg-6">
          <div class="box-body">
            <img width="100%" src="foto_barang/<?= $data['foto'] ?>">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="box-header">
            <h3 class="box-title">Edit Barang</h3>
          </div>
          <div class="box-body">
            <form action="page/barang/control_update.php" method="POST">
              <div class="form-group">
                <label>ID Barang</label>
                <input type="" readonly="" value="<?= $data['id_barang'] ?>" class="form-control" required="" name="id_barang" placeholder="ID Barang">
              </div>
              <div class="form-group">
                <label>Jenis</label>
                <select class="form-control" name="id_jenis">
                 <?php 
                 $jenis = mysqli_query($con,"SELECT * FROM tb_jenis WHERE id_jenis='$data[id_jenis]'");
                 foreach ($jenis as $data1) {
                  ?>
                  <option value="<?= $data['id_jenis'] ?>"><?= $data1['nama_jenis'] ?></option>
                <?php } ?>
              </select>
            </div>
            <div class="form-group">
              <label>Brand</label>
              <select class="form-control" name="id_brand">
               <?php 
               $brand = mysqli_query($con,"SELECT * FROM tb_brand WHERE id_brand='$data[id_brand]'");
               foreach ($brand as $data2) {
                ?>
                <option value="<?= $data['id_brand'] ?>"><?= $data2['nama_brand'] ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label>Deskripsi</label>
            <textarea class="form-control" name="deskripsi" placeholder="Deskripsi"><?= $data['deskripsi'] ?></textarea>
          </div>
          <div class="form-group">
            <label>Harga Beli</label>
            <input type=""  class="form-control" value="<?='Rp. '. number_format($data['harga_beli']) ?>" name="harga_beli" placeholder="Ex: 1000000">
          </div> 
          <div class="form-group">
            <label>Harga Jual</label>
            <input type=""  class="form-control" value="<?='Rp. '. number_format($data['harga_jual']) ?>" name="harga_jual" placeholder="Ex: 1000000">
          </div> 
          <div class="form-group">
            <label>Diskon</label>
            <input type=""  class="form-control" value="<?='Rp. '. number_format($data['diskon']) ?>" name="diskon" placeholder="Ex: 1000000">
          </div> 
          <div class="form-group">
            <label>Stok</label>
            <input type="" class="form-control" value="<?= $data['stok'] ?>" name="stok" placeholder="Ex: 1000000">
          </div>
          <div class="form-group">
            <label>Keterangan</label>
            <textarea class="form-control" name="ket" style="height: 200px" placeholder="Keterangan"><?= $data['ket'] ?></textarea>
          </div>
          <div class="form-group">
            <a class="btn btn-danger" href="index.php?page=data-barang">Batal</a>
            <button type="submit" class="btn btn-primary">Simpan Data</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</div>