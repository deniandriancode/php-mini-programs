<?php

$num = [1, 2, 3, 4, 5, 6, 7, 8, 9];

function foldl(mixed $prev, int $cur): int
{
    return $prev + $cur;
}

$sum = array_reduce($num, "foldl");

print_r($sum);

?>
