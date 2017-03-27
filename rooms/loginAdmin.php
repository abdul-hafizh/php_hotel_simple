<?php
  if (isset($_GET['pesan'])){
		$pesan = "<span style='background-color:red;
								width:295px;
								color:yellow;
								font-size:14px;
								display:block'>
					".$_GET['pesan']."</span>";
  } else {
		$pesan = "<span style='background-color:YELLOW;
								width:295px;
								color:BLUE;
								font-size:14px;
								display:block';>
			Isikan User dan Password BOZZ !!!</span>";
  }
?>
<!DOCTYPE html>
<html>
<head>
<h1><FONT color="YELLOW">MASUKAN  USER DAN PASSWORD </FONT> </h1>
 <style>
   #login {
	 margin: 10px auto;
	 width:300px;
	 height:150px;
	 background-color:blue;
	 border: solid 5px BLACK;
	 font-size:25px;
	 padding:50px;
	 box-shadow: 40px 40px 40px yellow;
   }
 </style>
</head>
<body  bgcolor =" blue" >
<div id="login">
  <form action="ceklogin.php" method="post">
    <table>
	  <tr>
	   <td colspan="2">LOGIN</td>
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
	    <td  colspan="2"><input type="submit" value="Login" /></td>
	  </tr>
	</table>
  </form>
</div>  
</body>
</html>