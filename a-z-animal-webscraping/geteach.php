<?php

require_once __DIR__ . "/vendor/autoload.php";
require "common.php";

use Goutte\Client;

$client = new Client();

function get_detail($url) {
    global $client;

    $response = $client->request("GET", $url);

    /* Fields:
     * - name
     * - scientific name
     * - fun fact
     * - location
     * - diet
     * - habitat
     * - lifestyle */

    $body = $response->filter("body");

    $animal_name = $body->filter("#title-header h1")->text();
    
    $animal_scientific_name_data = $body->filter(".row.animal-facts-box dl dt");
    $animal_scientific_name = $animal_scientific_name_data->each(function($node) {
        if (trim($node->text()) === "Scientific Name") {
            return $node->nextAll()->first()->text();
        }
    });
    
    $animal_fun_fact = $body->filter("blockquote p")->text();

    $animal_location = $body->filter(".row.animal-facts-box .col-lg-6")->last()->filter("ul li")->text();
    
    $animal_diet = $body->filter(".row.animal-facts-box dt");
    $animal_diet = $animal_diet->each(function($node) {
        if (trim($node->text()) === "Diet") {
            return $node->nextAll()->first()->text();
        }
    });
    
    $animal_habitat = $body->filter(".row.animal-facts-box")->last()->filter(".col-lg-8 dl dt");
    $animal_habitat = $animal_habitat->each(function($node) {
        if (trim($node->text()) === "Habitat") {
            return $node->nextAll()->first()->text();
        }
    });
    
    $animal_lifestyle = $body->filter(".row.animal-facts-box")->last()->filter(".col-lg-8 dl dt");
    $animal_lifestyle = $animal_lifestyle->each(function($node) {
        if (trim($node->text()) === "Lifestyle") {
            return $node->nextAll()->first()->text();
        }
    });

    $obj = new stdClass();
    $obj->commonName = $animal_name;
    $obj->scientificName = $animal_scientific_name;
    $obj->funFact = $animal_fun_fact;
    $obj->location = $animal_location;
    $obj->diet = $animal_diet;
    $obj->habitat = $animal_habitat;
    $obj->lifeStyle = $animal_lifestyle;
    
    return $obj;
}


$filename = "animal-list-link.txt";
$fp = fopen($filename, "r");
$animal_list_str = fread($fp, filesize($filename));
$animal_list = explode(PHP_EOL, $animal_list_str);

//foreach ($animal_list as $item) {
    //get_detail($item);
//}

$url = $animal_list[0];
$data = get_detail($url);

$dataJSON = json_encode($data);
$handle = fopen("api.json", "w");
fwrite($handle, $dataJSON);
fclose($handle);
fclose($fp);

?>
