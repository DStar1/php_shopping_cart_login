<?php
	session_start();
	// require('login/ex03/logout.php');
?>
<html>
<head>
	<title>Day of the 42</title>
	<link rel="stylesheet" href="doft.css"/>
	<link rel="stylesheet" href="menu.css"/>
</head>
<body style="background-color:#505050">
	<?php require('nav.php'); ?>
	<div class=mid>
		<nav class="nav2"><a style="font-family:'San Francisco', Helvetica, Arial, san-serif;font-weight: 100;">Buy our glasses</a><br /><a style="font-size: 2vw;font-family:'San Francisco', Helvetica, Arial, san-serif;font-weight: 100;">See the world in HD</a></nav>
		<?php require('items.php') ?>
	</div>

	</body>
</html>
