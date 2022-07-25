<?php
    include "Product.php";
    
    Class ProductManagement {
        private $list = array();

        public function __construct() {
            $this->list = array();
        }

        public function add($product){
            array_push($this->list, $product);
        }

        public function getList() {
            return $this->list;
        }

        public function display(){
            foreach ($this->list as &$value) {
                echo $value."<br>";
            }
        }

        public function html($list) {
            foreach ($list as &$value) {
                $value->html();
            }
        }

        public function html_Home($list) {
            foreach ($list as &$value) {
                $value->html_Home();
            }
        }

        public function getDataTable($sql, $conn) {
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $id = $row['ID'];
                    $url = $row['URl'];
                    $name = $row['Name'];
                    $price = $row['Price'];
                    $material = $row['Material'];
                    $this->add(new Product($id, $name, $material, $price, $url));
                }
            }
        }

        public function getTop($n) {
            $t = array();
            for ($i = 0; $i < $n && $i < count($this->list); $i++)
                array_push($t, $this->list[$i]);
            return $t;
        }
    }
?>