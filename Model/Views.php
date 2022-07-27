<?php
    class View {
        public function __construct() {
            
        }

        public static function increaseViewsProductById($id, $conn) {
            $sql = "UPDATE `sanpham` SET View = View + 1 WHERE `ID` = '".$id."'";
            $result = $conn->query($sql);
        }

        public static function increaseViewsByPage($conn, $page) {
            $sql = "UPDATE `views` SET view = view + 1 WHERE `page` = '".$page."'";
            $result = $conn->query($sql);
        }

        public static function getAllView($conn) {
            $sum = 0;
            $sql = "SELECT SUM(View) as sum FROM `sanpham`";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $sum += $row['sum'];
            }

            $sql = "SELECT SUM(view) as sum FROM `views`";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $sum += $row['sum'];
            }
            return $sum;
        }

        public static function getNumberOfProduct($conn) {
            $sql = "SELECT COUNT(ID) as count FROM `sanpham`";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                return $row['count'];
            }
        }
    }
?>