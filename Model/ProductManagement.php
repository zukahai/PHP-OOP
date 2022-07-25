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
    }
?>