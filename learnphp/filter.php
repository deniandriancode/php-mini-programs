<?php

$num = [1, 2, 3, 4, 5, 6, 7, 8, 9];

function even(int $n): bool
{
    return $n % 2 === 0;
}

$num_even = array_filter($num, "even");
print_r($num_even);

?>
