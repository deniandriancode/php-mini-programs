<?php

$name = $email = $website = $comment = $gender = "";

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = test_input($_POST["name"]);
	$email = test_input($_POST["email"]);
	$website = test_input($_POST["website"]);
	$comment = test_input($_POST["comment"]);
	$gender = test_input($_POST["gender"]);

	echo "<p>Name: $name</p>";
	echo "<p>Email: $email</p>";
	echo "<p>Website: $website</p>";
	echo "<p>Comment: $comment</p>";
	echo "<p>Gender: $gender</p>";
}

?>
