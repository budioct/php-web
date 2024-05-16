<!--
Form Post
● Saat kita belajar HTML, kita tahu bahasa di HTML terdapat form
● Form biasanya digunakan untuk mengirim data dari Client ke Server
● Secara default, method di form adalah GET, sehingga saat kita submit, data akan dikirim dalam
  bentuk Query Parameter yang bisa ditangkap menggunakan $_GET di PHP
● Namun jika kita gunakan Form dengan method POST, maka secara otomatis request dari Client ke
  Server akan beruba HTTP POST, hal ini menyebabkan data form yang dikirim akan dikirim melalui
  Body, bukan Query Parameter, dan untuk menerima datanya di PHP, kita perlu menggunnakan
  $_POST

$_POST
● $_POST adalah global variable yang berisikan data array yang dikirim dari Client ke Server dalam
bentuk form post
● Cara penggunaan $_POST sama seperti $_GET
-->

<html>
<body>
<table>
    <tr>
        <td>First Name</td>
        <td><b><?= $_POST['first_name'] ?></b></td>
    </tr>
    <tr>
        <td>Last Name</td>
        <td><b><?= $_POST['last_name'] ?></b></td>
    </tr>
</table>
<br>
<a href="form-input.php">
    <button>
        Kembali
    </button>
</a>
</body>
</html