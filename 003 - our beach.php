<?php

	$story = array('title'=>'Our beach adventure',
				   'items_we_found'=>array(
				   		array('type'=>'shellfish','name'=>'Lizzy the Lobster'),
				   		array('type'=>'cat','name'=>'Gerald the Sea Tiger')
				   	), // items_we_found
				   );


	echo $story['title'];
	echo $story['items_we_found'][1]['name'];
?>

<h1>
	<?php
		echo $story['items_we_found'][1]['name'];
	?>
</h1>
