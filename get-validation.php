<?php

/**
 * Response Code
 * ● Dalam spesifikasi HTTP, response dari server biasanya memiliki code, atau dikenal HTTP Response
 *   Code
 * ● Secara default, di PHP, response code adalah 200 OK
 * ● Ada banyak sekali HTTP Response Code :
 *   https://developer.mozilla.org/id/docs/Web/HTTP/Status
 * ● Dalam pembuatan website mungkin kita jarang sekali melakukan perubahan response code,
 *   namun jika nanti kita ingin membuat API menggunakan PHP, response code sangat penting
 *   digunakan
 */

if (!isset($_GET['name']) || $_GET['name'] == "") {
    http_response_code(400); // http_response_code() // set HTTP response code ke client
    echo "Name is Required";
    exit();
}

$say = "Hello " . htmlspecialchars($_GET['name']); // htmlspecialchars() supaya tidak xss dari query param

?>

<html>
<head>
    <title>response status code</title>
</head>
<body>
<h1>Hello <?= $say ?></h1>
</body>
</html>

<!--
result: ketika query param value tidak di isi maka akan keluar pesan error dan response status 400 Bad Request (dari user)
Request URL: http://localhost:8080/get-validation.php?name=
Request Method: GET
Status Code: 400 Bad Request
Remote Address: [::1]:8080
Referrer Policy: strict-origin-when-cross-origin

ketika query param di isi maka response status code 200 OK
Request URL: http://localhost:8080/get-validation.php?name=budhi
Request Method: GET
Status Code: 200 OK
Remote Address: [::1]:8080
Referrer Policy: strict-origin-when-cross-origin

-->