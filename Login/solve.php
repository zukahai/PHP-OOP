<?php
  if (isset($_GET['username']) && isset($_GET['password'])) {
    include "../Model/Account.php";
    include "../Model/infoDB.php";
    $username = $_GET['username'];
    $password = $_GET['password'];
    echo Account::checkLogin($conn, $username, $password);
  }
?>