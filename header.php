<?php

/**
 * Header
 * ● Dalam HTTP request dan response, terdapat data yang bernama Header
 * ● Header biasanya digunakan sebagai tempat menyimpan informasi tambahan diluar URL, METHOD
 *   dan BODY
 * ● Di PHP, kita bisa menangkap data header yang dikirim oleh Client atau membuat header di
 *   response dari Server
 *
 * Menerima Header Request
 * ● Semua header yang dikirim oleh Client, secara otomatis akan dimasukkan ke global variable
 *   $_SERVER
 * ● Namun key untuk header akan secara otomatis di konversi menjadi UPPERCASE, dan jika terdapat
 *   spasi atau - , akan otomatis diganti menjadi _
 * ● Selain itu untuk membedakan request header dan lainnya, khusus request header, akan ditambah
 *   prefix HTTP_
 * ● Misal header Content-Type akan menjadi HTTP_CONTENT_TYPE
 * ● Header Accept-Language akan menjadi HTTP_ACCEPT_LANGUAGE
 *
 * Menambah Header Response
 * ● Kadang kita ingin menambah informasi tambahan di HTTP response
 * ● Seperti versi aplikasi kita atau lainnya
 * ● Kita juga bisa menambahkan header dengan menggunakan function header(key, value) di PHP
 * ● Perlu diingat, di spesifikasi HTTP, header berada pada posisi atas sebelum content dibuat, oleh
 *   karena itu, pastikan menambah header sebelum kita membuat content
 */

header('Application: Belajar PHP Web'); // header(key:value) // menambah response header
header('Author: Budhi Octaviansyah');

$client = $_SERVER['HTTP_CLIENT_NAME'];

echo "Hello $client";