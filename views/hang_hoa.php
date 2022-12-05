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
                <!-- <h3 class="title_list">Danh mục sản phẩm</h3> -->
                <!-- <div class="line_list"></div> -->
                <ul class="nav_list-section mt8">
                    <li><a href="index.php?act=hang_hoa" class="select_list active">Tât cả sản phẩm</a></li>
                    <?php foreach($loaihang as $hang): ?>
                    <li><a href="index.php?act=hang_hoa&id=<?= $hang['id'] ?>" class="select_list"><?= $hang['cate_name'] ?></a></li>
                    <!-- <li><a href="" class="select_list">Giày</a></li>
                    <li><a href="" class="select_list">Balo</a></li>
                    <li><a href="" class="select_list">Túi xách</a></li> -->
                    <?php endforeach ?>
                    <div class="line"></div>
                </ul>
                <!-- <div class="line_list"></div> -->
            </div>
        <div class="container mt40">
            <div class="carts row">
                <?php foreach ($listhanghoa as $hanghoa) : ?>
                    <div class="cart col-lg-3 col-sm-4">
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
        </div>
    </div>
</div>
</div>

</content>