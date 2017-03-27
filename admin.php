<?php
  session_start();
  if (!isset($_SESSION['admin']) or $_SESSION['admin']==''){
	header('location:_login.php?pesan=Anda Harus Login Dahulu!');
	exit();
  }
?>

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
					<a href="proses/_logout.php">Logout</a>
				</li>
				<li class="selected">
					<a href="admin.php">Admin</a>
				</li>
			</ul>
		</div>
	</div>

<?php
	include_once("proses/koneksi.php");	
	$result = mysql_query("select * from pemesan");
	if (!$result) die("Gagal Query Pemesan".mysql_error());
?>
<style>
table {
    width: 95%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}
</style>
	<center><u><h3>DAFTAR PEMESAN</h3></u></center>
	<table align='center'>
	 <tr style="background-color:#fdd167;color:#000">
	   <th>No</th><th>Tipe Kamar</th><th>Nomor Kamar</th>
	   <th>Nomor Identitas</th><th>Nama Lengkap</th><th>Email</th><th>Nomor HP</th>
	   <th>Check-in</th><th>Check-out</th><th>Total</th><th>Konfirmasi</th><th>Proses</th>
	   <th>Status</th>
	 </tr>
	 <form action='admin.php' method='post'>

	<?php
		$no = 0;
		$i  = 0;
		while($data = mysql_fetch_array($result)){
		   $no++;
		   $i++;
		   if ($no % 2 == 0)
				echo "<tr style='background-color:#f5d68b'>";
		   else
				echo "<tr style='background-color:#fce7b4'>";
			
		   echo "<td align='center'>".$i."."."</td>"
       		   ."<td align='center'>".$data['jenis_kamar']."</td>"
		       ."<td align='center'>".$data['cbnomor']."</td>"
		       ."<td align='center'>".$data['nomoridentitas']."</td>"
			   ."<td align='center'>".$data['namalengkap']."</td>"
			   ."<td align='center'>".$data['email']."</td>"
			   ."<td align='center'>".$data['phonenumber']."</td>"
			   ."<td align='center'>".$data['checkin']."</td>"
			   ."<td align='center'>".$data['checkout']."</td>"
			   ."<td align='center'>"."Rp. 950.000"."</td>"
			   ."<td align='center'>"."<a href='proses/konfirmasi.php?id={$data['id']}'>Ya</a>&nbsp;
			     <a href='proses/hapus.php?id={$data['id']}&nomor={$data['cbnomor']}'>Tidak</a>"."</td>"
			   ."<td align='center'>"."<a href='proses/lunas.php?id={$data['id']}&nomor={$data['cbnomor']}'>Lunas</a>"."</td>"
			   ."<td align='center'>".$data['status']."</td>";
		   echo "</tr>";
		}	
	?>
	</form>
	</table> <br/><hr/>
	<center>Copyright &copy; booking hotel 2015<center>
</body>