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

header('Location: https://www.google.com');
exit();