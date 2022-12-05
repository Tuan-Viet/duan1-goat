<div class="main">
        <div class="title_info-account">
            <h1>Tài khoản của bạn</h1>
            <hr width="50px" style="text-align: center; display:inline-block;border: 2px solid #000; background-color: #000;">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-3 account_sidebar">
                    <?php include "account_sidebar.php"?>
                </div>
                <div class="col-sm-9">
                    <?php foreach($users as $user) {
                        extract($user);
                    } ?>
                    <div class="col-xs-12">
                        <h3 class="title_detail">Thông tin Tài khoản</h3>
                        <h2 class="name_account"><?= $full_name ?></h2>
                        <p class="email_account"><?= $user_email ?></p>
                        <div class="address_account">
                            <p><?= $user_tel ?></p>
                            <p>Nơi nhận hàng: <span><?= $address ?></span></p>
                        </div>
                    </div>
                    <input type="submit" value="Cập nhật tài khoản" class="address_add mt28">
                    <form class="form_address-add" method="POST" action="index.php?act=mycart">
                        <div class="name_address-add box_address-add">
                            <i class="icon_address-add fa-solid fa-user"></i>
                            <input type="text" name="full_name" id="" placeholder="Họ và tên" class="form_control" value="<?= $full_name ?>">
                        </div>
                    <small style="margin: 10px 15px 0; display: block; font-size: small;" class="text-danger"><?= isset($errors['full_name']) ? $errors['full_name'] : '' ?></small>
                        <div class="locate_address-add box_address-add">
                            <i class="icon_address-add fa-solid fa-envelope"></i>
                            <input type="text" name="user_email" id="" placeholder="Email" class="form_control" value="<?= $user_email ?>">
                        </div>
                    <small style="margin: 10px 15px 0; display: block; font-size: small;" class="text-danger"><?= isset($errors['user_email']) ? $errors['user_email'] : '' ?></small>

                        <div class="locate_address-add box_address-add">
                            <i class="icon_address-add fa-solid fa-phone"></i>
                            <input type="text" name="user_tel" id="" placeholder="Số điện thoại" class="form_control" value="<?= $user_tel ?>">
                        </div>
                    <small style="margin: 10px 15px 0; display: block; font-size: small;" class="text-danger"><?= isset($errors['user_tel']) ? $errors['user_tel'] : '' ?></small>

                        <div class="locate_address-add box_address-add">
                            <i class="icon_address-add fa-solid fa-house"></i>
                            <input type="text" name="address" id="" placeholder="Địa chỉ" class="form_control" value="<?= $address ?>">
                        </div>
                    <small style="margin: 10px 15px 0; display: block; font-size: small;" class="text-danger"><?= isset($errors['address']) ? $errors['address'] : '' ?></small>

                        <div class="bottom_address-add">
                            <input type="submit" name="update" value="Cập nhật" class="btn_add-address">
                            <label for="">hoặc <a class="cancel" href="" style="color: red;">Hủy</a></label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>