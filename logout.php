<html>
<head>
	<title>Day of the 42</title>
	<link rel="stylesheet" href="doft.css"/>
	<link rel="stylesheet" href="menu.css"/>
</head>
<body style="background-color:#505050">
	<?php require('nav.php'); ?>
	<div class=mid>
		<h1 style="text-align:center;font-size: 1.5vh;font-size: 1.5vw;">Logging out! </h1>
		<div style="margin:auto;">
		<form action="login/ex03/logout.php" method="GET">
            Are you sure? <br />
			<input type="submit" name="submit" value="OK"/>
		</form>
		</div>
	</div>
	</body>
</html>


<!--<html><body>
<form action="create.php" method="POST">
		Username: <input type="text" name="login" value="" />
	<br/>
		Password: <input type="password" name="passwd" value="" />
	<br/>
		<input type="submit" name="submit" value="OK"/>
</form>
</body></html>-->
