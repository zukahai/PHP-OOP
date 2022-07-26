<?php
    include "../Model/ProductManagement.php";
    include "../infoDB.php";
    $id = isset($_GET['id']) ? $_GET['id'] : 1;
    $sql = "SELECT * FROM sanpham WHERE ID=".$id;
    $pm = new ProductManagement();
    $pm->getDataTable($sql, $conn);
    $p = $pm->getList()[0];


    $sql = "SELECT * FROM sanpham";
    $pm2 = new ProductManagement();
    $pm2->getDataTable($sql, $conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?php echo $p->getName() ?> | Bê tông sợi thuỷ tinh</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- ======= Header ======= -->
    <?php include "../menu.php" ?>
    <!-- End Header -->

    <main id="main">

        <!-- ======= Blog Single Section ======= -->
        <section id="blog" class="blog py-5">
            <div class="container py-5 mt-5" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-8 entries">

                        <article class="entry entry-single">

                            <div class="entry-img d-flex justify-content-center">
                                <img src="<?php echo $p->getUrl()?>" alt="" class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                <a href=""><?php echo $p->getName() ?></a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">Admin</a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01"><?php echo $p->getDatetime()?></time></a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">0 Comments</a></li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta. Et eveniet enim. Qui velit est ea dolorem doloremque deleniti aperiam unde soluta. Est cum et quod quos
                                    aut ut et sit sunt. Voluptate porro consequatur assumenda perferendis dolore.
                                </p>
                            </div>

                            <div class="entry-img mt-2 d-flex justify-content-center">
                                <img src="<?php echo $p->getUrl()?>" alt="" class="img-fluid">
                            </div>

                            <div class="entry-img mt-2 d-flex justify-content-center">
                                <img src="<?php echo $p->getUrl()?>" alt="" class="img-fluid">
                            </div>

                        </article>
                        

                    </div>
                    <!-- End blog entries list -->

                    <div class="col-lg-4">

                        <div class="sidebar">

                            <h3 class="sidebar-title">Tìm kiếm</h3>
                            <div class="sidebar-item search-form">
                                <form action="">
                                    <input type="text">
                                    <button type=""><i class="bi bi-search"></i></button>
                                </form>
                            </div>
                        
                            <h3 class="sidebar-title">Sản phẩm khác</h3>
                            <div class="sidebar-item recent-posts">
                                <?php $pm2->small($pm2->getList()); ?>

                            </div>
                            <!-- End sidebar recent posts-->

                            <h3 class="sidebar-title">Tags</h3>
                            <div class="sidebar-item tags">
                                <ul>
                                    <li><a href="#">DGRC</a></li>
                                    <li><a href="#">gachdantuong</a></li>
                                    <li><a href="#">gach</a></li>
                                    <li><a href="#">MyLinh</a></li>
                                    <li><a href="#">HaiZuka</a></li>
                                </ul>
                            </div>
                            <!-- End sidebar tags-->

                        </div>
                        <!-- End sidebar -->

                    </div>
                    <!-- End blog sidebar -->

                </div>

            </div>
        </section>
        <!-- End Blog Single Section -->

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php include "../footer.php" ?>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="../assets/vendor/aos/aos.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>

</body>

</html>