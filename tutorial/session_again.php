<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Session</title>
</head>
<body>
    
<?php
session_start();

if (isset($_SESSION["firstname"])) {

    echo $_SESSION["firstname"] . " " . $_SESSION["lastname"];
}


?>

<p>
<a href="/session.php?q=1">End session</a>
</p>

</body>
</html>
