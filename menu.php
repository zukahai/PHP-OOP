<?php $domain = "http://localhost:3000" ?>

<header id="header" class="fixed-top d-flex align-items-center bg-dark text-light">
    <div class="container d-flex align-items-center">
        <!-- <h1 class="logo me-auto"><a href="index.html">Presento<span>.</span></a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.html" class="logo me-auto"><img src="../assets/img/logomoi.png" alt=""></a>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto text-light" href="<?php echo $domain?>">Trang chủ</a></li>
                <li><a class="nav-link scrollto text-light" href="<?php echo $domain."/sanpham/indexHai.php"?>">Sản phẩm</a></li>
                <li class="dropdown text-light" ><a href="#" class="text-light"><span>Khác</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li class="dropdown text-light"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Drop Down 2</a></li>
                        <li><a href="#">Drop Down 3</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                    </ul>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle text-light"></i>
        </nav>
        <!-- .navbar -->

        <a href="#about" class="get-started-btn scrollto">Bắt đầu</a>
    </div>
</header>