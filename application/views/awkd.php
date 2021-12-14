<!-- kelass Online -->

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