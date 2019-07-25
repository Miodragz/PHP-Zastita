<?php 
if (isset($_SESSION)) { } else {
    session_start();
}

header("Location: index.php");

?>