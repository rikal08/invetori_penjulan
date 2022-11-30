<?php
include '../../../koneksi.php';
require_once("dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$html ='<!DOCTYPE html>
<html>
<head>
<title></title>
<style>
#customers {
font-family: Arial, Helvetica, sans-serif;
border-collapse: collapse;
width: 100%;
font-size:12px;
}

#customers td, #customers th {
border: 1px solid #ddd;
padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
padding-top: 12px;
padding-bottom: 12px;
text-align: left;
background-color: #04AA6D;
color: white;
}
#title{
font-family: Arial, Helvetica, sans-serif;
text-align:center;
font-size:24px;
}
#line{
font-family: Arial, Helvetica, sans-serif;
text-align:center;
font-size:14px;
}
</style>
</head>
<body>';

$html .='<h4 id="title">Laporan Transaksi Keluar <br> Toko Putra Jaya</h4>';
$html .= '<p id="line">Jalan, Pd. Labu RT.2/RW. No 1, Kec. Cilandak, Kota Jakarta Selatan. </p><hr>';
$html .= '<p>Periode: '.$_POST['tgl_awal'].' - '.$_POST['tgl_akhir'].'</p>';
$html.='<table id="customers">
<thead>
<tr>
<th>No</th>
<th>Tanggal</th>
<th>Kode Transaksi</th>
<th>Pelanggan</th>
<th>Telepon</th>
<th>Alamat</th>
<th>Kode Barang</th>
<th>Deskripsi Barang</th>
<th>Jumlah</th>
<th>Harga Beli</th>
<th>Harga Jual</th>
<th>Diskon</th>
<th>Sub Total</th>
<th>Keuntungan</th>
</tr>
</thead>
<tbody>';
$no=1;
$total=0;
$fit =0;
$t_keluar = mysqli_query($con,"SELECT * FROM tb_transaksi_keluar JOIN tb_user ON tb_transaksi_keluar.id_user=tb_user.id_user WHERE status=2 AND date(tanggal) BETWEEN '$_POST[tgl_awal]' AND '$_POST[tgl_akhir]' ORDER BY id DESC");
foreach ($t_keluar as $data) {

	$html .='<tr>
	<td>'. $no++ .'</td>
	<td>'. $data['tanggal'] .'</td>
	<td>'. $data['kode_tran_keluar'] .'</td>
	<td>'. $data['nama_user'] .'</td>
	<td>'. $data['telepon'] .'</td>
	<td>'. $data['alamat'] .'</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	</tr>';
	$no1=1;
	$item = mysqli_query($con,"SELECT * FROM tb_detail_tran_keluar JOIN tb_barang ON tb_detail_tran_keluar.id_barang=tb_barang.id_barang WHERE kode_tran_keluar='$data[kode_tran_keluar]'");
	foreach ($item as $data2) {
		$total=$total+(($data2['harga_jual']*$data2['jumlah'])-($data2['diskon']));
		$fit = $fit + (($data2['harga_jual']*$data2['jumlah'])-($data2['diskon']))-($data2['harga_beli']*$data2['jumlah']);
		$html .='<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td style="text-align: right;">'. $no1++ .'</td>
		<td>'. $data2['id_barang'] .'</td>
		<td>'. $data2['deskripsi'] .'</td>
		<td>'. $data2['jumlah'] .'</td>
		<td>Rp '. number_format($data2['harga_beli']) .'</td>
		<td>Rp '. number_format($data2['harga_jual']) .'</td>
		<td>Rp '. number_format($data2['diskon']) .'</td>
		<td>Rp '. number_format(($data2['harga_jual']*$data2['jumlah'])-($data2['diskon'])) .'</td>
		<td>Rp. '. number_format((($data2['harga_jual']*$data2['jumlah'])-($data2['diskon']))-($data2['harga_beli']*$data2['jumlah'])) .'</td>
		</tr>';
	}

	
}

$html .='<tr>
	<th colspan="12" style="text-align: right;">Total</th>
	<th>Rp. '. number_format($total) .'</th>
	<th>Rp. '. number_format($fit) .'</th>
	</tr>';

$html .='</tbody>
</table>';

$html .='<br><br><table align="right">
<tr>
<td>Jakarta, '.date("Y-m-d").'<br>Mengetahui, <br><br><br><br> (..............................)<br>Pimpinan.</td>
</tr>
</table>';

$html .='</body></html>';
$dompdf->loadHtml($html); 
$dompdf->set_paper('A4', 'landscape'); 
$dompdf->render();
$dompdf->stream('laporan-transaksi-keluar.php');
?>