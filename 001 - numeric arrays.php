<?php
	$groceries = array('bananas','strawberries','raspberries');

	// same exact thing
	$groceries = array();
	$groceries[0] = 'bananas';
	$groceries[1] = 'strawberries';
	$groceries[2] = 'raspberries';	

	for($i=0;$i<count($groceries);$i++) {
		echo $groceries[$i];
	}

	foreach($groceries as $index=>$item) {
		echo $item;
	}


?>