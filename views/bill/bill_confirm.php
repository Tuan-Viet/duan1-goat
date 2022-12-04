<div class="main_bill">
    <div class="row">
        <div class="main_left col-lg-7">
            <div class="main_header">
                <p class="logo_text">Goat</p>
            </div>
            <div class="main_content container">
                <div class="main_section">
                    <h3 class="section_title pdh20">Thông tin giao hàng</h3>
                    <div class="section_content-infomation">
                        <form action="index.php?act=bill_pttt" method="post" class="form_info">
                            <div class="form mt8">
                                <select name="" id="" class="form_control-section pform ph6 mt8">
                                    <option value="" class="">Địa chỉ mặc định</option>
                                    <option value="">Bắc Ninh</option>
                                </select>
                                <label for="">Địa chỉ</label>
                            </div>
                            <div class="form mt8">
                                <input type="text" name="name" id="" class="form_control-section name pform ph6 mt8" placeholder=" ">
                                <label for="">Họ và tên</label>
                            </div>
                            <small style="margin: 10px 15px 0; display: block; font-size: small;" class="text-danger"><?= isset($errors['name']) ? $errors['name'] : '' ?></small>
                            <!-- <div class="address_contact ph6"> -->
                                <!-- <input type="text" name="email" class="email_contact pform" placeholder="Email"> -->
                            <div class="form mt8">
                                <input type="text" name="tel" class="form_control-section tel_contact pfrom mt8" placeholder=" ">
                                <label for="">Số điện thoại</label>
                            </div>
                            <small style="margin: 10px 15px 0; display: block; font-size: small;" class="text-danger"><?= isset($errors['tel']) ? $errors['tel'] : '' ?></small>

                            <!-- </div> -->
                            <div class="form mt8">
                                <input type="text" name="address" id="" class="form_control-section address pform ph6 mt8" placeholder=" ">
                                <label for="">Địa chỉ</label>
                            </div>
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