<?php

require_once "config.php";

$username = "";
$password = "";
$result = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = mysqli_prepare($link, $sql);

    $username = trim($_POST["username"]);
    $password = password_hash(trim($_POST["password"]), PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ss", $username, $password);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: /index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="/bootstrap/bootstrap.min.css">
</head>
<body>

    <div class="container my-3">
        <h1>Form of Website</h1>
        <div class="row my-3">
            <div class="col col-md-6">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                    <input class="form-control mb-2" name="username" type="text" placeholder="Username" required>
                    <input class="form-control mb-2" name="password" type="password" placeholder="Password" required>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>
