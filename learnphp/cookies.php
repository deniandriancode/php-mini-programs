<?php

define("ONEWEEK", 7 * 86400);

$logged_in = false;

if (!isset($_COOKIE["user"])) {
    setcookie("user", "serverLess", time() + ONEWEEK);
} else {
    $logged_in = true;
}

?>

<?php if ($logged_in): ?>
    <h2>Welcome back <?= $_COOKIE["user"] ?>!</h2>
<?php else: ?>
    <h2>It's your first time. Please sign up</h2>
<?php endif ?>
