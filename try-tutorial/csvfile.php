<?php

$handle = fopen("data.csv", "r");
$line = fgetcsv($handle);
print_r($line);
$line = fgetcsv($handle);
print_r($line);

$handle = fopen("data.csv", "a");
$line = array("4", "Penny", 26);
fputcsv ($handle, $line);

?>
