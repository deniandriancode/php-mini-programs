<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8"/>
		<title>Include and Require</title>
	</head>
	<body>
		<nav>
			<?php
			include 'menu.php';
			?>
		</nav>
		<h1>Welcome to my home page!</h1>
		<p>Some text.</p>
		<p>Some more text.</p>
		<?php include 'vars.php';
		foreach ($cars as $car) {
			echo "$car<br>";
		}
		?>
		<?php
		include 'footer.php';
		?>
	</body>
</html>
