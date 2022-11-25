<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (!$_GET["q"]) {
        $_SESSION["firstname"] = "Peter";
        $_SESSION["lastname"] = "Parker";
    } else {
        session_destroy();
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Session</title>
</head>
<body>

<a href="/session_again.php">Go to specific page</a>
    
</body>
</html>
