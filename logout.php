<?php
session_start();
session_destroy();
unset($_COOKIE);
unset($_SESSION['cart']);
unset($_SESSION['loginname']);
setcookie('pecan_nuts', '', time() - 3600, '/');
setcookie('chocolate_chips', '', time() - 3600, '/');
setcookie('mms_cookie', '', time() - 3600, '/');
setcookie('chocolate_cookie', '', time() - 3600, '/');
header('Location:login.php');
?>
