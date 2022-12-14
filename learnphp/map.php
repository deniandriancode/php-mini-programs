<?php

$arr = [1,2,3,4,5];

function double_it(int $num): int
{
    return $num * 2;
}

$arr_double = array_map("double_it", $arr);
print_r($arr_double);

?>
