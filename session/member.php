<?php
session_start();

if($_SESSION['login'] != true){
    header('Location: /session/login.php');
    exit();
} // jika session tidak ada maka akan di redirect ke halaman login

$say = "Hello " . $_SESSION['username'];
?>

<html>
<body>
<h1><?= $say ?></h1>
<a href="/session/logout.php">Logout</a>
</body>
</html>