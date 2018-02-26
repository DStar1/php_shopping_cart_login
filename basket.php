<?php
    session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Day of the 42</title>
	<link rel="stylesheet" href="doft.css"/>
	<link rel="stylesheet" href="menu.css"/>
</head>
<body style="background-color:#505050">
	<?php require('nav.php'); ?>
	<div class=mid>
<!--k-->
    <form class="main-container catalog" action="checkout.php">
        <?php
        if ($_SESSION['edit'] == 1)
            echo "Your basket has been edited.";
        else
            echo '<div class="title">Basket</div>';
        $_SESSION['edit'] = "";
        ?>
        <table>
            <tr class="table-title"><td>Item</td><td>Quantity</td><td>Price</td><td>Total</td></tr>
<?php
    if (!$_SESSION['loggued_on_user'])
        echo "You must be logged in to view this.";
    else
    {
        $basket = unserialize(file_get_contents('./secure/basket'));
        $data = unserialize(file_get_contents('./secure/data'));
        foreach ($basket as $key => $arg) 
        {
            if ($arg['login'] === $_SESSION['loggued_on_user'])
                $cart = 1;
            if ($cart && !$disp)
            {
                $disp = 1;
                if ($basket[$key]['glasses1'] > 0)
                {
                    $price1 = $basket[$key]['glasses1'] * $data['g1_pr'];
                    echo '<tr><td>' . $data['glasses1'] . '</td><td>' . $basket[$key]['glasses1'] . '</td><td> $' . $data['g1_pr'] . '</td><td> $' . $price1 . '</td></tr>';
                }
                if ($basket[$key]['glasses2'] > 0)
                {
                    $price2 = $basket[$key]['glasses2'] * $data['g1_pr'];
                    echo '<tr><td>' . $data['glasses2'] . '</td><td>' . $basket[$key]['glasses2'] . '</td><td> $' . $data['g2_pr'] . '</td><td> $' . $price2 . '</td></tr>';
                }
                if ($basket[$key]['glasses3'] > 0)
                {
                    $price3 = $basket[$key]['glasses3'] * $data['g1_pr'];
                    echo '<tr><td>' . $data['glasses3'] . '</td><td>' . $basket[$key]['glasses3'] . '</td><td> $' .$data['g3_pr'] . '</td><td> $' . $price3 . '</td></tr>';
                }
                if ($basket[$key]['glasses4'] > 0)
                {
                    $price4 = $basket[$key]['glasses4'] * $data['g1_pr'];
                    echo '<tr><td>' . $data['glasses4'] . '</td><td>' . $basket[$key]['glasses4'] . '</td><td> $' . $data['g4_pr'] . '</td><td> $' . $price4 . '</td></tr>';
                }
                if ($basket[$key]['glasses5'] > 0)
                {
                    $price5 = $basket[$key]['glasses5'] * $data['g1_pr'];
                    echo '<tr><td>' . $data['glasses5'] . '</td><td>' . $basket[$key]['glasses5'] . '</td><td> $' . $data['g5_pr'] . '</td><td> $' . $price5 . '</td></tr>';
                }
                if ($basket[$key]['glasses6'] > 0)
                {
                    $price6 = $basket[$key]['glasses6'] * $data['g1_pr'];
                    echo '<tr><td>' . $data['glasses6'] . '</td><td>' . $basket[$key]['glasses6'] . '</td><td> $' . $data['g6_pr'] . '</td><td> $' . $price6 . '</td></tr>';
                }
                if ($basket[$key]['glasses7'] > 0)
                {
                    $price7 = $basket[$key]['glasses7'] * $data['g1_pr'];
                    echo '<tr><td>' . $data['glasses7'] . '</td><td>' . $basket[$key]['glasses7'] . '</td><td> $' . $data['g7_pr'] . '</td><td> $' . $price7 . '</td></tr>';
                }
                if ($basket[$key]['glasses8'] > 0)
                {
                    $price8 = $basket[$key]['glasses8'] * $data['g1_pr'];
                    echo '<tr><td>' . $data['glasses8'] . '</td><td>' . $basket[$key]['glasses8'] . '</td><td> $' . $data['g8_pr'] . '</td><td> $' . $price8 . '</td></tr>';
                }
                if ($basket[$key]['glasses9'] > 0)
                {
                    $price9 = $basket[$key]['glasses9'] * $data['g1_pr'];
                    echo '<tr><td>' . $data['glasses9'] . '</td><td>' . $basket[$key]['glasses9'] . '</td><td> $' . $data['g9_pr'] . '</td><td> $' . $price9 . '</td></tr>';
                }
                $totalprice = $price1 + $price2 + $price3 + $price4 + $price5 + $price6 + $price7 + $price8 + $price9;
            }
        }
    }
?>
        </td><td></td><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
                <tr><td><?php echo 'Final Total: </td><td> $' . $totalprice . '</td>'; ?>
        </td><td>
        </table>
    
            <tr>
                <td><a href="./basketedit.php">Edit Cart</a></td>
             <td><input type="submit" name="update" value="Checkout" /></td>
            </tr>
        
    </form>
</body>
</html>
