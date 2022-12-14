<?php

function func(int $num1, ?int $num2): float
{
    return (float) $num1 / $num2;
}

$res = func(7, 13);
echo $res . PHP_EOL;

?>
