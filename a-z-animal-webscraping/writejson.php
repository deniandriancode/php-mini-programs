<?php

$obj = new stdClass();

$obj->name = "John";
$obj->age = 34;
$obj->city = "New York";

$json = json_encode($obj);

$fp = fopen("file.json", "w");
fwrite($fp, $json);
fclose($fp);

echo $json;

?>
