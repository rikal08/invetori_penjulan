<div class="login-box">
  <div class="login-logo">
   
    <a href=""><b>Toko Putra Jaya</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Silahkan daftar</p>

    <form action="daftar_control.php" method="post">
      <div class="form-group has-feedback">
        <input type="" class="form-control" name="nama" placeholder="Nama">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="" class="form-control" name="username" placeholder="Username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div> 
      <div class="form-group has-feedback">
        <input type="" onkeypress="return hanyaAngka(event)" class="form-control" name="telepon" placeholder="Telepon">
        <span class="glyphicon glyphicon-phone form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="" class="form-control" name="alamat" placeholder="Alamat">
        <span class="glyphicon glyphicon-book form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Daftar Akun</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
