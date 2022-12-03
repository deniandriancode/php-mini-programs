<?php

// scraping books to scrape: https://books.toscrape.com/
require_once __DIR__ . "/" . "vendor/autoload.php";

$httpClient = new \GuzzleHttp\Client();
$response = $httpClient->request("GET", "https://books.toscrape.com/");

$htmlString = (string) $response->getBody();

libxml_use_internal_errors(true); // suppress any warnings
$doc = new DOMDocument();
$doc->loadHTML($htmlString);

$xpath = new DOMXPath($doc);

$titles = $xpath->evaluate("//ol[@class='row']//li//article//h3//a");
foreach ($titles as $title) {
	echo $title->textContent.PHP_EOL;
}

?>
