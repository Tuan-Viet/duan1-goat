<div class="main">
    <div class="row">
        <div class="main_left col-lg-7">
            <div class="main_header">
                <p class="logo_text">Goat</p>
            </div>
            <div class="main_content">
                <div class="main_section">
                    <h3 class="section_title pdh20">Thông tin giao hàng</h3>
                    <div class="section_content-infomation">
                        <?php if(!isset($_SESSION['user'])): ?>
                            <p class="section_content-text">Bạn đã có tài khoản? <a href="">Đăng nhập</a></p>
                        <?php endif ?>
                        <form action="index.php?act=bill_pttt" method="post" class="form_info">
                            <input type="text" name="name" id="" class="form_control-section name pform ph6" placeholder="Họ và tên">
                            <small style="margin: 10px 15px 0; display: block; font-size: small;" class="text-danger"><?= isset($errors['name']) ? $errors['name'] : '' ?></small>
                            <!-- <div class="address_contact ph6"> -->
                                <!-- <input type="text" name="email" class="email_contact pform" placeholder="Email"> -->
                            <input type="text" name="tel" class="tel_contact pfrom" placeholder="Số điện thoại">
                            <small style="margin: 10px 15px 0; display: block; font-size: small;" class="text-danger"><?= isset($errors['tel']) ? $errors['tel'] : '' ?></small>
                            <!-- </div> -->
                            <input type="text" name="address" id="" class="form_control-section address pform ph6" placeholder="Địa chỉ">
                            <small style="margin: 10px 15px 0; display: block; font-size: small;" class="text-danger"><?= isset($errors['address']) ? $errors['address'] : '' ?></small>
                            <div class="btn_buttons-footer">
                                <a href="index.php?act=cart" class="rerturn_bill">Giỏ hàng</a>
                                <a href="index.php?act=bill_pttt" class="continue_pay">
                                    <button type="submit" name="btn_submit">Tiếp tục đến phương thức thanh toán</button>
                                
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php include "box_right.php" ?>
    </div>
</div>