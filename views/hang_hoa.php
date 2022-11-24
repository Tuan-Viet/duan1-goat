<content>
    <div class="content_banner">
        <img src="https://file.hstatic.net/200000136061/file/slide-01_67f1c987d8394c28b528d35368a098d8.jpg" alt="" class="img_banner-content">
    </div>
    <div class="content_main wrapper">
        <div class="header_content-main">
            <div class="first_section">
                <ion-icon class="icon_option" name="options-outline"></ion-icon>
                <span>Bộ lọc</span>
            </div>
            <p class="title_content-main">Tất cả sản phẩm</p>
            <form action="" class="form_content-main">
                <ion-icon name="list-outline" class="option_cate"></ion-icon>
                <select name="" id="" class="select_content-main">
                    <option value="Mới nhất">Mới nhất</option>
                    <option value="">Giá thấp đến cao</option>
                    <option value="">Bán chạy nhất</option>
                </select>
            </form>
        </div>
        <div class="content_collections">
            <div class="carts">
                <?php foreach ($listhanghoa as $hanghoa) : ?>
                    <div class="cart">
                        <div class="cart_photo">
                            <div class="sale_pro">-30%</div>
                            <a href="index.php?act=hang_hoa_chi_tiet&id=<?= $hanghoa['id'] ?>" class="img_href">
                                <img src="./images/products/<?= $hanghoa['image'] ?>" alt="" class="cart_img">
                                <!-- <img src="//product.hstatic.net/200000136061/product/274247983_366248368454609_1600481175588658934_n_104d962cc6994ce4a556a90e50186ad9_master.jpg" alt="" class="cart_img-bottom"> -->
                            </a>
                            <div class="cart_icon-plus">
                                <img class="cart_img-icon" src="./icons/add-circle-outline.svg" alt="">
                            </div>
                        </div>
                        <div class="cart_nav">
                            <p class="cart_name"><?= $hanghoa['product_name'] ?></p>
                            <p class="cart_price"><?= $hanghoa['total'] ?> <del class="sale" style="color:#6666"><?= $hanghoa['product_price'] ?></del></p>
                            <!-- <ul class="cart_color mt8">
                                <li class="not_swap"><img src="./images/products/AK2_avt.jpg" alt="" class="img_not-swap"></li>
                                <li class="not_swap"><img src="./images/products/AK2_avt.jpg" alt="" class="img_not-swap"></li>
                                <li class="not_swap"><img src="./images/products/AK2_avt.jpg" alt="" class="img_not-swap"></li>
                            </ul> -->
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
    <div class="overlay_cart pro_details">
        <div class="row nav_overlay-cart">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon_close ionicon" viewBox="0 0 512 512"><title>Close</title><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M368 368L144 144M368 144L144 368"/></svg>      
            <div class="col-lg-5 row_left-detail">
                <div class="section_pro-top">
                    <div class="photo_pro-main">
                        <img src="./images/products/AT2_avt.jpg" alt="" class="img_pro-main">
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="pro_detail-content">
                    <div class="title_pro">
                        <h1>Sky jacket</h1>
                    </div>
                    <div class="price_pro">
                        <h1>288.000đ<del class="price_pro-sale">480.000đ</del></h1>
                    </div>
                    <form action="" class="form_pro">
                        <div class="select_swatch mb24">
                        <span class="header_swatch mb8">Màu sắc:</span>
                        <div class="colors_pro">
                            <div class="color color_avt active_color">
                                <img src="./images/products/AT2_avt.jpg" alt="" class="img_swap">
                            </div>
                            <div class="color color_kem">
                                <img src="./images/products/AT2_kem.jpg" alt="" class="img_swap">
                            </div>
                            <div class="color color_xam">
                                <img src="./images/products/AT2_xam.jpg" alt="" class="img_swap">
                            </div>
                            <div class="color color_xanh">
                                <img src="./images/products/AT2_xanh.jpg" alt="" class="img_swap">
                            </div>
                            <div class="color color_avt">
                                <img src="./images/products/AT2_avt.jpg" alt="" class="img_swap">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="select_swatch mb24">
                    <span class="header_swatch mb8">Kích thước</span>
                    <div class="select_swap">
                        <label class="swap_element" for="radio_size">
                            <input type="radio" name="size" id="radio_size" class="size_0-1">
                            <div class="ellipse"></div>
                            <name class="size-S">S</name>
                        </label>
                        <label class="swap_element" for="radio_size1">
                            <input type="radio" name="size" id="radio_size1" class="size_0-1">
                            <div class="ellipse"></div>
                            <name class="size-S">M</name>
                        </label>
                        <label class="swap_element" for="radio_size2">
                            <input type="radio" name="size" id="radio_size2" class="size_0-1">
                            <div class="ellipse"></div>
                            <name class="size-S">L</name>
                        </label>
                    </div>
                </div>
                <div class="select_watch">
                    <input type="number" name="" id="" class="form_control-quantity">
                    <button class="btn_cart">Thêm vào giỏ hàng</button>
                </div>
                </form>
                <div class="link_detail">
                    <?php foreach ($listhanghoa as $hanghoa) : ?>
                        <a href="index.php?act=hang_hoa_chi_tiet&id=<?= $hanghoa['id'] ?>" class="link_pro_detail">Xem chi tiết sản phẩm</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>
    <div class="overlay_pro">
        <div class="nav_overlay-pro">
            <div class="cate_pro-overlay">
                <h3 class="title_overlay-pro pd10">Danh mục sản phẩm -</h3>
                <div class="subnav_overlay pb10">
                    <a href="" class="subnav_text pd5">Sản phẩm khuyến mãi</a>
                    <a href="" class="subnav_text pd5">Sản phẩm nổi bật</a>
                    <a href="" class="subnav_text pd5">Tất cả sản phẩm</a>
                </div>
            </div>
            <div class="brand_pro-overlay">
                <h3 class="title_overlay-pro pt10">Danh mục sản phẩm -</h3>
                <ul class="subnav_overlay pb10">
                    <li>
                    <input type="radio" name="brand" id="brand_1">
                    <label for="brand_1" class="brand">
                        <div class="ellipse_brand"></div>
                        Goat
                    </label>
                    </li>
                    <li>
                    <input type="radio" name="brand" id="brand_2">
                    <label for="brand_2" class="brand">
                        <div class="ellipse_brand"></div>
                        Khác
                    </label>
                    </li>
                </ul> 
            </div>
            <div class="price_sort-overlay">
                <h3 class="title_overlay-pro pd10">Giá sản phẩm -</h3>
                
            </div>
            <div class="color_pro-overlay">

            </div>
            <div class="size_pro-overlay">

            </div>
        </div>
    </div>
</div>
</div>

</content>