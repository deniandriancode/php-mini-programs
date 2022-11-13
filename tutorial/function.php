<?php
declare(strict_types=1);

function hi() {
  echo "Hi";
}

function greet($name) {
  echo "How are you, $name?<br>";
}

function addNumbers(int $a, int $b) {
  return $a + $b;
}

hi();
echo "<br>";
greet("Frank");
greet("Chelsea");
greet("John");

echo addNumbers(4, 5);
echo "<br>";

?>
