<?php
    class Account {
        public function __construct() {
            
        }

        public static function checkLogin($conn, $username, $password) {
            $sql = "SELECT * FROM `account` WHERE `Username` = '".$username."' AND `Pass` = '".$password."'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                return $row['Role'];
            }
            return "No role";
        }
    }
?>