<?php
    session_start();
    if (!file_exists('./secure')) 
        mkdir("./secure");
    if (!file_exists('./secure/password')) 
        file_put_contents('./secure/password', null);
    if (!file_exists('./secure/deletelog')) 
        file_put_contents('./secure/deletelog', null);
    if (!file_exists('./secure/createlog')) 
        file_put_contents('./secure/createlog', null);
    if (!file_exists('./secure/checkout')) 
        file_put_contents('./secure/checkout', null);
    if (!file_exists('./secure/basket')) 
        file_put_contents('./secure/basket', null);
	if (!file_exists('./secure/data')) 
		file_put_contents('./secure/data', null);

	$account = unserialize(file_get_contents('./secure/password'));
	$temp['login'] = "admin";
	$temp['passwd'] = hash('whirlpool', "admin");
	$account[] = $temp;
	file_put_contents('./secure/password', serialize($account));

	$data = unserialize(file_get_contents('./secure/data'));
	$temp['g1_pr'] = 120;
	$temp['g1_cat'] = 1;
	$temp1['glasses1'] = "Pair 1";

	$temp['g2_pr'] = 140;
	$temp['g2_cat'] = 1;
	$temp1['glasses2'] = "Pair 2";

	$temp['g3_pr'] = 100;
	$temp['g3_cat'] = 1;
	$temp1['glasses3'] = "Pair 3";

	$temp['g4_pr'] = 160;
	$temp['g4_cat'] = 1;
	$temp1['glasses4'] = "Pair 4";

	$temp['g5_pr'] = 90;
	$temp['g5_cat'] = 1;
	$temp1['glasses5'] = "Pair 5";

	$temp['g6_pr'] = 100;
	$temp['g6_cat'] = 1;
	$temp1['glasses6'] = "Pair 6";

	$temp['g7_pr'] = 120;
	$temp['g7_cat'] = 1;
	$temp1['glasses7'] = "Pair 7";

	$temp['g8_pr'] = 180;
	$temp['g8_cat'] = 2;
	$temp1['glasses8'] = "Pair 8";

	$temp['g9_pr'] = 150;
	$temp['g9_cat'] = 1;
	$temp1['glasses9'] = "Pair 9";

	$temp['g10_pr'] = 120;
	$temp['g10_cat'] = 2;
	$temp1['glasses10'] = "Pair 10";

	$temp['g11_pr'] = 180;
	$temp['g11_cat'] = 2;
	$temp1['glasses11'] = "Pair 11";

	$data = $temp;
	file_put_contents('./secure/data', serialize($data));
	echo "Finished";
	
?>
