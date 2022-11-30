
  <?php 
  error_reporting(0);
  $user = mysqli_query($con,"SELECT * FROM tb_user");
  $barang = mysqli_query($con,"SELECT * FROM tb_barang");
  $t_masuk = mysqli_query($con,"SELECT * FROM tb_transaksi_masuk");
  $t_keluar = mysqli_query($con,"SELECT * FROM tb_transaksi_keluar");

  $j_barang = mysqli_num_rows($barang);
  $j_user = mysqli_num_rows($user);
  $j_t_masuk = mysqli_num_rows($t_masuk);
  $j_t_keluar = mysqli_num_rows($t_keluar);

  ?>
  <?php if ($_SESSION['hak_akses']==1 or $_SESSION['hak_akses']==2): ?>
    
 
  <div class="row">
    <div class="col-lg-12">
      <div class="alert bg-green">
        <h4>Selamat Datang!</h4>
        <p>Sistem Informasi Penjualan Inventori Toko Jaya Putra</p>
      </div>
    </div>
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3><?= $j_barang ?></h3>

          <p>Jumlah Barang</p>
        </div>
        <div class="icon">
          <i class="fa fa-tv"></i>
        </div>

      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3><?= $j_t_masuk ?></h3>

          <p>Transaksi Masuk</p>
        </div>
        <div class="icon">
          <i class="fa fa-sign-in"></i>
        </div>

      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-red">
        <div class="inner">
          <h3><?= $j_t_keluar ?></h3>

          <p>Transaksi Keluar</p>
        </div>
        <div class="icon">
          <i class="fa fa-sign-out"></i>
        </div>

      </div>
    </div>
    <!-- ./col --> 
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3><?= $j_user ?></h3>

          <p>Pengguna</p>
        </div>
        <div class="icon">
          <i class="fa fa-user"></i>
        </div>

      </div>
    </div>
    <!-- ./col -->

    <div class="col-lg-6">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Top 5 Best Seller</h3>
        </div>
        <div class="box-body">
          <table id="example3" style="width: 100%" class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Deskripsi Barang</th>
                <th>Brand</th>
                <th>Jumlah Terjual</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              $no=1;
              $best = mysqli_query($con,"SELECT sum(jumlah) as terjual,deskripsi,nama_brand FROM tb_detail_tran_keluar JOIN tb_barang ON tb_detail_tran_keluar.id_barang=tb_barang.id_barang JOIN tb_brand ON tb_barang.id_brand=tb_brand.id_brand GROUP BY tb_detail_tran_keluar.id_barang ORDER BY sum(jumlah) DESC LIMIT 5");
              foreach ($best as $key) {

                ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $key['deskripsi'] ?></td>
                  <td><?= $key['nama_brand'] ?></td>
                  <td><?= $key['terjual'] ?></td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>


    <div class="col-lg-6">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Top 10 Stok Urgent</h3>
        </div>
        <div class="box-body">
          <table id="example1" style="width: 100%" class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Deskripsi Barang</th>
                <th>Stok</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              $no=1;
              $best = mysqli_query($con,"SELECT * FROM tb_barang WHERE stok < 5 LIMIT 10");
              foreach ($best as $key) {

                ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $key['deskripsi'] ?></td>
                  <td style="color:red"><?= $key['stok'] ?></td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
    

  <?php else: ?>
    <div class="row">
      <div class="col-lg-12" style="margin-bottom: 20px">
        <img src="banner.png" width="100%" height="400px">
      </div>

      <div class="col-lg-12">
        <div class="box" style="padding: 10px;background-color: #9eadef;box-shadow: -10px 3px 107px -40px rgba(158,173,239,0.75);">
          <div class="row">
            <div class="col-lg-6 col-xs-6">
                <div class="form-group">
                <select style="border-radius: 10px" class="form-control">
                  <option>Pilih Ketegori</option>
                  <?php 
                    $jenis = mysqli_query($con,"SELECT * FROM tb_jenis");
                    foreach ($jenis as $d_jenis) {
                      
                    
                  ?>
                  <option value="<?= $d_jenis['id_jenis'] ?>"><?= $d_jenis['nama_jenis'] ?></option>
                  <?php } ?>
                </select>
              </div>
              </div>
            </div>
          </div>
      </div>

      <?php 
      $barang = mysqli_query($con,"SELECT * FROM tb_barang JOIN tb_brand JOIN tb_jenis ON tb_barang.id_brand=tb_brand.id_brand AND tb_barang.id_jenis=tb_jenis.id_jenis");
      foreach ($barang as $data) {

        ?>
        <a href="index.php?page=detail&id=<?= $data['id_barang'] ?>">
          <div class="col-lg-3">
            <div class="box">
              <div class="box-header" style="height: 100px">
                <h3 class="box-title" style="font-weight: bold"><?= $data['deskripsi'] ?></h3>
              </div>
              <div class="box-header">
                <p style="background-color: #9eadef;width: 50%;text-align: center;color:#fff"><?= $data['nama_jenis'] ?></p>
              </div>
              <div class="box-body">
                <div style="text-align: center;height: 200px">
                  <img width="90%" height="100%" align="center" src="foto_barang/<?= $data['foto'] ?>">
                </div>
              </div>
              <div class="box-footer" style="background-color: #dd4b39">
                <h6 style="color: #fff;font-weight: bold"><s>Rp. <?= number_format($data['harga_jual']) ?></s></h6>
                <h4 style="color: #fff;font-weight: bold">Rp. <?= number_format($data['harga_jual']-$data['diskon']) ?></h4>
              </div>
            </div>
          </div>
        </a>
      <?php } ?>
    </div>

  <?php endif ?>
      