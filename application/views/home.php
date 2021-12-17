<!DOCTYPE html>
<html lang="en">

<head>
    <title>OneTech</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="OneTech shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/styles/bootstrap4/bootstrap.min.css">
    <link href="<?= base_url() ?>assets/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/plugins/slick-1.8.0/slick.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/styles/responsive.css">

</head>

<body>
    <style>
        .navbar-nav {
            font-size: larger;
            color: blue;
        }

        .testimonial-group>.row {
            overflow-x: auto;
            white-space: nowrap;
        }

        .testimonial-group>.row>.col-md-3 {
            display: inline-block;
            float: none;
        }
    </style>
    <div class="super_container">
        <!-- Header -->
        <header class="header">
            <div class="container-fluid">
                <!-- Main Navigation -->
                <nav class="navbar navbar-light navbar-expand-lg">
                    <a class="navbar-brand" href="#">
                        <img src="<?= base_url() ?>assets/images/logo/logo-su.png" class="img-fluid">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item ">
                                <a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Program</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Event</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Artikel</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Panduan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Login</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>

        <!-- Banner -->
        <div class="container testimonial-group">
            <div style="overflow-x: auto;" class="text-nowrap overflow-auto">
                <a href="#" class="btn btn-info">Dapibus ac facilisis in</a>
                <a href="#" class="btn btn-info">Dapibus ac facilisis in</a>
                <a href="#" class="btn btn-info">Dapibus ac facilisis in</a>
                <a href="#" class="btn btn-info">Dapibus ac facilisis in</a>
                <a href="#" class="btn btn-info">Dapibus ac facilisis in</a>
                <a href="#" class="btn btn-info">Dapibus ac facilisis in</a>
                <a href="#" class="btn btn-info">Dapibus ac facilisis in</a>
                <a href="#" class="btn btn-info">Dapibus ac facilisis in</a>
                <a href="#" class="btn btn-info">Dapibus ac facilisis in</a>
                <a href="#" class="btn btn-info">Dapibus ac facilisis in</a>
                <a href="#" class="btn btn-info">Dapibus ac facilisis in</a>
                <a href="#" class="btn btn-info">Dapibus ac facilisis in</a>
                <a href="#" class="btn btn-info">Dapibus ac facilisis in</a>
                <a href="#" class="btn btn-info">Dapibus ac facilisis in</a>
                <a href="#" class="btn btn-info">Dapibus ac facilisis in</a>
                <a href="#" class="btn btn-info">Dapibus ac facilisis in</a>
                <a href="#" class="btn btn-info">Dapibus ac facilisis in</a>
                <a href="#" class="btn btn-info">Dapibus ac facilisis in</a>
                <a href="#" class="btn btn-info">Dapibus ac facilisis in</a>
                <a href="#" class="btn btn-info">Dapibus ac facilisis in</a>

            </div>
        </div>
    </div>
    <div class="banner">
        <div class="container fill_height">
            <div class="row text-center">
                <div class="col-md-12">
                    <img class="img-fluid" src="<?= base_url() ?>assets/images/logo/banner.jpeg" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- Characteristics -->

    <div class="best_sellers">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="tabbed_container">
                        <div class="tabs clearfix tabs-right">
                            <div class="new_arrivals_title">Kelas Online</div>
                            <ul class="clearfix">
                                <li class="active">Semua Kelas</li>
                                <li>B2B B2C</li>
                                <li>Sales Mindstet</li>
                            </ul>
                            <div class="tabs_line"><span></span></div>
                        </div>

                        <div class="bestsellers_panel panel active">

                            <!-- Best Sellers Slider -->

                            <div class="bestsellers_slider slider">

                                <?php foreach ($all_product as $data) : ?>
                                    <!-- Best Sellers Item -->
                                    <div class="bestsellers_item discount">
                                        <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                            <div class="bestsellers_image"><img src="<?= $data->images[0]->src ?>" alt=""></div>
                                            <div class="bestsellers_content">
                                                <div class="bestsellers_category"><a href="#"><?= $data->categories[0]->name ?></a></div>
                                                <div class="bestsellers_name"><a href="product.html"><?= $data->name ?></a></div>
                                                <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                                <?php if ($data->sale_price != '' ?? null) : ?>
                                                    <div class="bestsellers_price discount">Rp. <?= $data->sale_price ?><span>Rp.<?= $data->regular_price ?></span></div>
                                                <?php else : ?>
                                                    <div class="bestsellers_price">Rp.<?= $data->regular_price ?></div>
                                                <?php endif ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach ?>
                            </div>
                        </div>

                        <div class="bestsellers_panel panel">

                            <!-- Best Sellers Slider -->

                            <div class="bestsellers_slider slider">

                                <?php foreach ($b2b as $data) : ?>
                                    <!-- Best Sellers Item -->
                                    <div class="bestsellers_item discount">
                                        <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                            <div class="bestsellers_image"><img src="<?= $data->images[0]->src ?>" alt=""></div>
                                            <div class="bestsellers_content">
                                                <div class="bestsellers_category"><a href="#"><?= $data->categories[0]->name ?></a></div>
                                                <div class="bestsellers_name"><a href="product.html"><?= $data->name ?></a></div>
                                                <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                                <?php if ($data->sale_price != '' ?? null) : ?>
                                                    <div class="bestsellers_price discount">Rp. <?= $data->sale_price ?><span>Rp.<?= $data->regular_price ?></span></div>
                                                <?php else : ?>
                                                    <div class="bestsellers_price">Rp.<?= $data->regular_price ?></div>
                                                <?php endif ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach ?>


                            </div>
                        </div>

                        <div class="bestsellers_panel panel">

                            <!-- Best Sellers Slider -->

                            <div class="bestsellers_slider slider">

                                <?php foreach ($sales_mindset as $data) : ?>
                                    <!-- Best Sellers Item -->
                                    <div class="bestsellers_item discount">
                                        <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                            <div class="bestsellers_image"><img src="<?= $data->images[0]->src ?>" alt=""></div>
                                            <div class="bestsellers_content">
                                                <div class="bestsellers_category"><a href="#"><?= $data->categories[0]->name ?></a></div>
                                                <div class="bestsellers_name"><a href="product.html"><?= $data->name ?></a></div>
                                                <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                                <?php if ($data->sale_price != '' ?? null) : ?>
                                                    <div class="bestsellers_price discount">Rp. <?= $data->sale_price ?><span>Rp.<?= $data->regular_price ?></span></div>
                                                <?php else : ?>
                                                    <div class="bestsellers_price">Rp.<?= $data->regular_price ?></div>
                                                <?php endif ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach ?>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <!-- Best Seller -->

    <div class="trends">

        <div class="container">
            <div class="row bg-info py-4 px-4" style="border-radius:25px">

                <!-- Trends Content -->
                <div class="col-lg-3">
                    <div class="trends_container">
                        <h2 class="trends_title">Best Seller</h2>
                        <div class="trends_text">
                            <p class="text-white">Produk Terlaris Tahun Ini</p>
                        </div>
                        <div class="trends_slider_nav">
                            <div class="trends_prev trends_nav"><i class="fas fa-angle-left ml-auto"></i></div>
                            <div class="trends_next trends_nav"><i class="fas fa-angle-right ml-auto"></i></div>
                        </div>
                    </div>
                </div>

                <!-- Trends Slider -->
                <div class="col-lg-9">
                    <div class="trends_slider_container">

                        <!-- Trends Slider -->

                        <div class="owl-carousel owl-theme trends_slider">

                            <?php foreach ($best_seller as $data) : ?>
                                <!-- Trends Slider Item -->
                                <div class="owl-item">
                                    <div class="trends_item">
                                        <div class="trends_image d-flex flex-column align-items-center justify-content-center"><img src="<?= $data->images[0]->src ?>" alt=""></div>
                                        <div class="trends_content">
                                            <div class="trends_category"><a href="#"><?= $data->categories[0]->name ?></a></div>
                                            <div class="trends_info clearfix">
                                                <div class="trends_name"><a href="product.html"><?= $data->name ?></a></div><br>
                                                <?php if ($data->sale_price != '' ?? null) : ?>
                                                    <div class="bestsellers_price discount">Rp. <?= $data->sale_price ?><span>Rp.<?= $data->regular_price ?></span></div>
                                                <?php else : ?>
                                                    <div class="bestsellers_price">Rp.<?= $data->regular_price ?></div>
                                                <?php endif ?>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- Footer -->

    <footer class="footer">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 footer_col">
                    <div class="footer_column footer_contact">
                        <div class="logo_container">
                            <div class="logo"><a href="#">OneTech</a></div>
                        </div>
                        <div class="footer_title">Got Question? Call Us 24/7</div>
                        <div class="footer_phone">+38 068 005 3570</div>
                        <div class="footer_contact_text">
                            <p>17 Princess Road, London</p>
                            <p>Grester London NW18JR, UK</p>
                        </div>
                        <div class="footer_social">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-google"></i></a></li>
                                <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 offset-lg-2">
                    <div class="footer_column">
                        <div class="footer_title">Find it Fast</div>
                        <ul class="footer_list">
                            <li><a href="#">Computers & Laptops</a></li>
                            <li><a href="#">Cameras & Photos</a></li>
                            <li><a href="#">Hardware</a></li>
                            <li><a href="#">Smartphones & Tablets</a></li>
                            <li><a href="#">TV & Audio</a></li>
                        </ul>
                        <div class="footer_subtitle">Gadgets</div>
                        <ul class="footer_list">
                            <li><a href="#">Car Electronics</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="footer_column">
                        <ul class="footer_list footer_list_2">
                            <li><a href="#">Video Games & Consoles</a></li>
                            <li><a href="#">Accessories</a></li>
                            <li><a href="#">Cameras & Photos</a></li>
                            <li><a href="#">Hardware</a></li>
                            <li><a href="#">Computers & Laptops</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="footer_column">
                        <div class="footer_title">Customer Care</div>
                        <ul class="footer_list">
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Order Tracking</a></li>
                            <li><a href="#">Wish List</a></li>
                            <li><a href="#">Customer Services</a></li>
                            <li><a href="#">Returns / Exchange</a></li>
                            <li><a href="#">FAQs</a></li>
                            <li><a href="#">Product Support</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    <!-- Copyright -->

    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
                        <div class="copyright_content">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>. Downloaded from <a href="https://themeslab.org/" target="_blank">Themeslab</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                        <div class="logos ml-sm-auto">
                            <ul class="logos_list">
                                <li><a href="#"><img src="<?= base_url() ?>assets/images/logos_1.png" alt=""></a></li>
                                <li><a href="#"><img src="<?= base_url() ?>assets/images/logos_2.png" alt=""></a></li>
                                <li><a href="#"><img src="<?= base_url() ?>assets/images/logos_3.png" alt=""></a></li>
                                <li><a href="#"><img src="<?= base_url() ?>assets/images/logos_4.png" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="<?= base_url() ?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url() ?>assets/styles/bootstrap4/popper.js"></script>
    <script src="<?= base_url() ?>assets/styles/bootstrap4/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/greensock/TweenMax.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/greensock/TimelineMax.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/greensock/animation.gsap.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/greensock/ScrollToPlugin.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="<?= base_url() ?>assets/plugins/slick-1.8.0/slick.js"></script>
    <script src="<?= base_url() ?>assets/plugins/easing/easing.js"></script>
    <script src="<?= base_url() ?>assets/js/custom.js"></script>
</body>

</html>