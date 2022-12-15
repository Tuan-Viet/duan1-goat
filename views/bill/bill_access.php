<div class="main_bill">
    <div class="row row_confirm row_main_bill">
        <div class="main_left col-lg-7">
            <h1 class="title_order-success"><svg xmlns="http://www.w3.org/2000/svg" class="order_success ionicon" viewBox="0 0 512 512"><title>Checkmark Circle</title><path d="M448 256c0-106-86-192-192-192S64 150 64 256s86 192 192 192 192-86 192-192z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M352 176L217.6 336 160 272"/></svg> Đặt hàng thành công</h1>
            <?php 
                if(isset($load_one_order)&&(is_array($load_one_order))) {
                    extract($load_one_order);
                }
            ?>
            <div class="row_confirm-order">
                <div class="user_confirm user_name">
                    <p>Tên:</p>
                    <span><?= $name ?></span>
                </div>
                <div class="user_confirm user_address">
                    <p>Địa chỉ:</p>
                    <span><?= $address ?></span>
                </div>
                <div class="user_confirm user_tel">
                    <p>Số điện thoại:</p>
                    <span><?= $tel ?></span>
                </div>
                <div class="user_confirm user_date-order">
                    <p>Ngày đặt hàng:</p>
                    <span><?= $date_time ?></span>
                </div>
                <div class="user_confirm user_order-methods mb24">
                    <p>Phương thức thanh toán:</p>
                    <span><?= $pt = check_pttt($pay_methods); ?></span>
                </div>
                <?php atm($pay_methods,$name,$user_id,$id) ?>
            </div>
            <h1 class="title_order-success">
                Cảm ơn quý khách đã ủng hộ!
            </h1>
            <a href="index.php?act=hang_hoa" class="link_continue btn_continue"><svg xmlns="http://www.w3.org/2000/svg" class="icon_return ionicon" viewBox="0 0 512 512"><title>Return Up Back</title><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M112 160l-64 64 64 64"/><path d="M64 224h294c58.76 0 106 49.33 106 108v20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>Tiếp tục đặt hàng</a>
        </div>
        <?php include "bill_detai.php"?>
    </div>
</div>