<?php
declare(strict_types=1);

$num = 5;
$tips = 99;

if ($num > 4 and $tips < 100) {
    echo "PHP is Rock" . PHP_EOL;
}

function connect_to_db()
{
    return false;
}

connect_to_db() || die("Cannot connect to the database");

?>
