<?php

$message = "hi";
$say = function () use (&$message) {
    $message = "Hello world";
    echo $message . PHP_EOL;
};

$say();
echo $message . PHP_EOL;

 ?>
