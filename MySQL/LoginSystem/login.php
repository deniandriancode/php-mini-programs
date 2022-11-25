<?php

session_start();

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true) {
    header("location: /welcome.php");
}

require_once "config.php";

$username = "";
$password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql = "SELECT password FROM users WHERE username=?";
    $stmt = mysqli_prepare($link, $sql);
    mysqli_stmt_bind_param($stmt, "s", $username);
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $retrievedPassword);
    mysqli_stmt_fetch($stmt);

    if (password_verify($password, $retrievedPassword)) {
        echo "<h1>HELLO THERE</h1>";
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $username;
        mysqli_stmt_close($stmt);
        header("location: /welcome.php");
    } 
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="/bootstrap/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <div class="row">
            <div class="col col-md-6">
                <h1>We Build The City</h1>
                <p>City is part of a country!</p>
                <form action="" method="POST" autocomplete="off">
                    <input type="text" name="username" placeholder="Username" class="form-control mt-2" required>
                    <input type="password" name="password" placeholder="Password" class="form-control mt-2" required>
                    <div class="my-3">
                        <button class="btn btn-primary" type="submit">Login</button>
                        <a href="/index.php" class="btn btn-outline-secondary" type="button">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

