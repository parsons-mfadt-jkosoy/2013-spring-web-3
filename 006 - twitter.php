<?php
	$url = "http://search.twitter.com/search.json?q=mfadt";

	$result = file_get_contents($url); 
	$twitterData = json_decode($result,true);

	for($i=0;$i<count($twitterData['results']);$i++) {
		echo $twitterData['results'][$i]['text'];
		echo "<img src='" . $twitterData['results'][$i]['profile_image_url'] . "' />";
	}
?>