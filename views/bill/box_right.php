<div class="main_right col-lg-5">
    <?php $thanhtoan = 0; ?>
    <?php foreach ($_SESSION['my_cart'] as $cart): ?>
    <div class="info_pro mb24">
        <div class="info_pro-id">
            <div class="photo_pro-view">
                <a href="">
                    <img src="./images/products/<?= $cart[4] ?>" alt="" class="img_pro-view">
                    <span class="pro_quantity-cart clear_fix-quantity"><span class="pro_quantity-view"><?= $cart[7] ?></span></span>
                </a>
            </div>
            <div class="info_pro-view">
                <a href="" class="pro_title-view"><?= $cart[1] ?></a>
                <span class="pro_cate-view"><?= $cart[5] ?> /<?= $cart[6]?></span>
            </div>
        </div>
        <span class="pro_price-view pro_price-cart"><?= $cart[8] ?> <sup>đ</sup></span>
        <?php
            $thanhtoan += $cart[8];
        ?>
    </div>
    <?php endforeach ?>
    <div class="row_table-pay">
        <table class="total_line-table">
            <tbody class="total_line-tbody">
                <tr class="total_line">
                    <td class="total_line-name">Tạm tính</td>
                    <td class="total_line-price"><?= $thanhtoan ?> <sup>đ</sup></td>
                </tr>
                <tr class="total_line">
                    <td class="total_line-name">Phí vẫn chuyển</td>
                    <td class="total_line-price">30000</td>
                </tr>
            </tbody>
            <tfoot class="total_line-footer mt24">
                <tr class="total_line">
                    <td class="total_line-name">Tổng cộng</td>
                    <td class="total_line-price"><?= $thanhtoan + 30000 ?> <sup>đ</sup> <span>VNĐ</span></td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>