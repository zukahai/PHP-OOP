<?php
    include "Account.php";
    include "infoDB.php";

    echo Account::checkLogin($conn, "aa", "a");
?>