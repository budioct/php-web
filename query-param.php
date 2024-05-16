<?php

/**
 * Query Parameter
 * ● Saat mengakses Web, kita akan menggunakan URL, dan di dalam URL, terdapat bagian yang
 *   bernama query parameter
 * ● Query parameter adalah informasi tambahan yang bisa kita kirimkan dari client ke server secara
 *   dinamis
 * ● Untuk menambahkan query parameter, cukup gunakan ? diikuti dengan key=value pada URL
 * ● Di PHP, semua query parameter akan secara otomatis disimpan dalam global variable bernama
 *   $_GET
 *
 * $_GET
 * ● $_GET adalah global variable berupa array yang berisikan key sesuai dengan nama query
 *   parameter, dan value sesuai dengan value query parameter
 * ● Jika kita mengirim query parameter name=Eko, artinya akan ada key name di dalam $_GET yang
 *   bernilai Eko
 * ● Perlu diperhatikan, query parameter adalah data yang dikirim oleh client, jadi pastikan sebelum
 *   menggunakannya kita harus cek apakah datanya ada atau tidak, karena bisa jadi datanya tidak
 *   dikirim oleh client
 */

// single query param
$single = "Hello " . $_GET["name"]; // $_GET["key"] // akan menerima query param dari url web browser
// akses di web browser
// space di url (%20)
// http://localhost:8080/query-param.php?name=budhi octaviansyah 22
// http://localhost:8080/query-param.php?name=budhi%20octaviansyah%2022

// multiple query param
// $multiple = "Hello First Name " . $_GET["first_name"] . ", Last Name " . $_GET["last_name"];
// akses di web browser
// http://localhost:8080/query-param.php?first_name=budhi&last_name=oct
?>

<html>
<head>
    <title>Query Param PHP</title>
</head>

<body>

<h1><?= $single ?></h1>
<!--<h1>--><?php //= $multiple ?><!--</h1>-->

</body>
</html>

