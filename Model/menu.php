<?php $domain = "http://localhost:3000" ?>

<?php
    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $htmlLogin = '<a href="'.$domain.'/Login/index.php" class="get-started-btn scrollto">Đăng nhập</a>';
    $htmlAdmin = "";
    if (isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
        $usernameCookia = $_COOKIE['username'];
        $passwordCookie = $_COOKIE['password'];
    } else {
        $usernameCookia = "";
        $passwordCookie = "";
    }
    
    if (Account::checkLogin($conn, $usernameCookia, $passwordCookie) == "admin") {
        $htmlLogin = "";
        $htmlAdmin = '<li class="dropdown text-light" ><a href="#" class="text-light"><span>Admin</span> <i class="bi bi-chevron-down"></i></a>'.
        '<ul>'.
        '<li><a href="'.$domain.'/Admin/productTable.php">Sản phẩm</a></li>'.
         '<li><a href="'.$domain.'/Admin/addProduct.php">Thêm sản phẩm</a></li>'.
         '<li><a href="" onclick="Logout()">Đăng xuất</a></li>'.
         '</ul>';
         '</li>';
        
    }
    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    
    
?>

<header id="header" class="fixed-top d-flex align-items-center bg-dark text-light">
    <div class="container d-flex align-items-center">
        <a href="<?php echo $domain?>" class="logo me-auto"><img src="../assets/img/logomoi.png" alt=""></a>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto text-light" href="<?php echo $domain?>">Trang chủ</a></li>
                <li><a class="nav-link scrollto text-light" href="<?php echo $domain."/sanpham/indexHai.php"?>">Sản phẩm</a></li>
                <?php echo $htmlAdmin?>
            </ul>
            <i class="bi bi-list mobile-nav-toggle text-light"></i>
        </nav>
        <!-- .navbar -->
        <?php echo $htmlLogin; ?>
       
        
    </div>

    <script>
        function Logout() {
            console.log("Logout");
            document.cookie = "username=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
            document.cookie = "password=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
        }
    </script>
</header>