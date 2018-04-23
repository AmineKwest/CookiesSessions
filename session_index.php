<?php
session_start ();
if (isset($_SESSION['loginname'])){
    echo "";
  }
else {
  header ('location: login.php');
}
?>
