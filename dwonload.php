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

if (isset($_GET['key']) && $_GET['key'] == 'rahasia') {
    header('Content-Disposition: attachment; filename="jpa___auditing.jpg"'); // filename="jpa_auditing.jpg // set nama file yang akan di dwonload
    header('Content-Type: image/jpeg/jpg'); // set header tipe content untuk user
    readfile(__DIR__ . '/file/jpa_auditing.jpg'); // readfile() // membaca relarive file
    exit();
} else {
    echo "Invalid Key";
}

/**
 * result:
 * akses url:  http://localhost:8080/dwonload.php?key=rahasia
 * maka otomatis akan dwonload file yang sudah di set
 *
 * // General
 * Request URL: http://localhost:8080/dwonload.php?key=rahasia
 * Request Method: GET
 * Status Code: 200 OK
 * Remote Address: [::1]:8080
 * Referrer Policy: strict-origin-when-cross-origin
 *
 * // Response
 * Connection: close
 * Content-Disposition: attachment; filename="jpa_auditing.jpg"
 * Content-Type: image/jpeg/jpg
 *
 * Date: Fri, 17 May 2024 07:15:23 GMT
 * Host: localhost:8080
 * X-Powered-By: PHP/8.1.25
 *
 */

