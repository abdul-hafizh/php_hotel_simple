<?php
	$id = $_GET['id'];
	$nomor = $_GET['nomor'];
    include_once "koneksi.php";
	
	$sql = "update pemesan set status='Out' where id = $id";
	$hasil = mysql_query($sql);
	if (!$hasil) die("Gagal Update Data Status");
	
	$sql = "update kamar set status='0' where nomor = $nomor";
	$hasil = mysql_query($sql);
	if (!$hasil) die("Gagal Update Data Nomor");
?>
<script>document.location.href='../admin.php';</script>