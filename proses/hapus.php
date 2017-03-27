<?php
  $id = $_GET['id'];
  $nomor = $_GET['nomor'];
  include_once("koneksi.php");	
  $sql = "select * from pemesan where id = '$id'";
  $hasil = mysql_query($sql);
  if (!$hasil) die("Gagal Query Pemesan");
  $data = mysql_fetch_array($hasil);
?>
<head>
	<title>Pemesanan Hotel Online</title>
	<link rel="stylesheet" href="../css/style.css" type="text/css">
</head>
<body>
	<div id="header">
		<div>
			<div id="logo">
				<a href="default.php"><img src="../images/logo.png" alt="LOGO"></a>
			</div>
			<ul id="navigation">
				<li>
					<a href="_login.php">Login</a>
				</li>
				<li class="selected">
					<a href="admin.php">Admin</a>
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
<form action="hapus_konfirmasi.php" method="get">
<center><u><h3>HAPUS DATA PEMESAN</h3></u></center>
<table align='center'>
	<input type='hidden' name="id" value="<?php echo $id; ?>" >
	<input type='hidden' name="nomor" value="<?php echo $nomor; ?>" >
	<tr>
		<td>Jenis Kamar</td>
		<td><input type="text" name="jenis_kamar" value="<?php echo $data['jenis_kamar'];?>" readonly ></td>
	</tr>
	<tr>
		<td>Nomor Kamar</td>
		<td><input type="text" name="cbnomor" size="3" value="<?php echo $data['cbnomor'];?>" readonly ></td>
	</tr>
	<tr>
		<td>Nomor Identitas</td>
		<td><input type="text" name="nomoridentitas" value="<?php echo $data['nomoridentitas'];?>" readonly ></td>
	</tr>
	<tr>
		<td>Nama Lengkap</td>
		<td><input type="text" name="namalengkap" value="<?php echo $data['namalengkap'];?>" readonly ></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="email" name="email" value="<?php echo $data['email'];?>" readonly></td>
	</tr>
	<tr>
		<td>Nomor HP</td>
		<td><input type="text" name="phonenumber" value="<?php echo $data['phonenumber'];?>" readonly ></td>
	</tr>
	<tr>
		<td>Check-in</td>
		<td><input type="date" name="checkin" value="<?php echo $data['checkin'];?>" readonly ></td>
	</tr>
	<tr>
		<td>Check-out</td>
		<td><input type="date" name="checkout" value="<?php echo $data['checkout'];?>" readonly ></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td align="left"><input type="submit" name="hapus" value="Hapus"> &nbsp;
		<input type="button" value="Batal Hapus" onClick="self.history.back()"/></td>
	</tr>
</table>
<br/><hr/>
</form>
</body>