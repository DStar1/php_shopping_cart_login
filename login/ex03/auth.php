<?php

	function auth($login, $passwd) 
	{
		if (!$login || !$passwd)
			return false;
		$acct = unserialize(file_get_contents('../private/passwd'));
		if ($acct) 
		{
			foreach ($acct as $key => $arg) 
			{
				if ($arg['login'] === $login && $arg['passwd'] === hash('whirlpool', $passwd))
					return true;
			}
		}
		return false;
	}

?>