<?php

$x = 5;
while ($x > 0) {
  echo "WHILE<br>";
  --$x;
}

$x = 5;
do {
  echo "DO WHILE<br>";
  --$x;
} while ($x > 0);

for ($i = 0; $i < 10; ++$i) {
  echo "FOR<br>";
}

$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $color) {
  echo "$color ";
}
echo "<br>";

?>
