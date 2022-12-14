<?php

$fp = fopen("file.json", "r");
$data = fread($fp, filesize("file.json"));

$obj = json_decode($data);

echo $obj->name.PHP_EOL;
echo $obj->age.PHP_EOL;
echo $obj->city.PHP_EOL;

?>
