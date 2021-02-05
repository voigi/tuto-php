<?php

require __DIR__ . '/vendor/autoload.php';
 use Curl\Curl;

 $artistname = $_GET['artist'];
	$song = $_GET['song'];

	$curl = new Curl();
	$curl->get("https://api.lyrics.ovh/v1/$artistname/$song");

	if ($curl->error) {
		echo 'Error: ' . $curl->errorCode . ': ' . $curl->errorMessage . "\n";
	} else {
		echo "<h1> $song by $artistname </h1><br>";
		echo '<hr>';
		echo nl2br($curl->response->lyrics);
	}