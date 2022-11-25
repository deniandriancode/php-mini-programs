<?php

require_once "config.php";

$username = "";
$password = "";
$confirmPassword = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = mysqli_prepare($link, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $username, $password);
    $username = trim($_POST["username"]);
    $password = password_hash(trim($_POST["password"]), PASSWORD_DEFAULT);
    mysqli_stmt_execute($stmt);

    $username = "";
    $password = "";
    $confirmPassword = "";
    mysqli_stmt_close($stmt);
    header("location: /login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="/bootstrap/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <div class="row">
            <div class="col col-md-6">
                <h1>Sign Up For Free</h1>
                <p>We always welcome new folks!</p>
                <form action="" method="POST" autocomplete="off">
                    <input type="text" name="username" placeholder="Username" class="form-control mt-2" required>
                    <input type="password" name="password" placeholder="Password" class="form-control mt-2" required>
                    <input type="password" name="confirmPassword" placeholder="Confirm Password" class="form-control mt-2" required>
                    <div class="my-3">
                        <button class="btn btn-primary" type="submit">Sign Up</button>
                        <a href="/index.php" class="btn btn-outline-secondary" type="button">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
