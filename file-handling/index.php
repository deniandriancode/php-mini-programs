<!--<?php

$filename = "webdictionary.txt";
if (file_exists($filename)) {
    echo readfile($filename);
}

?>-->

<?php

$filename = "webdictionary.txt";
$fp = fopen($filename, "r");
/* echo fread($fp, filesize($filename)); */
while(!feof($fp)) {
	echo fgetc($fp);
}
fclose($fp);

?>

<?php

$names = array(
	"John",
	"Jane",
	"Jimmy",
	"Brandon",
	"Jennifer",
	"Britney",
	"Charless",
	"Browney",
	"Anderson"
);

$filename = "names.txt";
$fp = fopen($filename, "w");

foreach ($names as $name) {
	fwrite($fp, $name . "\n");
}

fclose ($fp);

?>
