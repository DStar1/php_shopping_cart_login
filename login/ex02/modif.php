<?php

$bool = 0;

	if ($_POST['login'] && $_POST['oldpw'] && $_POST['submit'] && $_POST['newpw'] && $_POST['submit'] === "OK")
	{
        $acct = unserialize(file_get_contents('../../secure/password'));
		if ($acct)
		{
			foreach ($acct as $key => $arg ) 
			{
				if ($arg['login'] === $_POST['login'] && $arg['passwd'] === hash('whirlpool', $_POST['oldpw']))
				{
					$bool = 1;
					$acct[$key]['passwd'] =  hash('whirlpool', $_POST['newpw']);
				}
			}
			if ($bool)
			{
				file_put_contents('../../secure/password', serialize($acct));
				echo "OK\n";
			}
			else
				echo "ERROR\n";
		}
		else
			echo "ERROR\n";
	} 
	else
		echo "ERROR\n";

?>
