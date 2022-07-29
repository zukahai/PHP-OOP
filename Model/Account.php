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

        public static function deleteById($conn, $id) {
            $sql = "DELETE FROM `sanpham` WHERE `ID` = '".$id."'";
            $conn->query($sql);
        }

        public static function checkLoginByCookie($conn) {
            if (isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
                $usernameCookia = $_COOKIE['username'];
                $passwordCookie = $_COOKIE['password'];
            } else {
                $usernameCookia = "";
                $passwordCookie = "";
            }
            return Account::checkLogin($conn, $usernameCookia, $passwordCookie);
        }
    }
?>