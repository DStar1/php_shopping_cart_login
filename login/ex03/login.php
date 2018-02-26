<?php

	include('auth.php');
	session_start();
	if ($_GET['login'] && $_GET['passwd'] && auth($_GET['login'], $_GET['passwd']))
	{
		$_SESSION['loggued_on_user'] = $_GET['login'];
		$_SESSION['../../index.php'];
		header('Location: ../../index.php');
		// echo "OK\n";
	}
	else 
	{
		$_SESSION['loggued_on_user'] = "";
		header('Location: ../../login.php');
		// echo "ERROR\n";
	}

?>
