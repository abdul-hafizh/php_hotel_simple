<?php
    session_start();
	$user 		= $_POST['user'];
	$password 	= $_POST['password'];
	
	if ($user == '111' && $password == '111') {
		$_SESSION['user'] = $user;
		$_SESSION['level'] = 1;
	} elseif($user == '222' && $password == '222') {
		$_SESSION['user'] = $user;
		$_SESSION['level'] = 2;
	} else {
		header('location:login.php?pesan=User atau Password Salah!');
		exit();
	}
	header('location:detail_pesan.php');
?>