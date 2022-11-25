<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="/bootstrap.min.css">
    <script type="text/javascript" src="/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container py-5">
    <h1>Welcome</h1>
    <a href="/create.php" class="btn btn-primary my-3">New User</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
                <th scope="col">Created At</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
<?php 
require "database.php";

$sql = "SELECT * FROM clients";
$result = $connection->query($sql);

if (!$result) {
    exit;
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
<a class='btn btn-success badge' href='/update.php?id=$row[id]'>Edit</a>
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
