<?php

echo "Today is " . date("Y/m/d") . "<br/>";
echo "Today is " . date("Y.m.d") . "<br/>";
echo "Today is " . date("Y-m-d") . "<br/>";
echo "Today is " . date("l") . "<br/>";

?>

<?php

echo "The time is " . date("H:i:s") . "<br/>";
date_default_timezone_set("America/New_York");
echo "The time is " . date("H:i:s") . "<br/>";

?>

<?php

$timeSet = mktime(11, 14, 54, 8, 12, 2014);
echo "Time set is " . date("Y-m-d H:i:s", $timeSet) . "<br/>";

?>

<?php

$timeSet = strtotime("10:30pm April 15 2014");
echo "Time set is " . date("Y-m-d H:i:s", $timeSet) . "<br/>";

?>

<?php

$startDate = strtotime("Saturday");
$endDate = strtotime("+6 weeks", $startDate);

while ($startDate < $endDate) {
	echo date("M d", $startDate) . "<br/>";
	$startDate = strtotime("+1 week", $startDate);
}

?>

<?php

echo "&copy; 2016-" . date("Y");

?>

