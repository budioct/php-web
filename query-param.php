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
// $single = "Hello " . $_GET["name"]; // $_GET["key"] // akan menerima query param dari url web browser
// akses di web browser
// space di url (%20)
// http://localhost:8080/query-param.php?name=budhi octaviansyah 22
// http://localhost:8080/query-param.php?name=budhi%20octaviansyah%2022

/**
 * Multiple Query Parameter
 * ● Query parameter di URL bisa memiliki banyak parameter
 * ● Jika kita ingin mengirim banyak query parameter, kita cukup gunakan tanda & diikuti dengan query
 *   parameter selanjutnya
 */

// multiple query param
// $multiple = "Hello First Name " . $_GET["first_name"] . ", Last Name " . $_GET["last_name"];
// akses di web browser
// http://localhost:8080/query-param.php?first_name=budhi&last_name=oct

/**
 * Query Parameter Array
 * ● Secara default, query parameter berisikan data key=value, artinya 1 key akan berisi 1 value
 * ● di PHP ada kemampuan untuk mengirim query parameter dengan data lebih dari satu
 * ● Data tersebut akan otomatis dikonversi menjadi Array oleh PHP
 * ● Caranya adalah kita wajib menambahkan tanda [] diakhir nama query parameter nya
 * ● Dan kita bisa menambah query parameter dengan nama yang sama berkali-kali, misal
 * ● name[]=Eko&name[]=Budi&name[]=Joko, maka secara otomatis parameter name akan berisi [Eko,
 *   Budi dan Joko]
 */

// array query param
$numbers = $_GET["numbers"];
$total = 0;

foreach ($numbers as $number) {
    $total += $number;
}
// akses web browser
// http://localhost:8080/query-param.php?numbers[]=10&numbers[]=10&numbers[]=10

?>

<html>
<head>
    <title>Query Param PHP</title>
</head>

<body>

<!--<h1>--><?php //= $single ?><!--</h1>-->
<!--<h1>--><?php //= $multiple ?><!--</h1>-->
<h1>Total: <?= $total ?></h1>

</body>
</html>

