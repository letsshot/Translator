<?php session_start();

session_destroy();
setcookie('login', null, -1);
header("location:index.php");

?>