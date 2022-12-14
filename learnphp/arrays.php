<?php

$myarray = array(1,2,3); // or
// $myarray = [1,2,3];
print_r($myarray);

$empty_array = array(); // or
$empty_array = [];
print_r($empty_array);

// adding element to array
$empty_array[] = 5;
print_r($empty_array);

// removing element
unset($empty_array[0]);
print_r($empty_array);

// get the size
echo count($myarray) . PHP_EOL;

?>
