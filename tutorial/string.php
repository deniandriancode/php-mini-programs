<?php

$mystr = "Consectetur quas labore tempora blanditiis quo dolor, delectus id corrupti minus? Corporis dignissimos voluptatibus dolores?";

echo strlen($mystr);
echo "<br>";
echo str_word_count($mystr);
echo "<br>";
echo strrev("Cars");
echo "<br>";
echo strpos($mystr, "quas");
echo "<br>";
echo str_replace("quas", "iothen", $mystr);

?>
