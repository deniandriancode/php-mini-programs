<?php
declare(strict_types=1);

function clear()
{
    print("\033[2J\033[;H");
}

$permissions = [
	'edit',
	'delete',
	'view'
];

array_unshift($permissions, "new");

print_r($permissions);

$colors = [
    "red" => "#ff0000",
    "green" => "#00ff00",
    "blue" => "#0000ff"
];

$colors = ["black" => "#000000"] + $colors;

array_push($permissions, "alter");
print_r($permissions);

$colors["white"] = "#ffffff";

$last_item = array_pop($permissions);
$first_item = array_shift($permissions);

/* clear the console */
clear();

$numbers = array(11, 22, 33, 44, 55, 66);
$keys = array_keys($numbers);
echo "Keys are: ";
print_r($keys);

$user = [
	'username' => 'admin',
	'email' => 'admin@phptutorial.net',
	'is_active' => '1'
];

$props = array_keys($user);
print_r($props);

$actions = array(
    "new",
    "edit",
    "update",
    "view",
    "delete"
);

$result = in_array("view", $actions);
print_r($result . PHP_EOL);

function format_name(string $first, string $middle, $last): string
{
    return $middle ? "$first $middle $last" : "$first $last";
}

$fullname = array(
    "first" => "John",
    "middle" => "V.",
    "last" => "Doe"
);

echo format_name(...$fullname) . PHP_EOL;;

?>
