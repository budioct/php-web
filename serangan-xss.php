<?php

/**
 * Cross Site Scripting (xss)
 * ● XSS merupakan celah keamanan yang biasanya dieksploitasi oleh penyerang dengan cara mengirim
 * script pada parameter
 * ● Jika sampai pembuat kode salah melakukan render halaman web, maka script tersebut akan di
 * render di halaman web, dan bisa menyebabkan penyerang mengirimkan kode JavaScript
 * ● Hal ini sangat berbahaya, karena penyerang bisa mencuri session pengguna yang sedang login di
 * web kita
 *
 * kita masukan query param seperti di bawah
 * http://localhost:8080/serangan-xss.php?name=Budhi<h1><script>alert("Ups di Heck")</script><h1>
 * http://localhost:8080/serangan-xss.php?name=Budhi%3Ch1%3E%3Cscript%3Ealert(%22Ups%20di%20Heck%22)%3C/script%3E%3Ch1%3E
 */

//$say = "Hello " . $_GET['name']; // tidak safe
$say = "Hello " . htmlspecialchars($_GET['name']); // htmlspecialchars() // safe dari scripting url
?>
<html>
<head>
    <title>Serangan XSS</title>
</head>
<body>
<h1><?= $say ?></h1>
</body>
</html>