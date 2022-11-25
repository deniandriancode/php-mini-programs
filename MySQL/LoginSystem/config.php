<?php

define("DB_SERVER", "localhost");
define("DB_USERNAME", "deni");
define("DB_PASSWORD", "");
define("DB_NAME", "tutorial");

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($link === false) {
    die("ERROR: connection failed " . mysqli_connect_error());
}

?>
