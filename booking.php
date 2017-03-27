<head>
	<title>Pemesanan Hotel Online</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="header">
		<div>
			<div id="logo">
				<a href="default.php"><img src="images/logo.png" alt="LOGO"></a>
			</div>
			<ul id="navigation">
				<li>
					<a href="default.php">Home</a>
				</li>
				<li class="selected">
					<a href="booking.php">Booking</a>
				</li>
				<li>
					<a href="gallery.php">Gallery</a>
				</li>
				<li>
					<a href="blog.php">Blog</a>
				</li>
				<li>
					<a href="contact.php">Contact</a>
				</li>
			</ul>
		</div>
	</div>

<style>
table {
    width: 90%;
    border-collapse: collapse;
}
table, td, th {
    border: 1px solid black;
    padding: 5px;
}
</style>
<center><u><h3>PILIH KAMAR</h3></u></center>
<table align='center'>
	<tr>
		<th width="20%">Tipe Kamar</th>
		<th>Harga</th>
		<th>Nomor</th>
		<th>Status</th>
	</tr>
<?php
	include_once "proses/koneksi.php";
	$res = mysql_query("select * from jenis_kamar");
	if (!$res) {
	   die("gagal query");
	}
	while ($row = mysql_fetch_array($res, MYSQL_ASSOC)) {
			$id_kamar = $row['id'];
			$sql = "select nomor from kamar where jenis_id='".$id_kamar."' AND status=0" ;				
?>
		<form action="pemesan.php" method="post">
			<td align="center">
				<input type="hidden" name="id_kamar" value="<?php echo $id_kamar; ?> ">
				<input type="hidden" name="jenis_kamar" value="<?php echo $row['jenis_kamar']; ?>">
				<?php echo $row['jenis_kamar']; ?>
			</td>			
			<td align="center">
				<h3>IDR : <?php echo $row['harga']; ?></h3>
			</td>
			<td align="center">			
				<select name="cbnomor">
					<option value='0' name='room'>-Available Rooms-</option>
					<?php
						$hasil = mysql_query($sql) ;
						if (!$hasil) {
						   die("gagal query".mysql_error());
						}
						while($data=mysql_fetch_array($hasil)){
							echo "<option value='{$data[nomor]}'>{$data[nomor]}</option>" ;
						}
					?>
				</select>
			</td>
			<td align="center">
				<input type="submit" value="Booking Now!">
			</td>
		</form>
		</tr>
<?php  } ?>
</table>
<br/><hr/>
	<center><a href="detail_pesan.php">Daftar Pemesan</a><center>
</body>