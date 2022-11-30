<?php
include '../../koneksi.php';
require_once("../transaksi_masuk/dompdf/autoload.inc.php");
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


$html .='<h4 id="title">Faktur Transaksi Penjualan <br> Toko Putra Jaya</h4>';
$html .= '<p id="line">Jalan, Pd. Labu RT.2/RW. No 1, Kec. Cilandak, Kota Jakarta Selatan. </p><hr>';

$t_keluar = mysqli_query($con,"SELECT * FROM tb_transaksi_keluar JOIN tb_user ON tb_transaksi_keluar.id_user=tb_user.id_user WHERE id='$_GET[id]'");
$data = mysqli_fetch_array($t_keluar);

$html .= '<table class="table table-bordered">
          <thead>
            <tr>
              <td style="width: 150px">Kode Transaksi</td>
              <td style="width: 10px">:</td>
              <td>' .$data['kode_tran_keluar'].'</td>
            </tr>
            <tr>
              <td style="width: 150px">Waktu</td>
              <td style="width: 10px">:</td>
              <td>'. $data['tanggal'] .'</td>
            </tr>
            <tr>
              <td style="width: 150px">Pelanggan</td>
              <td style="width: 10px">:</td>
              <td>'. $data['nama_user'] .'</td>
            </tr> 
            <tr>
              <td style="width: 150px">Telepon</td>
              <td style="width: 10px">:</td>
              <td>'. $data['telepon'] .'</td>
            </tr>
            <tr>
              <td style="width: 150px">Alamat</td>
              <td style="width: 10px">:</td>
              <td>'. $data['alamat'] .'</td>
            </tr>
          </thead>
        </table><br>';

$html .= '<table id="customers">
          <thead>
            <tr>
              <th>No</th>
              <th>Deskripsi Barang</th>
              <th>Jenis</th>
              <th>Brand</th>
              <th>Jumlah</th>
              <th>Harga</th>
              <th>Diskon</th>
              <th>Sub Total</th>
            </tr>
          </thead>

          <tbody>';
       

            $view = mysqli_query($con,"SELECT * FROM tb_detail_tran_keluar JOIN tb_barang JOIN tb_jenis JOIN tb_brand ON tb_detail_tran_keluar.id_barang=tb_barang.id_barang AND tb_barang.id_jenis=tb_jenis.id_jenis AND tb_brand.id_brand=tb_barang.id_brand WHERE kode_tran_keluar='$data[kode_tran_keluar]'");

            $no=1;
            $total=0;
            foreach ($view as $data2) {
              $total=$total+($data2['harga_jual']*$data2['jumlah'])-($data2['diskon']);
           

              $html .='<tr>
                <td>'. $no++.'</td>
                <td>'. $data2['deskripsi'].'</td>
                <td>'. $data2['nama_jenis'].'</td>
                <td>'. $data2['nama_brand'].'</td>
                <td>'. $data2['jumlah'].'</td>
                <td>Rp. '. number_format($data2['harga_jual']) .'</td>
                <td>Rp. '. number_format($data2['diskon']) .'</td>
                <td> Rp. '. number_format(($data2['harga_jual']*$data2['jumlah'])-($data2['diskon'])) .'</td>
                
              </tr>';
            }
            $html .='<tr>
                <td colspan="7">Total Harga</td>
                <td>Rp. '. number_format($total).'</td>
              </tr>
          </tbody>
        </table>';

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
$dompdf->stream('faktur.php');

?>