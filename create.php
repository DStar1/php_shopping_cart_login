<html>
<head>
	<title>Day of the 42</title>
	<link rel="stylesheet" href="doft.css"/>
	<link rel="stylesheet" href="menu.css"/>
</head>
<body style="background-color:#505050">
	<?php require('nav.php'); ?>
	<div class=mid>
		<h1 style="text-align:center;font-size: 1.5vh;font-size: 1.5vw;">Create account! </h1>
		<div style="margin:auto;">
		<form action="login/ex01/create.php" method="POST">
				Username: <input type="text" name="login" value="" />
			<br/>
				Password: <input type="password" name="passwd" value="" />
			<br/>
                Confirm: <input type="password" name="passwd1" value="" />
			<br/>
				<input type="submit" name="submit" value="OK"/>
		</form>
		<!--<a href="create.php" class="button1">New user? Create account </a>-->
		</div>
	</div>
	</body>
</html>

