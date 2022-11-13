<?php

$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);
echo "<br>";
echo "Cars are " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
echo "<br>";

$person = array(
  "Peter"=>35,
  "John"=>28,
  "Yuna"=>26
);
foreach ($person as $name => $age) {
  echo "$name : $age<br>";
}

?>
