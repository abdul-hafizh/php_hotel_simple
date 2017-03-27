<?php
    session_start();
	$user 		= $_POST['user'];
	$password 	= $_POST['password'];
	
	if ($user == 'admin' && $password == 'admin') {
		$_SESSION['admin'] = $user;
		$_SESSION['level'] = 1;
	} else {
		header('location:_login.php?pesan=User atau Password Salah!');
		exit();
	}
	header('location:../admin.php');
?>