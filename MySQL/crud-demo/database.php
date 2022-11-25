<?php 

$servername = "localhost";
$username = "deni";
$password = "df";
$database = "tutorial";

$connection = new mysqli($servername, $username, $password, $database);

if ($connection->connect_error) {
    exit;
}

?>
