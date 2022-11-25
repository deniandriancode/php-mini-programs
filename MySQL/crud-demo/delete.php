<?php
require "database.php";

$id = (int)$_GET["id"];
if (empty($id)) {
    header("location: /index.php");
    exit;
} else {
    $sql = "DELETE FROM clients WHERE id=$id";
    $result = $connection->query($sql);
    header("location: /index.php");
}

?>
