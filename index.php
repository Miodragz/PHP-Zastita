<?php
if (isset($_SESSION)) { } else {
    session_start();
}
if (isset($_SESSION["LAST_ACTIVITY"])) {
    if ($_SESSION['LAST_ACTIVITY'] + 5 * 60 < time()) {
        session_unset();
        session_destroy();
        include 'index.php';
        die();
    }
}

?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../view/css/main.css">
    <style>
.button {
  font: bold 11px Arial;
  text-decoration: none;
  background-color: #EEEEEE;
  color: #333333;
  padding: 2px 6px 2px 6px;
  border-top: 1px solid #CCCCCC;
  border-right: 1px solid #333333;
  border-bottom: 1px solid #333333;
  border-left: 1px solid #CCCCCC;
}
    </style>
</head>

<body>
    <?php
    if (isset($_SESSION["logged"])) {
        $loggedUsername = $_SESSION["logged"];
        ?>
        
        <h1><?= $loggedUsername ?></h1>
        <a href="logoutcontroller.php" class="button">Logout</a>
    <?php } else { ?>
        <div class="container">
            <form action="zastitnikontroler.php" method="post">
                Username:<br>
                <input type="text" name="username" value="<?= $username ?>">
                <input type="submit" value="Register"><br>

            <?php } ?>
</body>

</html>