<?php

/* define: runtime */
$condition = true;

if ($condition) {
	define("WIDTH", 255);
} else {
	define("WIDTH", 112);
}

/* const: compile time */
const HEIGHT = 500;

echo WIDTH . "x" . HEIGHT . PHP_EOL;

?>
