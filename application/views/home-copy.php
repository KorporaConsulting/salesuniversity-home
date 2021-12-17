<!DOCTYPE html>
<html lang="en">

<head>
    <title>Beranda - Sales University</title>
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

        #kategori::-webkit-scrollbar {
            display: none;
        }

        #img1 {
            display: block;
        }

        #img2 {
            display: none
        }

        @media all and (max-width: 499px) {
            #img1 {
                display: none;
            }

            #img2 {
                display: block;
            }
        }

        /* @media all and (max-width: 499px) {
            .owl-item {
                width: 210px !important;
            }
        } */

        .trends {
            padding-top: 20px !important;
            padding-bottom: 20px !important;
        }
    </style>
    <div class="super_container">

        <!-- Header -->

        <header class="header">

            <!-- Header Main -->

            <div class="header_main" style="display:none">
                <div class="container">
                    <div class="row">
                        <!-- Search -->
                        <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
                            <div class="header_search">
                                <div class="header_search_content">
                                    <div class="header_search_form_container">
                                        <form action="#" class="header_search_form clearfix">
                                            <input type="search" required="required" class="header_search_input" placeholder="Search for products...">
                                            <div class="custom_dropdown">
                                                <div class="custom_dropdown_list">
                                                    <span class="custom_dropdown_placeholder clc">All Categories</span>
                                                    <i class="fas fa-chevron-down"></i>
                                                    <ul class="custom_list clc">
                                                        <li><a class="clc" href="#">All Categories</a></li>
                                                        <li><a class="clc" href="#">Computers</a></li>
                                                        <li><a class="clc" href="#">Laptops</a></li>
                                                        <li><a class="clc" href="#">Cameras</a></li>
                                                        <li><a class="clc" href="#">Hardware</a></li>
                                                        <li><a class="clc" href="#">Smartphones</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <button type="submit" class="header_search_button trans_300" value="Submit"><img src="images/search.png" alt=""></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Navigation -->

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

        <div class="container testimonial-group mt-3">
            <div id="kategori" style="overflow-x: auto;" class="text-center text-nowrap overflow-auto">
                <a href="https://salesuniversity.id/kategori-produk/b2b-b2c" class="btn btn-info">B2B B2C</a>
                <a href="https://salesuniversity.id/kategori-produk/b2b" class="btn btn-info">B2B</a>
                <a href="https://salesuniversity.id/kategori-produk/b2c" class="btn btn-info">B2C</a>
                <a href="https://salesuniversity.id/kategori-produk/sales-mindset" class="btn btn-info">Sales Mindset</a>
                <a href="https://salesuniversity.id/shop/" class="btn btn-info">Semua Kategori</a>
            </div>
        </div>

        <div class="container">
            <div class="row mt-3 text-center">
                <div class="col-md-12">
                    <img id="img1" class="img-fluid" src="<?= base_url() ?>assets/images/logo/banner.jpeg" alt="">
                    <img id="img2" class="img-fluid" src="<?= base_url() ?>assets/images/logo/banner2.jpeg" alt="">
                </div>
            </div>
        </div>

        <div class="trends">

            <div class="container">
                <!-- <div class="row bg-info" style="border-radius:25px"> -->
                <div style="background-image: linear-gradient(to right, #0F2027, #203A43, #2C5364, #2C5364, #203A43, #0F2027); border-radius:25px" class="border border-dark row py-4">

                    <!-- Trends Content -->
                    <div class="col-lg-4">
                        <div class="trends_container">
                            <h2 class="px-5 trends_title text-white">Best Seller</h2>
                            <div class="px-5 trends_text">
                                <p class="text-white">Produk Terlaris Tahun Ini</p>
                            </div>
                            <div class="px-5 trends_text">
                                <a href="#" class="text-white">Lihat Semua ></a>
                            </div>
                            <div class="px-5 trends_slider_nav">
                                <div class="trends_prev trends_nav"><i class="fas fa-angle-left ml-auto"></i></div>
                                <div class="trends_next trends_nav"><i class="fas fa-angle-right ml-auto"></i></div>
                            </div>
                        </div>
                    </div>

                    <!-- Trends Slider -->
                    <div class="col-lg-8">
                        <div class="trends_slider_container">

                            <!-- Trends Slider -->

                            <div class="owl-carousel owl-theme trends_slider">
                                <?php
                                $no = 0;
                                foreach ($best_seller as $data) : ?>
                                    <!-- Trends Slider Item -->
                                    <div class="owl-item">
                                        <div class="trends_item">
                                            <div class="trends_image d-flex flex-column align-items-center justify-content-center"><img src="<?= $data['img'] ?>" alt=""></div>
                                            <div class="trends_content">
                                                <div class="trends_category"><a href="#"><?= $data['kategori'] ?></a></div>
                                                <div class="trends_info clearfix">
                                                    <div class="trends_name"><a href="product.html"><?= $data['judul'] ?></a></div><br>
                                                    <?php if ($data['sale_price'] != '' ?? null) : ?>
                                                        <div class="bestsellers_price discount">Rp. <?= number_format($data['sale_price'], 0, ",", ".");  ?><span>Rp.<?= number_format($data['regular_price'], 0, ",", "."); ?></span></div>
                                                    <?php else : ?>
                                                        <div class="bestsellers_price">Rp.<?= number_format($data['regular_price'], 0, ",", "."); ?></div>
                                                    <?php endif ?>
                                                    <a name="" id="" class="text-center btn btn-md btn-primary btn-block mt-2" href="#" role="button"> BELI</a>
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
        <!-- Deals of the week -->

        <div class="deals_featured">
            <div class="container">
                <div class="row">
                    <div class="col d-flex flex-lg-row flex-column align-items-center justify-content-start">
                        <!-- Deals -->
                        <div class="deals">
                            <div class="deals_title">Rekomendasi</div>
                            <div class="deals_slider_container">

                                <!-- Deals Slider -->
                                <div class="owl-carousel owl-theme deals_slider">
                                    <?php
                                    $no = 0;
                                    foreach ($all_product as $data) : ?>
                                        <!-- Deals Item -->
                                        <div class="owl-item deals_item">
                                            <div class="deals_image"><img src="<?= $data['img'] ?>" alt=""></div>
                                            <div class="deals_content">
                                                <div class="deals_info_line d-flex flex-row justify-content-start">
                                                    <div class="deals_item_category"><a href="#">Headphones</a></div>
                                                    <div class="deals_item_price_a ml-auto">$300</div>
                                                </div>
                                                <div class="deals_info_line d-flex flex-row justify-content-start">
                                                    <div class="deals_item_name">Beoplay H7</div>
                                                    <div class="deals_item_price ml-auto">$225</div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach ?>
                                </div>
                            </div>
                            <div class="deals_slider_nav_container">
                                <div class="deals_slider_prev deals_slider_nav"><i class="fas fa-chevron-left ml-auto"></i></div>
                                <div class="deals_slider_next deals_slider_nav"><i class="fas fa-chevron-right ml-auto"></i></div>
                            </div>
                        </div>

                        <!-- Featured -->
                        <div class="featured">
                            <div class="tabbed_container">
                                <!-- Product Panel -->
                                <div class="product_panel panel active">
                                    <div class="featured_slider slider">
                                        <?php
                                        $no = 0;
                                        foreach ($featured as $data) : ?>
                                            <!-- Slider Item -->
                                            <div class="featured_slider_item">
                                                <div class="border_active"></div>
                                                <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img style="width: 150px;" src="<?= $data['img'] ?>" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price discount">Rp. <?= number_format($data['sale_price'], 0, ",", "."); ?><span><s>Rp. <?= number_format($data['regular_price'], 0, ",", "."); ?></s></span></div>
                                                        <div><a class="text-dark" href="product.html"><?= $data['judul'] ?></a></div>
                                                        <div class="product_extras">
                                                            <button class="product_cart_button">BELI</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach ?>
                                    </div>
                                    <div class="featured_slider_dots_cover"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Popular Categories -->

        <div class="trends" id="kelas-b2c">

            <div class="container">
                <!-- <div class="row bg-info" style="border-radius:25px"> -->
                <div style="background-image: linear-gradient(to right, #0F2027, #203A43, #2C5364, #2C5364, #203A43, #0F2027); border-radius:25px" class="border border-dark row bg-info py-4">

                    <!-- Trends Content -->
                    <div class="col-lg-4">
                        <div class="trends_container">
                            <h2 class="px-5 trends_title text-white">KELAS B2C</h2>
                            <div class="px-5 trends_text">
                                <a href="#" class="text-white">Lihat Semua ></a>
                            </div>
                            <div class="px-5 trends_slider_nav">
                                <div class="b2b_prev trends_nav"><i class="fas fa-angle-left ml-auto"></i></div>
                                <div class="b2b_next trends_nav"><i class="fas fa-angle-right ml-auto"></i></div>
                            </div>
                        </div>
                    </div>

                    <!-- Trends Slider -->
                    <div class="col-lg-8">
                        <div class="trends_slider_container">
                            <!-- Trends Slider -->
                            <div class="owl-carousel owl-theme b2b_slider">
                                <?php
                                $no = 0;
                                foreach ($b2c as $data) : ?>
                                    <!-- Trends Slider Item -->
                                    <div class="owl-item">
                                        <div class="trends_item">
                                            <div class="trends_image d-flex flex-column align-items-center justify-content-center"><img src="<?= $data['img'] ?>" alt=""></div>
                                            <div class="trends_content">
                                                <div class="trends_category"><a href="#"><?= $data['kategori'] ?></a></div>
                                                <div class="trends_info clearfix">
                                                    <div class="trends_name"><a href="product.html"><?= $data['judul'] ?></a></div><br>
                                                    <?php if ($data['sale_price'] != '' ?? null) : ?>
                                                        <div class="bestsellers_price discount">Rp. <?= number_format($data['sale_price'], 0, ",", ".");  ?><span>Rp.<?= number_format($data['regular_price'], 0, ",", "."); ?></span></div>
                                                    <?php else : ?>
                                                        <div class="bestsellers_price">Rp.<?= number_format($data['regular_price'], 0, ",", "."); ?></div>
                                                    <?php endif ?>
                                                    <a name="" id="" class="text-center btn btn-md btn-primary btn-block mt-2" href="#" role="button"> BELI</a>
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
        <div class="trends b2bb2c">
            <div class="container">
                <!-- <div class="row bg-info" style="border-radius:25px"> -->
                <div class="border border-dark row py-4" style="background-image: linear-gradient(to right, #0F2027, #203A43, #2C5364, #2C5364, #203A43, #0F2027); border-radius:25px">

                    <!-- Trends Content -->
                    <div class="col-lg-4">
                        <div class="trends_container">
                            <h2 class="px-5 trends_title text-white">KELAS B2B B2C</h2>
                            <div class="px-5 trends_text">
                                <a href="#" class="text-white">Lihat Semua ></a>
                            </div>
                            <div class="px-5 trends_slider_nav">
                                <div class="b2c_prev trends_nav"><i class="fas fa-angle-left ml-auto"></i></div>
                                <div class="b2c_next trends_nav"><i class="fas fa-angle-right ml-auto"></i></div>
                            </div>
                        </div>
                    </div>

                    <!-- Trends Slider -->
                    <div class="col-lg-8">
                        <div class="trends_slider_container">
                            <!-- Trends Slider -->
                            <div class="owl-carousel owl-theme b2c_slider">
                                <?php
                                $no = 0;
                                foreach ($b2bb2c as $data) : ?>
                                    <!-- Trends Slider Item -->
                                    <div class="owl-item">
                                        <div class="trends_item">
                                            <div class="trends_image d-flex flex-column align-items-center justify-content-center"><img src="<?= $data['img'] ?>" alt=""></div>
                                            <div class="trends_content">
                                                <div class="trends_category"><a href="#"><?= $data['kategori'] ?></a></div>
                                                <div class="trends_info clearfix">
                                                    <div class="trends_name"><a href="product.html"><?= $data['judul'] ?></a></div><br>
                                                    <?php if ($data['sale_price'] != '' ?? null) : ?>
                                                        <div class="bestsellers_price discount">Rp. <?= number_format($data['sale_price'], 0, ",", ".");  ?><span>Rp.<?= number_format($data['regular_price'], 0, ",", "."); ?></span></div>
                                                    <?php else : ?>
                                                        <div class="bestsellers_price">Rp.<?= number_format($data['regular_price'], 0, ",", "."); ?></div>
                                                    <?php endif ?>
                                                    <a name="" id="" class="text-center btn btn-md btn-primary btn-block mt-2" href="#" role="button"> BELI</a>
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
        <div class="trends">
            <div class="container">
                <!-- <div class="row bg-info" style="border-radius:25px"> -->
                <div class="border border-dark row py-4" style="background-image: linear-gradient(to right, #0F2027, #203A43, #2C5364, #2C5364, #203A43, #0F2027); border-radius:25px">

                    <!-- Trends Content -->
                    <div class="col-lg-4">
                        <div class="trends_container">
                            <h2 class="px-5 trends_title text-white">KELAS SALES MINDSET</h2>
                            <div class="px-5 trends_text">
                                <a href="#" class="text-white">Lihat Semua ></a>
                            </div>
                            <div class="px-5 trends_slider_nav">
                                <div class="mind_prev trends_nav"><i class="fas fa-angle-left ml-auto"></i></div>
                                <div class="mind_next trends_nav"><i class="fas fa-angle-right ml-auto"></i></div>
                            </div>
                        </div>
                    </div>

                    <!-- Trends Slider -->
                    <div class="col-lg-8">
                        <div class="trends_slider_container">
                            <!-- Trends Slider -->
                            <div class="owl-carousel owl-theme mind_slider">
                                <?php
                                $no = 0;
                                foreach ($mindset as $data) : ?>
                                    <!-- Trends Slider Item -->
                                    <div class="owl-item">
                                        <div class="trends_item">
                                            <div class="trends_image d-flex flex-column align-items-center justify-content-center"><img src="<?= $data['img'] ?>" alt=""></div>
                                            <div class="trends_content">
                                                <div class="trends_category"><a href="#"><?= $data['kategori'] ?></a></div>
                                                <div class="trends_info clearfix">
                                                    <div class="trends_name"><a href="product.html"><?= $data['judul'] ?></a></div><br>
                                                    <?php if ($data['sale_price'] != '' ?? null) : ?>
                                                        <div class="bestsellers_price discount">Rp. <?= number_format($data['sale_price'], 0, ",", ".");  ?><span>Rp.<?= number_format($data['regular_price'], 0, ",", "."); ?></span></div>
                                                    <?php else : ?>
                                                        <div class="bestsellers_price">Rp.<?= number_format($data['regular_price'], 0, ",", "."); ?></div>
                                                    <?php endif ?>
                                                    <a name="" id="" class="text-center btn btn-md btn-primary btn-block mt-2" href="#" role="button"> BELI</a>
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

        <div class="trends">
            <div class="container">
                <!-- <div class="row bg-info" style="border-radius:25px"> -->
                <div class="border border-dark row py-4" style="background-image: linear-gradient(to right, #0F2027, #203A43, #2C5364, #2C5364, #203A43, #0F2027); border-radius:25px">

                    <!-- Trends Content -->
                    <div class="col-lg-4">
                        <div class="trends_container">
                            <h2 class="px-5 trends_title text-white">SEMUA KELAS</h2>
                            <div class="px-5 trends_text">
                                <a href="#" class="text-white">Lihat Semua ></a>
                            </div>
                            <div class="px-5 trends_slider_nav">
                                <div class="all_prev trends_nav"><i class="fas fa-angle-left ml-auto"></i></div>
                                <div class="all_next trends_nav"><i class="fas fa-angle-right ml-auto"></i></div>
                            </div>
                        </div>
                    </div>

                    <!-- Trends Slider -->
                    <div class="col-lg-8">
                        <div class="trends_slider_container">
                            <!-- Trends Slider -->
                            <div class="owl-carousel owl-theme all_slider">
                                <?php
                                $no = 0;
                                foreach ($all_product as $data) : ?>
                                    <!-- Trends Slider Item -->
                                    <div class="owl-item">
                                        <div class="trends_item">
                                            <div class="trends_image d-flex flex-column align-items-center justify-content-center"><img src="<?= $data['img'] ?>" alt=""></div>
                                            <div class="trends_content">
                                                <div class="trends_category"><a href="#"><?= $data['kategori'] ?></a></div>
                                                <div class="trends_info clearfix">
                                                    <div class="trends_name"><a href="product.html"><?= $data['judul'] ?></a></div><br>
                                                    <?php if ($data['sale_price'] != '' ?? null) : ?>
                                                        <div class="bestsellers_price discount">Rp. <?= number_format($data['sale_price'], 0, ",", ".");  ?><span>Rp.<?= number_format($data['regular_price'], 0, ",", "."); ?></span></div>
                                                    <?php else : ?>
                                                        <div class="bestsellers_price">Rp.<?= number_format($data['regular_price'], 0, ",", "."); ?></div>
                                                    <?php endif ?>
                                                    <a name="" id="" class="text-center btn btn-md btn-primary btn-block mt-2" href="#" role="button"> BELI</a>
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
                            <a class="navbar-brand mb-3" href="#">
                                <img src="<?= base_url() ?>assets/images/logo/logo-su.png" class="img-fluid">
                            </a>
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
                            <div class="footer_title">Salesuniversity</div>
                            <ul class="footer_list">
                                <li><a href="#">Tentang Salesunivesity</a></li>
                                <li><a href="#">Kontak Kami</a></li>
                                <li><a href="#">Artikel</a></li>
                                <li><a href="#">FAQ</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <div class="footer_column">
                            <div class="footer_title">Beli</div>
                            <ul class="footer_list">
                                <li><a href="#">Kebijakan Pengembalian Dana</a></li>
                                <li><a href="#">Cara Belanja</a></li>
                                <li><a href="#">Pembayaran</a></li>
                                <li><a href="#">Jaminan Aman</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <div class="footer_column">
                            <div class="footer_title">Bantuan dan Panduan</div>
                            <ul class="footer_list">
                                <li><a href="#">Salesuniversity Care</a></li>
                                <li><a href="#">Syarat & Ketentuan</a></li>
                                <li><a href="#">Kebijakan Privasi</a></li>
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
                                </script> Sales University
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </div>
                            <div class="logos ml-sm-auto">
                                <ul class="logos_list">
                                    <li><a href="#"><img src="images/logos_1.png" alt=""></a></li>
                                    <li><a href="#"><img src="images/logos_2.png" alt=""></a></li>
                                    <li><a href="#"><img src="images/logos_3.png" alt=""></a></li>
                                    <li><a href="#"><img src="images/logos_4.png" alt=""></a></li>
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