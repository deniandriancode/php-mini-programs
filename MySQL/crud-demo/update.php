<?php
require "database.php";

$id = "";
$name = "";
$email = "";
$phone = "";
$address = "";

$err = 0;

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET["id"];
    $sql = "SELECT * FROM clients WHERE id=$id";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();
    $name = $row["name"];
    $email = $row["email"];
    $phone = $row["phone"];
    $address = $row["address"];
} else {
    $id = (int) $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];

    if (empty($name) || empty($email) || empty($phone) || empty($address)) {
        $err = 1;
        exit;
    } else {
        $sql = "UPDATE clients SET name='$name', email='$email', phone='$phone', address='$address' WHERE id=$id";
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
                    <input type="hidden" name="id" value="<?php echo $id ?>" required>
                    <input class="form-control mb-2" type="text" name="name" placeholder="Name" value="<?php echo $name ?>" required>
                    <input class="form-control mb-2" type="email" name="email" placeholder="Email" value="<?php echo $email ?>" required>
                    <input class="form-control mb-2" type="text" name="phone" placeholder="Phone" value="<?php echo $phone ?>" required>
                    <input class="form-control mb-2" type="text" name="address" placeholder="Address" value="<?php echo $address ?>" required>
                    <div class="my-3">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="/index.php" class="btn btn-outline-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
