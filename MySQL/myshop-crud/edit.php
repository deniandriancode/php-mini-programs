<?php
$servername = "localhost";
$username = "deni";
$password = "df";
$database = "tutorial";

$connection = new mysqli($servername, $username, $password, $database);

if ($connection->connect_error) {
	die("Error db");
}

$id = "";
$name = "";
$email = "";
$phone = "";
$address = "";

$errorMessage = "";
$successMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
	if (!isset($_GET["id"])) {
		header("location: /index.php");
		exit;
	}

	$id = $_GET["id"];
	$sql = "SELECT * FROM clients WHERE id=$id";
	$result = $connection->query($sql);
	$row = $result->fetch_assoc();

	if (!$row) {
		exit;
	}

	$name = $row["name"];
	$email = $row["email"];
	$phone = $row["phone"];
	$address = $row["address"];
} else {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$address = $_POST["address"];

	// if empty

	$sql = "UPDATE clients SET name='$name', email='$email', phone='$phone', address='$address' WHERE id=$id";
	$result = $connection->query($sql);

	header("location: /index.php");
}

?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8"/>
		<title>My Shop</title>
		<link href="/bootstrap.min.css" rel="stylesheet"/>
		<script type="text/javascript" src="/bootstrap.bundle.min.js"></script>
	</head>
	<body>
		<div class="container">
			<h2>New Client</h2>

			<?php

			if (!empty($errorMessage)) {
				echo "<p>$errorMessage</p>";
			}
			
			?>
			
			<form method="POST">
				<input type="hidden" name="id" value="<?php echo $id ?>" />
				<label for="name">Name</label>
				<input class="form-control" name="name" type="text" value="<?php echo $name ?>" id="name" required/>
				<label for="email">Email</label>
				<input class="form-control" name="email" type="email" value="<?php echo $email ?>" id="email" required/>
				<label for="phone">Phone</label>
				<input class="form-control" name="phone" type="text" value="<?php echo $phone ?>" id="phone" required/>
				<label for="address">Address</label>
				<input class="form-control" name="address" type="text" value="<?php echo $address ?>" id="address" required/>

				<div>
					<?php

					if (!empty($successMessage)) {
						echo "<p>$successMessage</p>";
					}
					
					?>
				</div>
				
				<button type="submit" class="btn btn-primary my-3">Submit</button>
				<a href="/index.php" role="button" class="btn btn-outline-secondary my-3">Cancel</a>
			</form>
		</div>
	</body>
</html>
