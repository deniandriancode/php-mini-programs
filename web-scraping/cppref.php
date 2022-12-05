<?php

require_once __DIR__ . "/" . "vendor/autoload.php";

use Goutte\Client;

$client = new Client();

$crawler = $client->request("GET", "https://en.cppreference.com/w/");

$table = $crawler->filter("table");

$anchor = $table->filter("a");

$anchor->each(function($node) {
	$handle = fopen ("cppreference.txt", "a");
	$link = $node->link()->getUri() . "\n";
	echo $link;
	fwrite ($handle, $link);
});

?>
