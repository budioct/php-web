<?php

/**
 * $_SERVER
 * ● Di PHP, terdapat global variable bernama $_SERVER
 * ● $_SERVER merupakan array yang berisikan informasi seperti HTTP Header, path, lokasi script php,
 *   dan lain-lain
 * ● $_SERVER dibuat ketika ada request masuk, sehingga bisa jadi tiap request akan berbeda isinya
 * ● Beberapa key yang ada di $_SERVER mengikuti spesifikasi RFC 3875 - The Common Gateway
 * Interface (CGI) Version 1.1 : https://tools.ietf.org/html/rfc3875
 */
?>

<html>
<body>
<h1>$_SERVER</h1>

<table border="1">
    <?php foreach ($_SERVER as $key => $value) { ?>
        <tr>
            <td><?= $key ?></td>
            <td><?= $value ?></td>
        </tr>
    <?php } ?>
</table>

</body>
</html>