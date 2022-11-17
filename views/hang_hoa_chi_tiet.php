<main>
    <div class="fade_tab">
        <ul class="list_tab container"></ul>
    </div>
    <div class="pro_details container mt40">
        <div class="row">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-3 pro_detail-select">
                        <div class="photo_pro-detail">
                            <!-- <input type="radio" name="color" id="image_color-blue" class="image_color" checked> -->
                            <img src="//product.hstatic.net/200000136061/product/z2438908052144_e53bec59ffdca49f718a1797dcc8f2d1_ec0642a0b53c4ff6abb6124cadd3d6f0_compact.jpg" alt="" class="img_pro-detail">
                        </div>
                        <div class="photo_pro-detail">
                            <img src="//product.hstatic.net/200000136061/product/z2438908053159_a7eaeec00df1a333b8f517775437514d_cb31c15dcc054019bb105ba969d671c8_master.jpg" alt="" class="img_pro-detail">
                        </div>
                        <div class="photo_pro-detail">
                            <img src="//product.hstatic.net/200000136061/product/249228972_598029418205435_7315110271556742644_n_0d419968e9714b76a1bb51cdeb01fd9a_compact.png" alt="" class="img_pro-detail">
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="photo_pro-main">
                            <input type="radio" name="color" id="image_color-blue" class="image_color" checked>
                            <img src="//product.hstatic.net/200000136061/product/253575852_1520721318295924_6443084924131279064_n_35b2677c1993460fa3fbb8ca4fd2f7ff_master.png" alt="" class="img_pro-main">
                        </div>
                        <div class="photo_pro-main">
                            <input type="radio" name="color" id="image_color-black" class="image_color">
                            <img src="//product.hstatic.net/200000136061/product/z2482575528641_c197596a92a868c0aea3d974efa12284_b614bd2f862545bb967c7231772c26ce_master.jpg" alt="" class="img_pro-main">
                        </div>
                        <div class="photo_pro-main">
                            <input type="radio" name="color" id="image_color-white" class="image_color">
                            <img src="//product.hstatic.net/200000136061/product/z2482575530327_cfdfc6a724f1ed113ea24e0be2dca65b_682f55a1775e415b82735f27cebcff22_master.jpg" alt="" class="img_pro-main">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="pro_detail-content">
                    <?php extract($listhanghoa) ?>
                    <div class="title_pro">
                        <h1><?= $product_name ?></h1>
                    </div>
                    <div class="price_pro">
                        <h1><?= $total ?><del class="price_pro-sale"><?= $product_price ?></del></h1>
                    </div>
                    <form action="index.php?act=addtocart" method="post" class="form_pro">
                        <div class="select_swatch mb24">
                            <span class="header_swatch mb8">Màu sắc:</span>
                            <div class="colors_pro">
                                <label for="image_color-blue" class="label_color">
                                    <div class="ellipse_color" style="background-color: #abbdec;"></div>
                                </label>
                                <label for="image_color-black" class="label_color">
                                    <div class="ellipse_color" style="background-color: #000;"></div>
                                </label>
                                <label for="image_color-white" class="label_color">
                                    <div class="ellipse_color" style="background-color: #fff;"></div>
                                </label>
                            </div>
                        </div>
                        <div class="select_swatch mb24">
                            <span class="header_swatch mb8">Kích thước</span>
                            <div class="select_swap">
                                <?php foreach($listproduct as $product_detail): ?>
                                    <?php extract($product_detail) ?>
                                    <label class="swap_element" for="<?= $id?>">
                                        <input type="radio" name="size" id="<?= $id?>" class="size_0-1">
                                        <div class="ellipse"></div>
                                        <name class="size-S"><?= $size ?></name>
                                    </label>
                                <?php endforeach ?>
                                <!-- <label class="swap_element" for="radio_size1">
                                    <input type="radio" name="size" id="radio_size1" class="size_0-1">
                                    <div class="ellipse"></div>
                                    <name class="size-S">M</name>
                                </label>
                                <label class="swap_element" for="radio_size2">
                                    <input type="radio" name="size" id="radio_size2" class="size_0-1">
                                    <div class="ellipse"></div>
                                    <name class="size-S">L</name>
                                </label> -->
                            </div>
                        </div>
                        <div class="select_watch">
                            <input type="number" name="quantity" min="1" value="1" id="" class="form_control-quantity">
                            <button name="btn_addtocart" class="btn_cart">Thêm vào giỏ hàng</button>
                            <button type="submit" name="btn_buynow"  class="btn_cart">Mua ngay</button>
                        </div>
                    </form>
                </div>
                <div class="dsc_pro-detail">
                    <p class="title_dsc-detail">Chọn size phù hợp</p>
                    <div class="nav_dsc-detail">
                        <p>Size S dài 69 rộng 50cm
                            <br>
                            Size M dài 70 rộng 54cm
                            <br>
                            Size L dài 71 rộng 57cm
                        </p>
                        <p>S dưới 52kg - 1m6
                            <br>
                            M dưới 70kg - 1m7
                            <br>
                            L dưới 85kg - 1m8
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="list_product-related mt40">
            <h1 class="title_pro-related">Sản phẩm liên quan</h1>
            <div class="carts carts_related">
                <div class="cart cart_related">
                    <a href="./product_detail.html" class="img_href">
                        <div class="cart_photo">
                            <img src="//product.hstatic.net/200000136061/product/274880931_4918536151560697_4517164232254841609_n_42233f347d1b4b26b3c4847b40a37d3d_large.jpg" alt="" class="cart_img">
                            <img src="//product.hstatic.net/200000136061/product/274247983_366248368454609_1600481175588658934_n_104d962cc6994ce4a556a90e50186ad9_master.jpg" alt="" class="cart_img-bottom">
                        </div>
                    </a>
                    <div class="cart_nav">
                        <p class="cart_name">Jacket Basic SS2</p>
                        <p class="cart_price">225,000đ <del class="sale" style="color:#6666">450,000đ</del></p>
                    </div>
                    <ul class="cart_color mt8">
                        <li class="not_swap"><span class="black"></span></li>
                        <li class="not_swap"><span class="black"></span></li>
                        <li class="not_swap"><span class="black"></span></li>
                    </ul>
                </div>
                <div class="cart cart_related">
                    <a href="./product_detail.html" class="img_href">
                        <div class="cart_photo">
                            <img src="//product.hstatic.net/200000136061/product/z3225156601016_f4e0d943da963f8b10b47af64135fc49_f9a81148e90f45c6bf0217a055a35e23_large.jpg" alt="" class="cart_img">
                            <img src="//product.hstatic.net/200000136061/product/z3225156607652_c1b382e8ddf32802251a18084db63be0_5a5a24376c064a2aa91c3b5fa5fabacc_master.jpg" alt="" class="cart_img-bottom">
                        </div>
                    </a>
                    <div class="cart_nav">
                        <p class="cart_name">Jacket Basic SS2</p>
                        <p class="cart_price">225,000đ <del class="sale" style="color:#6666">450,000đ</del></p>
                    </div>
                    <ul class="cart_color mt8">
                        <li class="not_swap"><span class="black"></span></li>
                        <li class="not_swap"><span class="black"></span></li>
                        <li class="not_swap"><span class="black"></span></li>
                    </ul>
                </div>
                <div class="cart cart_related">
                    <a href="./product_detail.html" class="img_href">
                        <div class="cart_photo">
                            <img src="//product.hstatic.net/200000136061/product/z2240400309364_7e98db0dd6d4ab8d07e97d2a13a22a91_45fe09b336154acda6c46d89864d02c1_master.jpg" alt="" class="cart_img">
                            <img src="//product.hstatic.net/200000136061/product/z2262508853923_55e3ece656e4db830ffe441f883e9a8f_06d0e27151ad4fd89bbbb7847afde481_master.jpg" alt="" class="cart_img-bottom">
                        </div>
                    </a>
                    <div class="cart_nav">
                        <p class="cart_name">Jacket Basic SS2</p>
                        <p class="cart_price">225,000đ <del class="sale" style="color:#6666">450,000đ</del></p>
                    </div>
                    <ul class="cart_color mt8">
                        <li class="not_swap"><span class="black"></span></li>
                        <li class="not_swap"><span class="black"></span></li>
                        <li class="not_swap"><span class="black"></span></li>
                    </ul>
                </div>
                <div class="cart cart_related">
                    <a href="./product_detail.html" class="img_href">
                        <div class="cart_photo">
                            <img src="//product.hstatic.net/200000136061/product/z2438908053159_a7eaeec00df1a333b8f517775437514d_cb31c15dcc054019bb105ba969d671c8_master.jpg" alt="" class="cart_img">
                            <img src="//product.hstatic.net/200000136061/product/z2438908052144_e53bec59ffdca49f718a1797dcc8f2d1_ec0642a0b53c4ff6abb6124cadd3d6f0_master.jpg" alt="" class="cart_img-bottom">
                        </div>
                    </a>
                    <div class="cart_nav">
                        <p class="cart_name">Jacket Basic SS2</p>
                        <p class="cart_price">225,000đ <del class="sale" style="color:#6666">450,000đ</del></p>
                    </div>
                    <ul class="cart_color mt8">
                        <li class="not_swap"><span class="black"></span></li>
                        <li class="not_swap"><span class="black"></span></li>
                        <li class="not_swap"><span class="black"></span></li>
                    </ul>
                </div>
                <div class="cart cart_related">
                    <a href="./product_detail.html" class="img_href">
                        <div class="cart_photo">
                            <img src="//product.hstatic.net/200000136061/product/274880931_4918536151560697_4517164232254841609_n_42233f347d1b4b26b3c4847b40a37d3d_large.jpg" alt="" class="cart_img">
                            <img src="//product.hstatic.net/200000136061/product/274247983_366248368454609_1600481175588658934_n_104d962cc6994ce4a556a90e50186ad9_master.jpg" alt="" class="cart_img-bottom">
                        </div>
                    </a>
                    <div class="cart_nav">
                        <p class="cart_name">Jacket Basic SS2</p>
                        <p class="cart_price">225,000đ <del class="sale" style="color:#6666">450,000đ</del></p>
                    </div>
                    <ul class="cart_color mt8">
                        <li class="not_swap"><span class="black"></span></li>
                        <li class="not_swap"><span class="black"></span></li>
                        <li class="not_swap"><span class="black"></span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</main>