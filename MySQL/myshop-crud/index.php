<!doctype html>
<html lang="en">
		<head>
				<meta charset="UTF-8"/>
				<title>My Shop</title>
				<link href="/bootstrap.min.css" rel="stylesheet"/>
				<script type="text/javascript" src="/bootstrap.bundle.min.js"></script>
		</head>
		<body>
				<div class="container py-5">
						<h1>List of Clients</h1>
						<p>
								<a class="btn btn-primary" href="/create.php">New Client</a>
						</p>
				<table class="table">
						<thead>
								<tr>
										<th class="col">ID</th>
										<th class="col">Name</th>
										<th class="col">Email</th>
										<th class="col">Phone</th>
										<th class="col">Address</th>
										<th class="col">Created At</th>
										<th class="col">Action</th>
								</tr>
						</thead>
						<tbody>
								<?php
								$servername = "localhost";
								$username = "deni";
								$password = "df";
								$database = "tutorial";

								$connection = new mysqli($servername, $username, $password, $database);

								if ($connection->connect_error) {
										die("Error!!!" . $connection->connect_error);
								}

								$sql = "SELECT * FROM clients";
								$result = $connection->query($sql);

								if (!$result) {
										die("Error" . $connection->error);
								}

								while ($row = $result->fetch_assoc()) {
										echo "
										<tr>
<td>$row[id]</td>
<td>$row[name]</td>
<td>$row[email]</td>
<td>$row[phone]</td>
<td>$row[address]</td>
<td>$row[created_at]</td>
<td>
<a class='btn btn-primary badge' href='/edit.php?id=$row[id]'>Edit</a>
<a class='btn btn-danger badge' href='/delete.php?id=$row[id]'>Delete</a>
</td>
										</tr>
										";
								}

								?>
						</tbody>
				</table>
				</div>
		</body>
</html>
