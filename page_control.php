<?php 

if (isset($_GET['page'])) {
	$page = $_GET['page'];

	switch ($page) {
		case 'login':
			include 'login_form.php';
			break;
		// user
		case 'data-user':
			include 'page/user/data-user.php';
			break;
		case 'hapus-user':
			include 'page/user/control_hapus.php';
			break;
		// jenis
		case 'data-jenis':
			include 'page/jenis/data-jenis.php';
			break;
		case 'hapus-jenis':
			include 'page/jenis/control_hapus.php';
			break;
		// jenis
		case 'data-brand':
			include 'page/brand/data-brand.php';
			break;
		case 'hapus-brand':
			include 'page/brand/control_hapus.php';
			break;
		// barang
		case 'data-barang':
			include 'page/barang/data_barang.php';
			break;
		case 'hapus-barang':
			include 'page/barang/control_hapus.php';
			break;
		case 'edit-barang':
			include 'page/barang/edit.php';
			break;
		// transaksi masuk
		case 'transaksi-masuk':
			include 'page/transaksi_masuk/index.php';
			break;
		case 'tambah-transaksi-masuk':
			include 'page/transaksi_masuk/form.php';
			break;
		case 'detail-tm':
			include 'page/transaksi_masuk/detail.php';
			break;
		
		// transaksi keluar
		case 'transaksi-keluar':
			include 'page/transaksi_keluar/index.php';
			break;
		case 'tambah-transaksi-keluar':
			include 'page/transaksi_keluar/form.php';
			break;
		case 'konfirmasi':
			include 'page/transaksi_keluar/konfirmasi.php';
			break;
		case 'detail-tk':
			include 'page/transaksi_keluar/detail.php';
			break;
		// laporan stok
		case 'laporan-stok':
			include 'page/laporan/stok.php';
			break;
		// laporan transaksi masuk
		case 'laporan-transaksi-masuk':
			include 'page/laporan/transaksi_masuk.php';
			break;
		// laporan transaksi keluar
		case 'laporan-transaksi-keluar':
			include 'page/laporan/transaksi_keluar.php';
			break;
		// ganti password
		case 'ganti-password':
			include 'ganti_password.php';
			break;
		// detail barang
		case 'detail':
			include 'detail_barang.php';
			break;
		case 'register':
			include 'register.php';
			break;
		case 'pemesanan':
			include 'pemesanan.php';
			break;
		case 'transaksi':
			include 'transaksi.php';
			break;
		case 'profil':
			include 'profil.php';
			break;
		default:
			include 'beranda.php';
			break;
	}
}else{
	include 'beranda.php';
}


 ?>