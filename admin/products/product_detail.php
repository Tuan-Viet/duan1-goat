<div class="mainContent">
    <div class="title">
        <p>CHI TIẾT SẢN PHẨM</p>
    </div>
    <div class="main">
        <?php foreach ($hanghoa as $hh) : ?>

            <div class="box" style="margin-bottom: 50px;">
                <div class="col-lg-12 box_pro-main row" style="display: flex;">
                    <div class="list_thumbs col-lg-2 col-xs-12">
                        <?php foreach ($hh_detail as $loai)
                            if ($hh['id'] == $loai['product_id']) { ?>
                            <div class="thumb_photo row" onclick="changeimg(this)">
                                <img src="./../images/products/<?= $loai['image_detail'] ?>" alt="" width="60">
                            </div>
                        <?php } ?>
                    </div>
                    <div class="photo_pro-main col-lg-10">
                        <img src="./../images/products/<?= $hh['image'] ?>" alt="" class="img_pro-main" width="300">
                    </div>
                </div>
                <div class="subbox-right">
                    <div class="name_product">
                        <span><?= $hh['product_name'] ?></span>
                    </div>
                    <hr>
                    <div class="price">
                        <span><?= $hh['product_price'] ?></span>
                    </div>
                </div>
            </div>
            
        <?php endforeach ?>
        <table class="table">
            <tr>
                <th></th>
                <th>Màu sắc</th>
                <th>Size(S)</th>
                <th>Size(M)</th>
                <th>Size(L)</th>
                <th>Size(Xl)</th>
            </tr>
            <?php foreach ($product_detail as $prd) : ?>
                <?php
                if ($hh['id'] == $prd['product_id']) {
                ?>
                    <tr>
                        <td><img src="./../images/products/<?= $prd['image_detail'] ?>" alt="" width="100"></td>
                        <td><?= $prd['product_color'] ?></td>
                        <td>
                            <?php
                            if ($prd['quantity_size_S'] > 0) {
                                echo $prd['quantity_size_S'];
                            } else {
                                echo '<span style="color: #FF0000;">Hết hàng</span>';
                            }
                            ?>
                        </td>
                        <td>
                            <?php
                            if ($prd['quantity_size_M'] > 0) {
                                echo $prd['quantity_size_M'];
                            } else {
                                echo '<span style="color: #FF0000;">Hết hàng</span>';
                            }
                            ?>
                        </td>
                        <td>
                            <?php
                            if ($prd['quantity_size_L'] > 0) {
                                echo $prd['quantity_size_L'];
                            } else {
                                echo '<span style="color: #FF0000;">Hết hàng</span>';
                            }
                            ?>
                        </td>
                        <td>
                            <?php
                            if ($prd['quantity_size_XL'] > 0) {
                                echo $prd['quantity_size_XL'];
                            } else {
                                echo '<span style="color: #FF0000;">Hết hàng</span>';
                            }
                            ?>
                        </td>

                    </tr>
                <?php
                }
                ?>
            <?php endforeach ?>
        </table>

    </div>
</div>