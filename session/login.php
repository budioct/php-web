<?php

/**
 * note:
 * untuk menggunakan $_SESSION sebelumnya kita jalankan session_start();
 */

session_start(); // initialized session php

// jika session login bernilai true maka akan di redirect ke halaman member
if ($_SESSION['login'] == true) {
    header('Location: /session/member.php'); // redirect halaman
    exit();
}

$error = "";

// proses form input dan juga validasi session
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if ($_POST['username'] == "budhi" && $_POST['password'] == 'budhi') {
        // sukses
        $_SESSION['login'] = true; // jika berhasil login makan session login di set true
        $_SESSION['username'] = 'budhi'; // jika berhasil login maka session username value di set budhi
        header('Location: /session/member.php'); // redirect halaman member.php
        exit(); // terminate
    } else {
        // gagal
        $error = "Login Gagal";
    }
}

?>

<html>
<body>
<?php if ($error != "") { ?>
    <h2><?= $error ?></h2>
<?php } ?>
<h1>Login</h1>
<form action="/session/login.php" method="post">
    <label>Username :
        <input type="text" name="username">
    </label>
    <br/>
    <label>Password :
        <input type="password" name="password">
    </label>
    <br/>
    <input type="submit" value="Login">
</form>
</body>
</html>