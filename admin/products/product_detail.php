<div class="mainContent">
    <div class="title">
        <p>CHI TIẾT SẢN PHẨM</p>
    </div>
    <div class="">
        <div class="box"></div>
        <?php foreach ($hanghoa as $hh) : ?>
            <div class="box-input">
                <label class="">MÃ SP</label>
                <input type="text" name="id" readonly value="<?= $hh['id'] ?>" disabled>
                <!-- <label for="" class="note">*ID tự động tăng</label> -->
            </div>
            <div class="box-input">
                <label class="">Tên sản phẩm</label>
                <input type="text" class="" id="" name="ten_hh" readonly value="<?= $hh['product_name'] ?>" disabled>
            </div>
            <div class="box-input">
                <label class="">Đơn giá</label>
                <input type="text" class="" id="" name="product_price" readonly value="<?= $hh['product_price'] ?>" disabled>
            </div>
            <div class="box-input">
                <label class="">Giảm giá</label>
                <input type="text" class="" id="" name="sale" readonly value="<?= $hh['sale'] ?>" disabled>
            </div>
            <div class="box-input">
                <label class="">Mô tả</label>
                <textarea name="description" id="" cols="30" rows="10"><?= $hh['description'] ?></textarea>
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