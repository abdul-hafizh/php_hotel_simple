<?php
	$id    = $_GET['id'];
	$nomor = $_GET['nomor'];
	include  "koneksi.php";
	$hasil = mysql_query("delete from pemesan where id = '$id'");
	if(!$hasil)
		echo "<script>Alert('Gagal hapus!')</script>";
	
	$sql = "update kamar set status='0' where nomor = $nomor";
	$hasil = mysql_query($sql);
	if (!$hasil) die("Gagal Update Data Nomor");
?>
<script>document.location.href="../admin.php"</script>