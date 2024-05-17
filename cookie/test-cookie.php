<?php

/**
 * Cookie
 * ● Cookie adalah data dalam bentuk key-value yang dikirim oleh Server pada HTTP Response untuk
 *   disimpan di Client (Web Browser)
 * ● Ketika Web Browser menerima cookie, secara otomatis, request selanjutnya cookie tersebut akan
 *   dikirim di setiap HTTP Request yang dilakukan ke Server
 * ● https://developer.mozilla.org/en-US/docs/Web/HTTP/Cookies
 *
 * Cookie di PHP
 * ● Untuk membuat cookie di PHP, kita bisa menggunakan function setcookie(...)
 * ● https://www.php.net/manual/en/function.setcookie.php
 * ● Cookie merupakan bagian dari HTTP Header, jadi pastikan cookie dibuat sebelum content di
 *   render di PHP
 * ● Untuk membaca cookie yang dikirim oleh client, kita bisa menggunakan global variable $_COOKIE
 * ● https://www.php.net/manual/en/reserved.variables.cookies.php
 *
 * Hati-Hati Menggunakan Cookie
 * ● Jangan terlalu banyak data di cookie, karena semua data di cookie akan selalu dikirim di tiap HTTP
 *   Request, semakin banyak, semakin lambat karena data yang harus dikirim banyak
 * ● Cookie bisa diubah oleh user, jadi jangan mudah percaya dengan isi cookie, misal menyimpan
 *   informasi hak akses di cookie
 */

setcookie("X-BELAJAR-COOKIE", "Budhi Octaviansyah 22"); // setcookie(key:value) // membuat cookie di php

header('Location: /cookie/show-cookie.php'); // redirect halaman