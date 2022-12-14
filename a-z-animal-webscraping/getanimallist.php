<?php

require __DIR__ . "/vendor/autoload.php";

use Goutte\Client;

function display($node)
{
    $node->each(function ($item) {
        echo $item->text().PHP_EOL;
    });
}

$client = new Client();

$crawler = $client->request("GET", "https://a-z-animals.com/animals");
$container = $crawler->filter(".container");
$ul = $container->filter("ul");
$li_arr = $ul->filter("li a");

//$li_arr->each(function ($node) {
    //$handle = fopen("animal-list.txt", "a");
    //fwrite($handle, $node->text().PHP_EOL);
//});

//$li_arr->each(function ($node) {
    //$handle = fopen("animal-list-link.txt", "a");
    //fwrite($handle, $node->link()->getUri().PHP_EOL);
//});

?>
