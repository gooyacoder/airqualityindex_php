<?php 

	$city = 'shiraz';

	$url = 'http://api.waqi.info/feed/' . $city . '/?token=e6089546a3dc14e1fe3d717777e9c7df3e7e5f99';

	$json = file_get_contents($url);

	$result = json_decode($json, true);

	echo "<h1>" . $result['data']['aqi'] . "<h1>";

?>