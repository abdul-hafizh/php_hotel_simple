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
	   <th>Check-in</th><th>Check-out</th><th>Total</th><th>Status</th>
	 </tr>
	<?php
		$no = 0;
		$i  = 0;
		$biaya = 0;
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
			   ."<td align='center'>"."Rp. ??"."</td>"
			   ."<td align='center'>".$data['status']."</td>";
		   echo "</tr>";
		}	
	?>
	</table>
</body>