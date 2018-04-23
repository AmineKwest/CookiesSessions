<?php
if (isset($_POST['loginname'])) {
    session_start ();
    $_SESSION['loginname'] = $_POST['loginname'];
    header ('location: index.php');
  }
  else {
    echo '<p style="color:red"> Entrez votre nom d\'utilisateur </p>';
  }
?>
