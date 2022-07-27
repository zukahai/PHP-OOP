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

        public function small($list) {
            foreach ($list as &$value) {
                $value->small();
            }
        }

        public function html($prePath, $list) {
            foreach ($list as &$value) {
                $value->html($prePath);
            }
        }

        public function getDataTable($sql, $conn) {
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $id = $row['ID'];
                    $url = $row['URl'];
                    $name = $row['Name'];
                    $size = $row['Size'];
                    $mass = $row['Mass'];
                    $price = $row['Price'];
                    $material = $row['Material'];
                    $datetime = $row['Time'];
                    $view = $row['View'];
                    $detail = $row['Detail'];
                    $this->add(new Product($id, $name, $size, $mass, $material, $price, $datetime, $view, $url, $detail));
                }
            }
        }

        public function sortByViewDesc() {
            usort($this->list, function($a, $b) {return $a->getView() < $b->getView();});
        }

        public function sortByTimeDesc() {
            usort($this->list, function($a, $b) {
                $d1 = new DateTime(date($a->getDatetime()));
                $d2 = new DateTime(date($b->getDatetime()));
                return $d1 < $d2;
            });
        }

        public function getTop($n) {
            $t = array();
            for ($i = 0; $i < $n && $i < count($this->list); $i++)
                array_push($t, $this->list[$i]);
            return $t;
        }
    }
?>