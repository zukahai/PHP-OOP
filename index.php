<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Bê tông sợi thuỷ tinh</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/tel.css">
    <link rel="stylesheet" href="./assets/css/slide.css">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <?php include "./Model/menu.php" ?>
    <!-- End Header -->

     <!-- Swiper -->
     <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <section id="hero" class="d-flex align-items-center">
            <div class="container" data-aos="zoom-out" data-aos-delay="100">
                <div class="row">
                    <div class="col-xl-6">
                        <h1>Bê tông sợi thuỷ tinh</h1>
                        <h2>Bê tông sợi thủy tinh là chuyên gia hàng đầu về vật liệu GRC. 
                            Chúng tôi cung cấp các dịch vụ liên quan đến GRC bao gồm: 
                            Tư vấn; Thiết kế; Sản xuất; Thi công.</h2>
                        <a href="#about" class="btn-get-started scrollto">Bắt đầu</a>
                    </div>
                </div>
            </div>
          </section>
        </div>

        <div class="swiper-slide"><img src="./Images/slide2.jpg" alt="" srcset=""></div>
        <div class="swiper-slide"><img src="./Images/slide3.jpg" alt="" srcset=""></div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        rewind: true,
        pagination: {
          el: ".swiper-pagination",
          type: "fraction",
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        autoplay: {
          delay: 3500,
          disableOnInteraction: true,
        }
      });
    </script>

    <main id="main">


        <!-- End Clients Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-graph-up-arrow"></i>
                            <span data-purecounter-start="0" data-purecounter-end="1234" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Lượt truy cập</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
                        <div class="count-box">
                            <i class="bi bi-telephone-inbound"></i>
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Cuộc gọi</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="bi bi-bricks"></i>
                            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Sản phẩm</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>
    <div class="text-center container py-2 my-3">
    <div class="row data">
        <h1 class="text-center text-danger">Sản phẩm nổi bật</h1> 
        <?php
          include "./Model/infoDB.php";
          include "./Model/ProductManagement.php";
          $p = new ProductManagement();
          $sql = "SELECT * FROM sanpham WHERE TRUE";
          $p->getDataTable($sql, $conn);
          $p->html_Home($p->getTop(3));
        ?> 
    </div>
    </div>

    <!-- ======= Footer ======= -->
    <?php include "./Model/footer.php" ?>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>