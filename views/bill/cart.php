<div class="carts_check mt40 container">
    <div class="header_carts-check">
        <h1>Giỏ hàng của bạn</h1>
        <p class="count_cart">Có <span>1 sản phẩm</span> trong giỏ hàng của bạn</p>
    </div>
    <table id="view_cart" class="mt50">
        <!-- <tbody> -->
        <?php
        $dem = 0;
        $thanhtoan = 0;
        ?>
        <?php foreach ($_SESSION['my_cart'] as $cart) : ?>
            <tr class="item_id-pro">
                <td class="photo_pro-view">
                    <a href="">
                        <img src="./images/products/<?= $cart[4] ?>" alt="" class="img_pro-view">
                    </a>
                </td>
                <td class="info_pro-view">
                    <a href="" class="pro_title-view"><?= $cart[1] ?></a>
                    <span class="pro_cate-view"><?= $cart[5] ?> /<?= $cart[6] ?></span>
                    <span class="pro_price-view pro_price-cart"><?= $cart[2] ?> <sup>đ</sup></span>
                    <span class="pro_quantity-view pro_quantity-cart"><div class="amount">
                        <!-- <button class="amountMinus" onclick="handleMinus()">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15" />
                            </svg>
                        </button> -->
                        <input type="text" name="quantity" min="1" value="<?= $cart[7] ?>" id="" class="form_control-quantity">
                        <!-- <button class="amountPlus" onclick="handlePlus()">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                        </button> -->
                    </div></span>
</div>
</td>
<td>
    <a href="index.php?act=delete_cart&id_cart=<?= $dem ?>">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon_trash ionicon" viewBox="0 0 512 512">
            <title>Trash</title>
            <path d="M112 112l20 320c.95 18.49 14.4 32 32 32h184c17.67 0 30.87-13.51 32-32l20-320" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
            <path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M80 112h352" />
            <path d="M192 112V72h0a23.93 23.93 0 0124-24h80a23.93 23.93 0 0124 24h0v40M256 176v224M184 176l8 224M328 176l-8 224" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
        </svg>
    </a>
</td>
</tr>
<!-- </tbody> -->
<!-- <tfoot> -->
<tr>
    <td class="total_pro-cart">
        <p><?= $cart[8] ?> <sup>đ</sup></p>
    </td>
</tr>
<?php
            $dem += 1;
            $thanhtoan += $cart[8];
?>
<?php endforeach ?>
<!-- </tfoot> -->
</table>
<div class="row pay mb30 mt28">
    <div class="col-lg-6 pay_box-left">
        <textarea name="" id="" cols="60" rows="6" class="note" placeholder="Ghi chú ..."></textarea>
    </div>
    <div class="col-lg-6 pay_box-right">
        <p class="total_info">Tổng tiền: <span class="pay_total-price"><?= $thanhtoan ?> <sup>đ</sup></span></p>
        <div class="cart_buttons">
            <a href="index.php?act=hang_hoa" class="link_continue"><svg xmlns="http://www.w3.org/2000/svg" class="icon_return ionicon" viewBox="0 0 512 512">
                    <title>Return Up Back</title>
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M112 160l-64 64 64 64" />
                    <path d="M64 224h294c58.76 0 106 49.33 106 108v20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                </svg>Tiếp tục đặt hàng</a>
            <a href="" class="link_update">Cập nhật</a>
            <a href="index.php?act=bill_confirm" class="link_pay">Thanh toán</a>
        </div>
    </div>
</div>
</div>