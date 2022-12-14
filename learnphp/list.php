<?php

$prices = array(100, 0.2);
list($fst, $snd) = $prices;

var_dump($fst, $snd);

$person = [
    "firstName" => "John",
    "lastName" => "Doe",
    "age" => 25
];

list(
    "firstName" => $fname,
    "lastName" => $lname,
    "age" => $ageNum
) = $person;

var_dump($fname, $lname, $ageNum);

?>
