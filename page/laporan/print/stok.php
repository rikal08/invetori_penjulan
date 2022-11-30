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

$html .='<h4 id="title">Laporan Stok Barang <br> Toko Putra Jaya</h4>';
$html .= '<p id="line">Jalan, Pd. Labu RT.2/RW. No 1, Kec. Cilandak, Kota Jakarta Selatan. </p><hr>';

$html.='<table id="customers">
<thead>
<tr>
<th>No</th>
<th>ID Barang</th>
<th>Deskripsi</th>
<th>Jenis</th>
<th>Brand</th>
<th>Harga Beli</th>
<th>Harga Jual</th>
<th>Stok</th>
</tr>
</thead>
<tbody>';
$no=1;
$barang = mysqli_query($con,"SELECT * FROM tb_barang JOIN tb_jenis JOIN tb_brand ON tb_barang.id_jenis=tb_jenis.id_jenis AND tb_barang.id_brand=tb_brand.id_brand");
foreach ($barang as $data) {

$html .='<tr>
	<td>'. $no++ .'</td>
	<td>'. $data['id_barang'] .'</td>
	<td>'. $data['deskripsi'] .'</td>
	<td>'. $data['nama_jenis'] .'</td>
	<td>'. $data['nama_brand'] .'</td>
	<td> Rp. '. number_format($data['harga_beli']) .'</td>
	<td> Rp. '. number_format($data['harga_jual']) .'</td>
	<td>'. $data['stok'] .'</td>
	</tr>';
}


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
$dompdf->stream('laporan-stok.php');
?>