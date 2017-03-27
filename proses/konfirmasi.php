<?php
	$id = $_GET['id'];
    include_once "koneksi.php";
	$sql = "update pemesan set status='In' where id = $id";
	$hasil = mysql_query($sql);
	if (!$hasil) die("Gagal Update Pemesan");
?>
<script>document.location.href='../admin.php';</script>