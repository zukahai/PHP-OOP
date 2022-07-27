<?php
    class Product{
        private $id;
        private $url;
        private $name;
        private $material;
        private $price;
        private $view;
        private $datetime;
        private $detail;
        private $size;
        private $mass;
        
        public function __construct($id, $name, $size, $mass, $material, $price, $datetime, $view, $url, $detail) {
            $this->id = $id;
            $this->name = $name;
            $this->size = $size;
            $this->mass = $mass;
            $this->material = $material;
            $this->url = $url;
            $this->price = $price;
            $this->datetime = $datetime;
            $this->view = $view;
            $this->detail = $detail;
        }

        public function getId() {
            return $this->id;
        }

        public function getName() {
            return $this->name;
        }

        public function getSize() {
            return $this->size;
        }

        public function getMass() {
            return $this->mass;
        }

        public function getMaterial() {
            return $this->material;
        }

        public function getUrl() {
            return $this->url;
        }

        public function getPrice() {
            return $this->price;
        }

        public function getDatetime() {
            return $this->datetime;
        }

        public function getView() {
            return $this->view;
        }

        public function getDetail() {
            return $this->detail;
        }

        public function __toString() {
            return $this->id.", ".$this->name.", ".$this->material.", ".$this->url;
        }

        public function display() {
            echo $this;
        }

        public function small() {
            echo '<div class="post-item clearfix">';
            echo '<img src="'.$this->url.'" alt="" style="width: 75px; height: 100px; object-fit: cover;">';
            echo '<h4><a href="?id='.$this->id.'">'.$this->name.'</a></h4>';
            echo '<time datetime="2020-01-01">'.$this->datetime.'</time>';
            echo '</div>';
        }

        public function html($prePath) {
            echo '<div class="col-lg-4 col-md-12 mb-4">';
            echo '<a href="product.php?id='.$this->id.'">';
            echo '<div class="card shadow p-2 mb-5 bg-white rounded">';
            echo '<div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"';
            echo 'data-mdb-ripple-color="light">';
            echo '<img src="'.$prePath.$this->url.'"';
            echo 'class="w-100"';
            echo 'style="width: 300px;';
            echo 'height: 230px;';
            echo 'object-fit: cover;" />';
            echo '<a href="#!">';
            echo '<div class="mask">';
            echo '<div class="d-flex justify-content-start align-items-end h-100">';
            echo '<h5><span class="badge bg-dark ms-2 mt-2 bi bi-eye"> '.$this->view.'</span></h5>';
            echo '<h5><span class="badge bg-primary ms-2 mt-2">New</span></h5>';
            echo '<h5><span class="badge bg-danger ms-2 mt-2">Hot</span></h5>';
            echo '</div>';
            echo '</div>';
            echo '<div class="hover-overlay">';
            echo '<div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>';
            echo '</div>';
            echo '</a>';
            echo '</div>';
            echo '<div class="card-body">';
            echo '<a href="'.$prePath.'product.php?id='.$this->id.'" class="text-reset">';
            echo '<h4 class="card-title mb-3">Mã sản phẩm: '.$this->id.'</h4>';
            echo '</a>';
            echo '<a href="'.$prePath.'product.php?id='.$this->id.'" class="text-reset">';
            echo '<h3 class="card-title mb-3 text-primary">'.$this->name.'</h3>';
            echo '</a>';
            echo '<a href="'.$prePath.'product.php?id='.$this->id.'" class="text-reset">';
            echo '<h5>'.$this->material.'</h5>';
            echo '</a>';
            echo '<h4 class="mb-3 text-danger"> <span> Giá: </span>'.$this->price.'</h4>';
            echo '</div>';
            echo '</div>';
            echo "</a>";
            echo '</div>';
        }
    }
?>