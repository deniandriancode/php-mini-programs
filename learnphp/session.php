<?php

session_start();

$_SESSION["user"] = "admin";
$_SESSION["roles"] = ["administrator", "approver", "editor"];

echo session_save_path();

?>
