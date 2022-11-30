<?php 

$update = mysqli_query($con,"UPDATE tb_transaksi_keluar SET status=2 WHERE id='$_GET[id]'");

echo "<script>
			alert('berhasal di konfirmasi');window.location.href='index.php?page=transaksi-keluar'
	</script>";

?>