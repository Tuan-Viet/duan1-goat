<div class="line_top"></div>
<div class="container blog mt40">
    <div class="row">
        <div class="col-lg-9 row">
            <?php foreach ($listhanghoa as $hanghoa) : ?>
                <div class="cart col-lg-3 col-sm-4">
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
        <div class="col-lg-3 list">
            <div class="nav_list">
                <h3 class="title_list">Danh mục sản phẩm</h3>
                <div class="line_list"></div>
                <ul class="nav_list-section">
                    <li><a href="" class="select_list">Quần áo</a></li>
                    <li><a href="" class="select_list">Phụ kiện</a></li>
                    <li><a href="" class="select_list">Giày</a></li>
                    <li><a href="" class="select_list">Balo</a></li>
                    <li><a href="" class="select_list">Túi xách</a></li>
                </ul>
            </div>
        </div>  
    </div>
</div>