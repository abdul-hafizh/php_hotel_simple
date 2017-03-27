<?php
	$host 	= "localhost";
	$user 	= "root";
	$pass 	= "";
	$dbname = "hotel";
	
	$konek = mysql_connect($host, $user, $pass);
	if (!$konek) die("Gagal Koneksi");
	$hasil = mysql_select_db($dbname);
	if (!$hasil) die("Gagal Pilih Database");
	
?>

