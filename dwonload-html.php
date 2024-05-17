<?php

/**
 * Download File
 * ● Saat membuat web, kadang-kadang kita butuh mengembalikan content berupa file yang butuh di
 *   download oleh client
 * ● Sebenarnya, kita bisa langsung mengakses file tersebut melalui URL, namun kita kita mau, kita juga
 *   bisa menggunakan PHP untuk membuat content dalam bentuk file dan memaksa client untuk
 *   mendownload nya
 *
 * Download File di PHP
 * ● Memaksa client untuk melakukan download file, sebenarnya sudah ada di standard HTTP Header,
 *   ini menggunakan Content-Disposition :
 *   https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Disposition
 * ● Jadi di PHP kita cukup dengan menambahkan header tersebut, maka kita bisa secara otomatis
 *   memaksa browser untuk download file yang kita buat menggunakan PHP
 * ● Untuk membaca file dan me-load nya di PHP, kita bisa menggunakan function readfile(filename) :
 *   https://www.php.net/manual/en/function.readfile.php
 */

header('Content-Disposition: attachment; filename="download.html"'); // header() // set attachment dan filename.. suapaya saat halaman di akses akan dwonload otomatis
?>


<html>
<head>
    <title>Download HTML</title>
</head>
<body>
<h1>Download HTML</h1>
</body>
</html>

<!--
Request URL: http://localhost:8080/dwonload-html.php
Request Method: GET
Status Code: 200 OK
Remote Address: [::1]:8080
Referrer Policy: strict-origin-when-cross-origin

Connection: close
Content-Disposition: attachment; filename="download.html"
Content-Type: text/html; charset=UTF-8
Date: Fri, 17 May 2024 07:19:11 GMT
Host: localhost:8080
X-Powered-By: PHP/8.1.25

-->
