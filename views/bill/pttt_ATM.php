<div class="main_bill">
    <div class="row row_confirm">
        <div class="col-lg-12 row_method-ATM">
            <div class="box_center-ATM">
                <h4>Qúy khách vui lòng gửi tới số tài khoản</h4>
                <p>Tên người nhận: Nguyễn Công Quyền</p>
                <h4>Cảm ơn quý khách đã ủng hộ</h4>
            </div>
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
                <div class="user_confirm user_order-methods">
                    <p>Phương thức thanh toán:</p>
                    <span><?= $pt = check_pttt($pay_methods); ?></span>
                </div>
            </div>
            <?php atm($pay_methods,$name,$user_id,$id) ?>
            <h1 class="title_order-success">
                Cảm ơn quý khách đã ủng hộ!
            </h1>
        </div>
        <a href="index.php?act=bill_access" class="link_continue btn_ATM">Tiếp tục đặt hàng</a>
        <!-- <?php include "bill_detai.php"?> -->
    </div>
</div>