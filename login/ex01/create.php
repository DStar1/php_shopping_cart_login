<?php

$bool = 0;

	if ($_POST['login'] && $_POST['passwd'] && $_POST['submit']) 
	{
		if ($_POST['submit'] === "OK")
		{
			if (!file_exists('../private')) 
				mkdir("../private");
			if (!file_exists('../private/passwd')) 
				file_put_contents('../private/passwd', null);
			$acct = unserialize(file_get_contents('../private/passwd'));
			if ($acct) 
				foreach ($acct as $key => $arg) 
				{
					if ($arg['login'] === $_POST['login'])
					$bool = 1;
				}
			if ($bool) 
			{
				echo "ERROR\n";
			} 
			else 
			{
				$temp['login'] = $_POST['login'];
				$temp['passwd'] = hash('whirlpool', $_POST['passwd']);
				$acct[] = $temp;
				file_put_contents('../private/passwd', serialize($acct));
				echo "OK\n";
			}
		}
		else 
			echo "ERROR\n";
	} 
	else 
		echo "ERROR\n";

?>