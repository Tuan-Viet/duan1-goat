<div class="main_right col-lg-5">
    <?php foreach ($load_all_order_detail as $order): ?>
        <?php extract($order) ?>
    <div class="info_pro mb24">
        <div class="info_pro-id">
            <div class="photo_pro-view">
                <a href="">
                    <img src="./images/products/<?= $image ?>" alt="" class="img_pro-view">
                    <span class="pro_quantity-view pro_quantity-cart clear_fix-quantity"><span class="pro_quantity-view"><?= $quantity ?></span></span>
                </a>
            </div>
            <div class="info_pro-view">
                <a href="" class="pro_title-view"><?= $product_name ?></a>
                <span class="pro_cate-view"><?= $product_color ?> /<?= $size?></span>
            </div>
        </div>
        <span class="pro_price-view pro_price-cart"><?= $total ?> <sup>đ</sup></span>
    </div>
    <?php endforeach ?>
    <?php 
        if(isset($load_one_order)&&(is_array($load_one_order))) {
            extract($load_one_order);
        }
    ?>
    <div class="row_table-pay">
        <table class="total_line-table">
            <tbody class="total_line-tbody">
                <tr class="total_line">
                    <td class="total_line-name">Tạm tính</td>
                    <td class="total_line-price"><?= $total ?> <sup>đ</sup></td>
                </tr>
                <tr class="total_line">
                    <td class="total_line-name">Phí vẫn chuyển</td>
                    <td class="total_line-price">-</td>
                </tr>
            </tbody>
            <tfoot class="total_line-footer mt24">
                <tr class="total_line">
                    <td class="total_line-name">Tổng cộng</td>
                    <td class="total_line-price"><?= $total ?> <sup>đ</sup> <span>VNĐ</span></td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>