<?php

$bool = 0;

	if ($_POST['login'] && $_POST['passwd'] && $_POST['passwd1'] && $_POST['passwd'] === $_POST['passwd1'] && $_POST['submit']) 
	{
		if ($_POST['submit'] === "OK")
		{
			// if (!file_exists('../private')) 
			// 	mkdir("../private");
			if (!file_exists('../../secure/password')) 
				file_put_contents('../../secure/password', null);
			$acct = unserialize(file_get_contents('../../secure/password'));
			if ($acct) 
				foreach ($acct as $key => $arg) 
				{
					if ($arg['login'] === $_POST['login'])
					$bool = 1;
				}
			if ($bool) 
			{
				header('Location: ../../create.php');
				// echo "ERROR\n";
			} 
			else 
			{
				$temp['login'] = $_POST['login'];
				$temp['passwd'] = hash('whirlpool', $_POST['passwd']);
				$acct[] = $temp;
				file_put_contents('../../secure/password', serialize($acct));
				header('Location: ../../index.php');
				// echo "OK\n";
			}
		}
		else 
			header('Location: ../../create.php');//echo "ERROR\n";
	} 
	else 
		header('Location: ../../create.php');//echo "ERROR\n";

?>
