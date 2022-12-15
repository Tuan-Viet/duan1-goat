<content>
    <div class="content_banner">
        <img src="https://file.hstatic.net/200000136061/file/slide-01_67f1c987d8394c28b528d35368a098d8.jpg" alt="" class="img_banner-content">
    </div>
    <div class="content_main wrapper container-fluid">
    <?php if (isset($_GET['id'])) { ?>
            <?php foreach($loaihang as $hang): ?>
                <?php if ($hang['id'] == $_GET['id']) :?>
                    <p class="title_content-main"><?= $hang['cate_name'] ?></p>
                <?php endif ?>
            <?php endforeach ?>
        <?php } else { ?>
        <p class="title_content-main">Tất cả sản phẩm</p>
    <?php } ?>
        <div class="header_content-main">
            <div class="first_section">
                <ion-icon class="icon_option" name="options-outline"></ion-icon>
                <span>Bộ lọc</span>
            </div>
            <?php if(isset($_GET['id'])) { ?>
            <form action="index.php?act=hang_hoa&id=<?= $_GET['id'] ?>&cate_id=<?= $_GET['id'] ?>" method="post" class="form_content-main">
                <ion-icon name="list-outline" class="option_cate"></ion-icon>
                <select name="select_product" id="" class="select_content-main">
                    <option value="0">Mới nhất</option>
                    <option value="1">Giá thấp đến cao</option>
                    <option value="2">Giá cao đến thấp</option>
                    <option value="3">Bán chạy nhất</option>
                </select>
                <button type="submit" name="check" class="btn_list-pro">Sắp xếp</button>
            </form>
            <?php } else { ?>
                <form action="index.php?act=hang_hoa" method="post" class="form_content-main">
                <ion-icon name="list-outline" class="option_cate"></ion-icon>
                <select name="select_product" id="" class="select_content-main">
                    <option value="0">Mới nhất</option>
                    <option value="1">Giá thấp đến cao</option>
                    <option value="2">Giá cao đến thấp</option>
                    <!-- <option value="3">Bán chạy nhất</option> -->
                </select>
                <button type="submit" name="check" class="btn_list-pro">Sắp xếp</button>
            </form>
            <?php } ?>
        </div>
        <div class="nav_list">
                <ul class="nav_list-section mt8">
                    <li><a href="index.php?act=hang_hoa" class="select_list active">Tât cả sản phẩm</a></li>
                    <?php foreach($loaihang as $hang): ?>
                    <li><a href="index.php?act=hang_hoa&id=<?= $hang['id'] ?>" class="select_list"><?= $hang['cate_name'] ?></a></li>
                    <?php endforeach ?>
                    <div class="line"></div>
                </ul>
            </div>
        <div class="container-fluid mt40">
            <div class="carts row row_product-md">
                <?php foreach ($listhanghoa as $hanghoa) : ?>
                    <div class="cart col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="cart_photo">
                            <?php if($hanghoa['sale'] != 0) { ?>
                                <div class="sale_pro">-<?= $hanghoa['sale'] ?>%</div>
                            <?php }  ?>
                            <a href="index.php?act=hang_hoa_chi_tiet&id=<?= $hanghoa['id'] ?>" class="img_href">
                                <img src="./images/products/<?= $hanghoa['image'] ?>" alt="" class="cart_img">
                            </a>
                            <div class="overlay_addtocard">
                                <!-- <input type="submit" class="btn_addtocard" value="Thêm vào giỏ hàng"> -->
                                <a href="index.php?act=hang_hoa_chi_tiet&id=<?= $hanghoa['id'] ?>" class="btn_addtocard">Thêm vào giỏ hàng</a>
                            </div>
                        </div>
                        <div class="cart_nav">
                            <a href="index.php?act=hang_hoa_chi_tiet&id=<?= $hanghoa['id'] ?>" class="cart_name"><?= $hanghoa['product_name'] ?></a>
                            <?php if($hanghoa['sale'] != 0) { ?>
                                <p class="cart_price"><?= $hanghoa['total'] ?> <del class="sale" style="color:#6666"><?= $hanghoa['product_price'] ?></del></p>
                            <?php } else { ?>
                                <p class="cart_price"><?= $hanghoa['product_price'] ?></p>
                            <?php } ?>
                            <!-- <ul class="cart_color mt8">
                                <li class="not_swap"><img src="./images/products/AK2_avt.jpg" alt="" class="img_not-swap"></li>
                                <li class="not_swap"><img src="./images/products/AK2_avt.jpg" alt="" class="img_not-swap"></li>
                                <li class="not_swap"><img src="./images/products/AK2_avt.jpg" alt="" class="img_not-swap"></li>
                            </ul> -->
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
            <div class="content__paging">
                <ul class="content__paging__row">
                    <li class="icon__paging__row content__paging__row-left">
                        
                    <ion-icon name="chevron-back-outline" class="icon_page icon_page-left"></ion-icon>
                    </li>
                    <div class="number_page">
                        <!-- <li class="active">1</li>
                        <li>2</li>
                        <li>3</li>
                        <li>4</li> -->
                    </div>
                    <li class="icon__paging__row content__paging__row-right">
                        <!-- <ion-icon name="chevron-forward-outline"></ion-icon> -->
                        <ion-icon name="chevron-forward-outline" class="icon_page icon_page-right"></ion-icon>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>

</content>