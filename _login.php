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
				<li class="selected">
					<a href="_login.php">Login</a>
				</li>
			</ul>
		</div>
	</div>

<?php
  if (isset($_GET['pesan'])){
		$pesan = "<span style='background-color:red;
								width:295px;
								font-size:14px;
								display:block'>
					".$_GET['pesan']."</span>";
  } else {
		$pesan = "<span style='background-color:YELLOW;
								width:295px;
								font-size:14px;
								display:block';>
				<hr/></span>";
  }
?>
<!DOCTYPE html>
<center><h2><u>Login Administrator</u></h2></center>
 <style>
   #login {
	 background-color: #fdd167;
	 margin: 10px auto;
	 width:300px;
	 height:150px;
	 border: solid 4px BLACK;
	 padding:40px;
	 box-shadow: 10px 10px 10px gray;
   }
 </style>
<div id="login">
  <form action="proses/_ceklogin.php" method="post">
    <table>
	  <tr>
	   <td colspan="2"><h3>LOGIN</h3></td>
	  </tr>
	  <tr>
	   <td colspan="2"><?php echo $pesan; ?></td>
	  </tr>
	  <tr>
	    <td>User</td>
		<td>: <input type="text" name="user"/></td>
	  </tr>
	  <tr>
	    <td>Password</td>
		<td>: <input type="password" name="password" /></td>
	  </tr>
	  <tr>
	    <td>&nbsp;</td>
		<td><input type="submit" value="Login" /></td>
	  </tr>
	</table>
  </form>
</div>  
</body>
</html>