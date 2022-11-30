<?php if (isset($_SESSION['id_user'])): ?>
	<?php if ($_SESSION['hak_akses']==1): ?>
		<li><a href="index.php?page=data-user"><i class="fa fa-user"></i> <span>Data User</span></a></li>
		<li class="treeview">
			<a href="#">
				<i class="fa fa-table"></i> <span>Master Data</span>
				<span class="pull-right-container">
					<i class="fa fa-angle-left pull-right"></i>
				</span>
			</a>
			<ul class="treeview-menu">
				<li><a href="index.php?page=data-jenis"><i class="fa fa-circle-o"></i> Jenis</a></li>
				<li><a href="index.php?page=data-brand"><i class="fa fa-circle-o"></i> Brand</a></li>
			</ul>
		</li>
		<li><a href="index.php?page=data-barang"><i class="fa fa-tv"></i> <span>Data Barang</span></a></li>
		<li><a href="index.php?page=transaksi-masuk"><i class="fa fa-sign-in"></i> <span>Transaksi Masuk</span></a></li>
		<li><a href="index.php?page=transaksi-keluar"><i class="fa fa-sign-out"></i> <span>Transaksi Keluar</span></a></li>

		<li class="treeview">
			<a href="#">
				<i class="fa fa-book"></i> <span>Laporan</span>
				<span class="pull-right-container">
					<i class="fa fa-angle-left pull-right"></i>
				</span>
			</a>
			<ul class="treeview-menu">
				<li><a href="index.php?page=laporan-stok"><i class="fa fa-circle-o"></i> Stok</a></li>
				<li><a href="index.php?page=laporan-transaksi-masuk"><i class="fa fa-circle-o"></i> Transaksi Masuk</a></li>
				<li><a href="index.php?page=laporan-transaksi-keluar"><i class="fa fa-circle-o"></i> Transaksi Keluar</a></li>
			</ul>
		</li>
	<?php elseif($_SESSION['hak_akses']==2): ?>
		<li class="treeview">
			<a href="#">
				<i class="fa fa-book"></i> <span>Laporan</span>
				<span class="pull-right-container">
					<i class="fa fa-angle-left pull-right"></i>
				</span>
			</a>
			<ul class="treeview-menu">
				<li><a href="index.php?page=laporan-stok"><i class="fa fa-circle-o"></i> Stok</a></li>
				<li><a href="index.php?page=laporan-transaksi-masuk"><i class="fa fa-circle-o"></i> Transaksi Masuk</a></li>
				<li><a href="index.php?page=laporan-transaksi-keluar"><i class="fa fa-circle-o"></i> Transaksi Keluar</a></li>
			</ul>
		</li>
	<?php else: ?>
		<li><a href="index.php?page=transaksi"><i class="fa fa-book"></i> <span>Transaksi</span></a></li>
	<?php endif ?>
	<li class="header">Setting</li>
	<li><a href="index.php?page=profil"><i class="fa fa-gear"></i> <span>Akun</span></a></li>
	<?php else: ?>
		<li><a href="index.php?page=login"><i class="fa fa-sign-in"></i> <span>Login</span></a></li>
		<li><a href="index.php?page=register"><i class="fa fa-file"></i> <span>Register</span></a></li>
	<?php endif ?>

