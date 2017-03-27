<?php
	$jenis_kamar = $_POST['jenis_kamar'];
	$cbnomor     = $_POST['cbnomor'];
    $nomor	     = $_POST['nomoridentitas'];
    $nama	     = $_POST['namalengkap'];
	$email	     = $_POST['email'];
	$nohp	     = $_POST['phonenumber'];
	$checkin     = $_POST['checkin'];
	$checkout    = $_POST['checkout'];
	$simpan	     = $_POST['simpan'];
	$id_kamar    = $_POST['id_kamar'];
 
    include_once "koneksi.php";
	$sql = "insert into pemesan (jenis_kamar, cbnomor, nomoridentitas, namalengkap, email, phonenumber, checkin, checkout)
			values
			('$jenis_kamar','$cbnomor','$nomor', '$nama', '$email', '$nohp', '$checkin', '$checkout')" ;

	$hasil = mysql_query($sql);
	if (!$hasil) die("Gagal Simpan Pemesan");
	
	$sql = "update kamar set status='1' where jenis_id='$id_kamar' AND nomor='$cbnomor'";
	$hasil = mysql_query($sql);
	if (!$hasil) die("Gagal Update Pemesan");
	
?>
<script>document.location.href='../detail_pesan.php';</script>