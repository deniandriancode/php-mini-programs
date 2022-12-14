<?php
declare(strict_types=1);

function concat(string $str1, string $str2)
{
    return $str1 . $str2;
}

$hello_world = concat("Hello, ", "World");
//echo $hello_world . PHP_EOL;

/* pass by value */
function increase_v1(int $val)
{
    $val += 1;
    echo 'v1 - ' . $val . PHP_EOL;
}

/* pass by reference */
function increase_v2(int &$val)
{
    $val += 1;
    echo 'v2 - ' . $val . PHP_EOL;
}

$num = 5;

echo $num . PHP_EOL;
increase_v1($num);
echo $num . PHP_EOL;
increase_v2($num);
echo $num . PHP_EOL;

?>
