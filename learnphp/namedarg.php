<?php
declare(strict_types=1);

function find($needle, $haystack)
{
    echo $needle . $haystack . PHP_EOL;
}

find("Needle ", "Haystack");
find("Haystack ", "Needle");
find(
    haystack: "Haystack", needle: "Needle "
);

?>
