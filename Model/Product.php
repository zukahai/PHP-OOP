<?php
    class Product{
        private $id;
        private $url;
        private $name;
        private $material;
        private $price;
        
        public function __construct($id, $name, $material, $price, $url) {
            $this->id = $id;
            $this->name = $name;
            $this->material = $material;
            $this->url = $url;
            $this->price = $price;
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

        public function html() {
            echo '<div class="col-lg-4 col-md-12 mb-4">';
            echo '<div class="card shadow p-2 mb-5 bg-white rounded">';
            echo '<div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"';
            echo 'data-mdb-ripple-color="light">';
            echo '<img src="'.$this->url.'"';
            echo 'class="w-100"';
            echo 'style="width: 300px;';
            echo 'height: 230px;';
            echo 'object-fit: cover;" />';
            echo '<a href="#!">';
            echo '<div class="mask">';
            echo '<div class="d-flex justify-content-start align-items-end h-100">';
            echo '<h5><span class="badge bg-primary ms-2 mt-2">New</span></h5>';
            echo '</div>';
            echo '</div>';
            echo '<div class="hover-overlay">';
            echo '<div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>';
            echo '</div>';
            echo '</a>';
            echo '</div>';
            echo '<div class="card-body">';
            echo '<a href="" class="text-reset">';
            echo '<h4 class="card-title mb-3">Mã sản phẩm: '.$this->id.'</h4>';
            echo '</a>';
            echo '<a href="" class="text-reset">';
            echo '<h3 class="card-title mb-3 text-primary">'.$this->name.'</h3>';
            echo '</a>';
            echo '<a href="" class="text-reset">';
            echo '<p>'.$this->material.'</p>';
            echo '</a>';
            echo '<h4 class="mb-3"> <span> Giá: </span>'.$this->price.'</h4>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }

    }
?>