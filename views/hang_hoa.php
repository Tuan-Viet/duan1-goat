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
                            <div class="sale_pro">-<?= $hanghoa['sale'] ?>%</div>
                            <a href="index.php?act=hang_hoa_chi_tiet&id=<?= $hanghoa['id'] ?>" class="img_href">
                                <img src="./images/products/<?= $hanghoa['image'] ?>" alt="" class="cart_img">
                            </a>
                            <div class="cart_icon-plus">
                                <img class="cart_img-icon" src="./icons/add-circle-outline.svg" alt="">
                            </div>
                        </div>
                        <div class="cart_nav">
                            <p class="cart_name"><?= $hanghoa['product_name'] ?></p>
                            <p class="cart_price"><?= $hanghoa['total'] ?> <del class="sale" style="color:#6666"><?= $hanghoa['product_price'] ?></del></p>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
    <?php include "overlay_detail.php" ?>
</div>
</div>

</content>