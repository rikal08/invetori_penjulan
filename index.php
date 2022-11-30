<?php 
session_start();
include 'koneksi.php';
date_default_timezone_set("Asia/Jakarta");
if (isset($_SESSION['id_user'])) {
    $id = $_SESSION['id_user'];
}else{

}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Putra Jaya Elektronik</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <!-- DataTables -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <style>
    .example-modal .modal {
      position: relative;
      top: auto;
      bottom: auto;
      right: auto;
      left: auto;
      display: block;
      z-index: 1;
    }

    .example-modal .modal {
      background: transparent !important;
    }
  </style>
    <!-- Select2 -->
  <link rel="stylesheet" href="bower_components/select2/dist/css/select2.min.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>PJ</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>PUTRA</b> JAYA</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/avatar.png" class="user-image" alt="User Image">
              <span class="hidden-xs">
                <?php if (isset($_SESSION['id_user'])): ?>
                  <?= $_SESSION['nama_user']; ?>
                <?php else: ?>
                  Silahkan Login
                <?php endif ?>
              </span>
            </a>
            <ul class="dropdown-menu">
              <!-- Menu Body -->
              <?php if (isset($_SESSION['id_user'])): ?>
              <li class="user-body">
                <a href="index.php?page=ganti-password"><i class="fa fa-key"></i> Ganti Password</a>
                <hr>
                <a href="keluar.php"><i class="fa fa-sign-out"></i>Keluar</a>
              </li>
              <?php else: ?>
                <li class="user-body">
                <a href="index.php?page=login"><i class="fa fa-sign-out"></i>Login</a>
              </li>
              <?php endif ?>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
         
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li><a href="index.php"><i class="fa fa-home"></i> <span>Beranda</span></a></li>
        <?php include 'menu.php'; ?>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content">
      <?php include 'page_control.php'; ?>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.18
    </div>
    <strong>Copyright &copy; 2022 <a href="">PT. Putra Jaya</a>.</strong> All rights
    reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- ChartJS -->
<script src="bower_components/chart.js/Chart.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- Select2 -->
<script src="bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable({
      'scrollX' : true
    })
    $('#example3').DataTable({
      'scrollX' : true
    })
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    });
  })
</script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
  })
</script>

<script type="text/javascript">
  $(document).ready(function () {
    loadView()

    $('#id_barang').change(function () {
      var id_barang = $('#id_barang').val();

      $.ajax({
        url: 'page/transaksi_masuk/view_stok.php',
        type: 'GET',
        data: {id_barang:id_barang},
        success: function(hasil) {
          $('#view_stok').val(hasil);
        }
      })
    });

    $('#btn_tambah').click(function () {
      var id_barang = $('#id_barang').val();
      var jumlah_masuk = $('#jumlah_masuk').val();

      $.ajax({
        url: 'page/transaksi_masuk/input_item.php',
        type: 'post',
        data: {id_barang:id_barang,jumlah_masuk:jumlah_masuk},
        success: function () {
          loadView()
        }
      });
    });

    $('#simpan_transaksi_masuk').click(function () {
      var sup = $('#sup').val();
      var id_user = <?= $_SESSION['id_user'] ?>;
      $.ajax({
        url: 'page/transaksi_masuk/simpan_transaksi.php',
        type: 'POST',
        data:{sup:sup,id_user:id_user},
        success: function () {
          alert('Transaksi Berhasil!');
          window.location.reload()
        }
      })
    });

    
  });


  function loadView() {
    $.ajax({
      url:'page/transaksi_masuk/view_barang_masuk.php',
      type:'GET',
      success: function (hasil) {
        $('#view_barang_masuk').html(hasil);
      }
    })
  }

  function hapusItemMasuk($id) {
    var id_detail = $id;

    $.ajax({
      url: 'page/transaksi_masuk/hapus_item.php',
      type: 'GET',
      data: {id_detail:id_detail},
      success: function () {
        loadView();
      }
    })
  }
</script>
<!-- transaksi keluar -->
<script type="text/javascript">
  loadView2()
  $('#id_barang2').change(function () {
      var id_barang = $('#id_barang2').val();

      $.ajax({
        url: 'page/transaksi_keluar/view.php',
        type: 'GET',
        data: {id_barang:id_barang},
        success: function(data) {
          var response = JSON.parse(data);
          $('#stok').val(response.stok)
          $('#harga').val(response.harga)
        }
      })
    });

  $('#tambah_item_keluar').click(function(){
    var id_barang = $('#id_barang2').val();
    var jumlah_keluar = $('#jumlah_keluar').val();
     $.ajax({
        url: 'page/transaksi_keluar/input_item.php',
        type: 'post',
        data: {id_barang:id_barang,jumlah_keluar:jumlah_keluar},
        success: function () {
          $('#alert_berhasil').html('<div class="alert bg-green">Item berhasil ditambahkan</div>');
          loadView2()
        }
      });

  });

  function loadView2() {
    $.ajax({
      url:'page/transaksi_keluar/view_item.php',
      type:'GET',
      success: function (hasil) {
        $('#view_barang_keluar').html(hasil);
      }
    })
  }

  function hapusItemMasuk($id) {
    var id_detail = $id;

    $.ajax({
      url: 'page/transaksi_keluar/hapus_item.php',
      type: 'GET',
      data: {id_detail:id_detail},
      success: function () {
        $('#alert_berhasil').html('<div class="alert bg-red">Item berhasil dihapus</div>');
        loadView2();
      }
    })
  }

  $('#simpan_transaksi_keluar').click(function () {
      var pelanggan = $('#pelanggan').val();
      var telepon = $('#telepon').val();
      var id_user = <?= $_SESSION['id_user'] ?>;
      $.ajax({
        url: 'page/transaksi_keluar/simpan_transaksi.php',
        type: 'POST',
        data:{id_user:id_user,pelanggan:pelanggan,telepon:telepon},
        success: function () {
          alert('Transaksi Berhasil!');
          window.location.reload()
        }
      })
    });
</script>

<script type="text/javascript">
    var rupiah = document.getElementById('rupiah');
    rupiah.addEventListener('keyup', function(e){
      // tambahkan 'Rp.' pada saat form di ketik
      // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
      rupiah.value = formatRupiah(this.value, 'Rp. ');
    });

    var rupiah2 = document.getElementById('rupiah2');
    rupiah2.addEventListener('keyup', function(e){
      // tambahkan 'Rp.' pada saat form di ketik
      // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
      rupiah2.value = formatRupiah(this.value, 'Rp. ');
    });

    var diskon = document.getElementById('diskon');
    diskon.addEventListener('keyup', function(e){
      // tambahkan 'Rp.' pada saat form di ketik
      // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
      diskon.value = formatRupiah(this.value, 'Rp. ');
    });
 
    /* Fungsi formatRupiah */
    function formatRupiah(angka, prefix){
      var number_string = angka.replace(/[^,\d]/g, '').toString(),
      split       = number_string.split(','),
      sisa        = split[0].length % 3,
      rupiah        = split[0].substr(0, sisa),
      ribuan        = split[0].substr(sisa).match(/\d{3}/gi);
 
      // tambahkan titik jika yang di input sudah menjadi angka ribuan
      if(ribuan){
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
      }
 
      rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
      return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }
</script>

<script type="text/javascript">
      function hanyaAngka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
       if (charCode > 31 && (charCode < 48 || charCode > 57))
 
        return false;
      return true;
    }
</script>
</body>
</html>
