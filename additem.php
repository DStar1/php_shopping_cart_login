<?php

	session_start();
	if ($_SESSION['loggued_on_user'])
	{
			// header('Location: login.php');
			$basket = unserialize(file_get_contents('./secure/basket'));
			$temp['login'] = $_SESSION['loggued_on_user'];
			$_SESSION['add'] = 2;
			foreach ($basket as $key => $arg)
			{
				if ($arg['login'] === $_SESSION['loggued_on_user'])
					$cart = 1;
				if ($cart && !$add)
				{
					$add = 1;
					if ($_GET['glasses1'] === "Buy")
					{
						$basket[$key]['glasses1'] = $basket[$key]['glasses1'] + ($_GET['glasses1'] * 1)+1;
						$_SESSION['add'] = 1;
					}
					if ($_GET['glasses2'] === "Buy")
					{
						$basket[$key]['glasses2'] = $basket[$key]['glasses2'] + ($_GET['glasses2'] * 1)+1;
						$_SESSION['add'] = 1;
					}
					if ($_GET['glasses3'] === "Buy")
					{
						$basket[$key]['glasses3'] = $basket[$key]['glasses3'] + ($_GET['glasses3'] * 1)+1;
						$_SESSION['add'] = 1;
					}
					if ($_GET['glasses4'] === "Buy")
					{
						$basket[$key]['glasses4'] = $basket[$key]['glasses4'] + ($_GET['glasses4'] * 1)+1;
						$_SESSION['add'] = 1;
					}
					if ($_GET['glasses5'] === "Buy")
					{
						$basket[$key]['glasses5'] = $basket[$key]['glasses5'] + ($_GET['glasses5'] * 1)+1;
						$_SESSION['add'] = 1;
					}
					if ($_GET['glasses6'] === "Buy")
					{
						$basket[$key]['glasses6'] = $basket[$key]['glasses6'] + ($_GET['glasses6'] * 1)+1;
						$_SESSION['add'] = 1;
					}
					if ($_GET['glasses7'] === "Buy")
					{
						$basket[$key]['glasses7'] = $basket[$key]['glasses7'] + ($_GET['glasses7'] * 1)+1;
						$_SESSION['add'] = 1;
					}
					if ($_GET['glasses8'] === "Buy")
					{
						$basket[$key]['glasses8'] = $basket[$key]['glasses8'] + ($_GET['glasses8'] * 1)+1;
						$_SESSION['add'] = 1;
					}
					if ($_GET['glasses9'] === "Buy")
					{
						$basket[$key]['glasses9'] = $basket[$key]['glasses9'] + ($_GET['glasses9'] * 1)+1;
						$_SESSION['add'] = 1;
					}
					if ($_GET['glasses10'] === "Buy")
					{
						$basket[$key]['glasses10'] = $basket[$key]['glasses10'] + ($_GET['glasses10'] * 1)+1;
						$_SESSION['add'] = 1;
					}
					if ($_GET['glasses11'] === "Buy")
					{
						$basket[$key]['glasses11'] = $basket[$key]['glasses11'] + ($_GET['glasses11'] * 1)+1;
						$_SESSION['add'] = 1;
					}
					file_put_contents('./secure/basket', serialize($basket));
				}
			}
			if (!$cart)
			{
				if ($_GET['glasses1'] === "Buy")
				{
					$temp['glasses1'] = ($_GET['glasses1'] * 1) +1;
					$_SESSION['add'] = 1;
				}
				if ($_GET['glasses2'] === "Buy")
				{
					$temp['glasses2'] = ($_GET['glasses2'] * 1)+1;
					$_SESSION['add'] = 1;
				}
				if ($_GET['glasses3'] === "Buy")
				{
					$temp['glasses3'] = ($_GET['glasses3'] * 1) +1;
					$_SESSION['add'] = 1;
				}
				if ($_GET['glasses4'] === "Buy")
				{
					$temp['glasses4'] = ($_GET['glasses4'] * 1) +1;
					$_SESSION['add'] = 1;
				}
				if ($_GET['glasses5'] === "Buy")
				{
					$temp['glasses5'] = ($_GET['glasses5'] * 1) +1;
					$_SESSION['add'] = 1;
				}
				if ($_GET['glasses6'] === "Buy")
				{
					$temp['glasses6'] = ($_GET['glasses6'] * 1) +1;
					$_SESSION['add'] = 1;
				}
				if ($_GET['glasses7'] === "Buy")
				{
					$temp['glasses7'] = ($_GET['glasses7'] * 1) +1;
					$_SESSION['add'] = 1;
				}
				if ($_GET['glasses8'] === "Buy")
				{
					$temp['glasses8'] = ($_GET['glasses8'] * 1) +1;
					$_SESSION['add'] = 1;
				}
				if ($_GET['glasses9'] === "Buy")
				{
					$temp['glasses9'] = ($_GET['glasses9'] * 1) +1;
					$_SESSION['add'] = 1;
				}
				if ($_GET['glasses10'] === "Buy")
				{
					$basket[$key]['glasses10'] = $basket[$key]['glasses10'] + ($_GET['glasses10'] * 1)+1;
					$_SESSION['add'] = 1;
				}
				if ($_GET['glasses11'] === "Buy")
				{
					$basket[$key]['glasses11'] = $basket[$key]['glasses11'] + ($_GET['glasses11'] * 1)+1;
					$_SESSION['add'] = 1;
				}
				$basket[] = $temp;
				file_put_contents('./secure/basket', serialize($basket));
				$_SESSION['add'] = 1;
			}
		// }
		// else
		// 	$_SESSION['add'] = 2;
	}
	// header('Location: basket.php');
	header('Location: index.php');
	exit;
?>
