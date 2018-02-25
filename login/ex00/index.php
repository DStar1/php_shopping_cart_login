<?php

	session_start();
	if ($_GET['login'] && $_GET['passwd'] && $_GET['submit'])
		if ($_GET['submit'] === "OK")
		{
			$_SESSION['login'] = $_GET['login'];
			$_SESSION['passwd'] = $_GET['passwd'];
		}

?>
<html>
<head>
	<title>Day of the 42</title>
	<link rel="stylesheet" href="doft.css"/>
	<link rel="stylesheet" href="menu.css"/>
</head>
<body style="background-color:#505050">
	<div class=banner>

		<div class="dropdown" style="width:30%; margin-top:auto; margin-left:auto;">
		<button class="button button2">Menu</button>
			<div class="dropdown-content">
				<a href="https://apple.com" class="button">Apple </a>
				<a href="https://amazon.com" class="button">Amazon</a>
				<a href="http://www.boeing.com" class="button">Boeing</a>
			</div>
		</div>
	</div>
	<br/>
	<div class=left>
		<img src="resources/arrow.png" title="Arrow" alt="Arrow" class=Limg>
		<img src="resources/main.png" title="Hand" alt="Hand" class=Limg>
		<img src="resources/oeil.png" title="Eye" alt="eye" class=Limg id=eye>
		<img src="resources/outil.png" title="Tool" alt="Tool" class=Limg>
		<img src="resources/chat-icon.png" title="Chat" alt="Chat" class=Limg>
	</div>
	<div class=mid>
		<div>
		<form action="index.php" method="GET">
				Username: <input type="text" name="login" value="<?php echo $_SESSION['login']; ?>" />
			<br/>
				Password: <input type="password" name="passwd" value="<?php echo $_SESSION['passwd']; ?>" />
			<br/>
				<input type="submit" name="submit" value="OK"/>
		</form>
		</div>		
	</div>
	</body>
</html>
