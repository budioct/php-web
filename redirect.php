<?php

/**
 * Redirect
 * ● Dalam pembuatan halaman web, melakukan redirect dari satu halaman ke halaman lain adalah hal
 *   biasa
 * ● Misal setelah sukses login, kita akan redirect halaman web nya ke halaman member atau admin
 * ● Atau bahkan melakukan redirect ke domain yang berbeda, misal ketika login dengan Google,
 *   setelah selesai, akan melakukan redirect ke halaman web kita lagi
 *
 * HTTP Redirect
 * ● Redirect sendiri sudah merupakan sesuatu yang standard di HTTP
 * ● Untuk melakukan redirect, kita hanya butuh menggunakan response header Location yang berisi
 *   url redirect nya, bisa dalam domain yang sama, atau ke domain berbeda, misal :
 * ● Location : /admin.php => artinya redirect ke halaman admin di domain yang sama
 * ● Location : https://www.google.com => artinya redirect ke halaman google
 */

header('Location: /phpinfo.php');
exit(); // exit() // adalah destruktor function shutdown // pastikan tidak ada content

/**
 * result: halaman redirect.php akan ke halaman phpinfo.php
 * General
 * Request URL: http://localhost:8080/redirect.php
 * Request Method: GET
 * Status Code: 302 Found
 * Remote Address: [::1]:8080
 * Referrer Policy: strict-origin-when-cross-origin
 *
 * Request URL: http://localhost:8080/phpinfo.php
 * Request Method: GET
 * Status Code: 200 OK
 * Remote Address: [::1]:8080
 * Referrer Policy: strict-origin-when-cross-origin
 *
 */