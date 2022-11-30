<div class="box">
  <div class="box-header">
    <h3 class="box-title">Data User</h3>
  </div>
  <div class="box-header">
    <a data-toggle="modal" data-target="#tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
    <?php include 'page/user/tambah.php'; ?>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="example1" style="width: 100%;" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Username</th>
          <th>Nama</th>
          <th>Hak Akses</th>
          <th>Password</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $no=1;
        $user = mysqli_query($con,"SELECT * FROM tb_user ORDER BY id_user ASC");
        foreach ($user as $data) {


         ?>
         <tr>
           <td><?= $no++ ?></td>
           <td><?= $data['username'] ?></td>
           <td><?= $data['nama_user'] ?></td>
           <td>
             <?php if ($data['hak_akses']==1): ?>
               Admin
               <?php elseif($data['hak_akses']==2): ?>
                Pimpinan
                <?php else: ?>
                  Pelanggan
                <?php endif ?>
              </td>
              <td>*****</td>
              <td>
                <a data-toggle="modal" data-target="#edit<?= $data['id_user'] ?>" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                <a href="index.php?page=hapus-user&id_user=<?= $data['id_user'] ?>" onclick="return confirm('Yakin untuk menhapus data?')" class="btn btn-danger"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
            <?php include 'page/user/edit.php'; ?>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>