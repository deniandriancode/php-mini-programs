<?php

setcookie("username", "John Doe", time() + (30*24*60*60));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cookies</title>
</head>
<body>
    
    <?php
    
    if (isset($_COOKIE["username"])) {
        print_r($_COOKIE);
        echo "Hi " . $_COOKIE["username"];
    } else {
        echo "Welcome Guest";
    }

    ?>

</body>
</html>
