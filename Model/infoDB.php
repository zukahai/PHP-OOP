<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "web";

    // $servername = "localhost";
    // $username = "id18906694_haizuka";
    // $password = "12345678910Aa@";
    // $dbname = "id18906694_web";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>