<?php

$servername = "localhost";
$username = "deni";
$password = "df";
$database = "tutorial";

$connection = new mysqli($servername, $username, $password, $database);

if ($connection->connect_error) {
    exit;
}

$name = "";
$email = "";
$phone = "";
$address = "";

$err = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];

    if (empty($name) || empty($email) || empty($phone) || empty($address)) {
        $err = 1;
        exit;
    } else {
        $sql = "INSERT INTO clients (name, email, phone, address) VALUE ('$name', '$email', '$phone', '$address')";
        $result = $connection->query($sql);
        $name = "";
        $email = "";
        $phone = "";
        $address = "";
        header("location: /index.php");
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create User</title>
    <link rel="stylesheet" href="/bootstrap.min.css">
    <script type="text/javascript" src="/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container py-5">
        <div class="row">
            <div class="col col-md-8">
                <h1>Create User</h1>
                <form method="POST" autocomplete="off">
                    <input class="form-control mb-2" type="text" name="name" placeholder="Name" required>
                    <input class="form-control mb-2" type="email" name="email" placeholder="Email" required>
                    <input class="form-control mb-2" type="text" name="phone" placeholder="Phone" required>
                    <input class="form-control mb-2" type="text" name="address" placeholder="Address" required>
                    <div class="my-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="/index.php" class="btn btn-outline-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
