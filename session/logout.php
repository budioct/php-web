<?php
session_start(); // session_start() // initialized session php
session_destroy(); // session_destroy() // menghapus session

header('Location: /session/login.php'); // redirect
exit(); // terminate