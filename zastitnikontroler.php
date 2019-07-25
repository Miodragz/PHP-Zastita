<?php
$username = $_POST['username'] ?? [];

//obrada
if (empty($username)) {
    header("Location: index.php");
} else {
    session_start();
$_SESSION["logged"] = $username;
$_SESSION["LAST_ACTIVITY"] = time();
include 'zastita2.php';
die(); }
?>