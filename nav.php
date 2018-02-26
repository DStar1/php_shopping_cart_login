<?php
	session_start();
	// require('login/ex03/logout.php');
?>
	<div class=nav>
		<div class="dropdown" style="width:30%; margin-top:auto; margin-left:auto;">
		<a class="button button2"><?php if (!$_SESSION['loggued_on_user']) echo "Menu"; else echo $_SESSION['loggued_on_user'];?></a>
			<div class="dropdown-content">
				<a href="index.php" class="button">Home </a>
				<a href="basket.php" class="button">Cart</a>
				<?php if (!$_SESSION['loggued_on_user']) echo '<a href="login.php" class="button">Login </a'; else echo '<a href="logout.php" class="button">Logout </a>';?>
				<!--l-->
			</div>
		</div>
	</div>
	<br />
