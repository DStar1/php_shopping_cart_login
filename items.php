<?php
	session_start();
	$data = unserialize(file_get_contents('./secure/data'));
    $origin = $_POST['glasses'];
?>

<!--<php if ($_SESSION('loggued_on_user')){
	$data = unserialize(file_get_contents('./secure/data'));
	foreach ($data as $key => $arg) 
	{
		if ($arg['login'] === $_SESSION['logged_on'])
			$cart = 1;
	}-->
<!DOCTYPE HTML>
        <form class="filter" method="post" action="" name="filter">

            <select name="glasses" value="">
                <option value="0" <?php if ($origin == 0) echo "selected" ?> >All</option>
                <option value="1" <?php if ($origin == 1) echo "selected" ?> >Sun Glasses</option>
                <option value="2" <?php if ($origin == 2) echo "selected" ?> >Reading Glasses</option>
            </select>

            <input type="submit" name="filter-submit" value="Filter" />

        </form>
<div>
<form style="display:inline-block;margin: auto;width:70%" action="additem.php" method="GET">
<?php

	if ($origin == 2 || $origin == 0)
		echo '<div class="buy_img"><img src="products/glasses1.jpeg" id=midpic style="position: relative;"><br />'."Price: ".$data['g1_pr']."$".'<br /><input class="pic_button" type="submit" name="glasses1" value="Buy"/></div>';
	if ($origin == 2 || $origin == 0)
		echo '<div class="buy_img"><img src="products/glasses2.jpeg" id=midpic style="position: relative;"><br />'."Price: ".$data['g2_pr']."$".'<br /><input class="pic_button" type="submit" name="glasses2" value="Buy"/></div>';
	if ($origin == 2 || $origin == 0)
		echo '<div class="buy_img"><img src="products/glasses3.jpeg" id=midpic style="position: relative;"><br />'."Price: ".$data['g3_pr']."$".'<br /><input class="pic_button" type="submit" name="glasses3" value="Buy"/></div>';
	if ($origin == 2 || $origin == 0)
		echo '<div class="buy_img"><img src="products/glasses4.jpeg" id=midpic style="position: relative;"><br />'."Price: ".$data['g4_pr']."$".'<br /><input class="pic_button" type="submit" name="glasses4" value="Buy"/></div>';
	if ($origin == 2 || $origin == 0)
		echo '<div class="buy_img"><img src="products/glasses5.jpeg" id=midpic style="position: relative;"><br />'."Price: ".$data['g5_pr']."$".'<br /><input class="pic_button" type="submit" name="glasses5" value="Buy"/></div>';
	if ($origin == 2 || $origin == 0)
		echo '<div class="buy_img"><img src="products/glasses6.jpeg" id=midpic style="position: relative;"><br />'."Price: ".$data['g6_pr']."$".'<br /><input class="pic_button" type="submit" name="glasses6" value="Buy"/></div>';
	if ($origin == 2 || $origin == 0)
		echo '<div class="buy_img"><img src="products/glasses7.jpeg" id=midpic style="position: relative;"><br />'."Price: ".$data['g7_pr']."$".'<br /><input class="pic_button" type="submit" name="glasses7" value="Buy"/></div>';
	if ($origin == 1 || $origin == 0)
		echo '<div class="buy_img"><img src="products/glasses8.jpeg" id=midpic style="position: relative;"><br />'."Price: ".$data['g8_pr']."$".'<br /><input class="pic_button" type="submit" name="glasses8" value="Buy"/></div>';
	if ($origin == 2 || $origin == 0)
		echo '<div class="buy_img"><img src="products/glasses9.jpeg" id=midpic style="position: relative;"><br />'."Price: ".$data['g9_pr']."$".'<br /><input class="pic_button" type="submit" name="glasses9" value="Buy"/></div>';
	if ($origin == 1 || $origin == 0)
		echo '<div class="buy_img"><img src="products/glasses10.jpeg" id=midpic style="position: relative;"><br />'."Price: ".$data['g10_pr']."$".'<br /><input class="pic_button" type="submit" name="glasses10" value="Buy"/></div>';
	if ($origin == 1 || $origin == 0)
		echo '<div class="buy_img"><img src="products/glasses11.jpeg" id=midpic style="position: relative;"><br />'."Price: ".$data['g11_pr']."$".'<br /><input class="pic_button" type="submit" name="glasses11" value="Buy"/></div>';
?>
</form>
</div>
