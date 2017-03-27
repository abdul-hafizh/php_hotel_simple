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
    width: 40%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 9px;
}
</style>
<?php
	$id_kamar  = $_POST['id_kamar'];
	$jenis = $_POST['jenis_kamar'];
	$nomor = $_POST['cbnomor'];
?>
<form action="proses/simpan.php" method="post">
<center><u><h3>FORM PEMESAN</h3></u></center>
<table align='center'>
	<tr>
		<td>Jenis Kamar</td>
		<td>: <input type="text" name="jenis_kamar" value="<?php echo "$jenis"; ?>" readonly ></td>
	</tr>
	
	<input type='hidden' name="id_kamar" value="<?php echo $id_kamar; ?>" >
	
	<tr>
		<td>Nomor Kamar</td>
		<td>: <input type="text" name="cbnomor" size="3" value="<?php echo "$nomor"; ?>" readonly ></td>
	</tr>
	<tr>
		<td>Nomor Identitas</td>
		<td>: <input type="text" name="nomoridentitas"></td>
	</tr>
	<tr>
		<td>Nama Lengkap</td>
		<td>: <input type="text" name="namalengkap"></td>
	</tr>
	<tr>
		<td>Email</td>
		<td>: <input type="email" name="email"></td>
	</tr>
	<tr>
		<td>Nomor HP</td>
		<td>: <input type="text" name="phonenumber"></td>
	</tr>
	<tr>
		<td>Check-in</td>
		<td>: <input type="date" name="checkin"></td>
	</tr>
	<tr>
		<td>Check-out</td>
		<td>: <input type="date" name="checkout"></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td align="left"><input type="submit" name="simpan" value="Simpan"></td>
	</tr>
</table>
<br/> <hr/>
</form>
</body>