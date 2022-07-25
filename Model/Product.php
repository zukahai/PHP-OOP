<?php
    class Product{
        private $id;
        private $url;
        private $name;
        private $material;
        
        public function __construct($id, $name, $material, $url) {
            $this->id = $id;
            $this->name = $name;
            $this->material = $material;
            $this->url = $url;
        }

        public function getId() {
            return $this->id;
        }

        public function __toString() {
            return $this->id.", ".$this->name.", ".$this->material.", ".$this->url;
        }

        public function display() {
            echo $this;
        }

    }
?>