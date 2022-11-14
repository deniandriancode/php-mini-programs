<?php

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileUpload"]["name"]);
$uploadOK = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

var_dump($_FILES);

if (isset($_POST["submit"])) {
	$check = getimagesize($_FILES["fileUpload"]["tmp_name"]);
	if ($check !== false) {
		echo "File is an image " . $check["mime"] . ".";
	} else {
		echo "File is not an image.";
		$uploadOk = 0;
	}
}

?>
