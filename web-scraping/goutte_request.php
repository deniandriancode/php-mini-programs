<?php

require_once __DIR__ . "/" . "vendor/autoload.php";

use Goutte\Client;

$client = new Client();

$crawler = $client->request("GET", "https://www.scraperapi.com/blog/simple-guide-to-building-a-php-web-scraper-using-goutte-for-beginners/");

$content = $crawler->filter(".elementor-widget-container");

$paraphs = $content->filter("p");
$paraphs->each(function ($node) {
	$handle = fopen("simple-guide-to-building-a-php-web-scraper-using-goutte-for-beginners.txt", "a");
	$line = $node->text().PHP_EOL;
	fwrite($handle, $line . PHP_EOL);
});

?>
