<?php

	$story = array('title'=>'Our beach adventure',
				   'items_we_found'=>array(
				   		array('type'=>'shellfish','name'=>'Lizzy the Lobster'),
				   		array('type'=>'cat','name'=>'Gerald the Sea Tiger')
				   	), // items_we_found
				   );

	echo $story['items_we_found'][0]['type'];

	foreach($story as $key=>$value) {
		if($key == 'title') {
			echo $story['title']; // cat
			echo $value; // tiger
			echo $story[$key]; // lion

			// (all of those were the same)
		}
		else {
			for($i=0;$i<count($value);$i++) {
				foreach($value[$i] as $subkey=>$subvalue) {
					echo $subkey // type,name
					echo $subvalue; // shellfish,Lizzy the Lobster
				}
			}
		}
	}

?>