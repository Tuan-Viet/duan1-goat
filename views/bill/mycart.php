<div class="main">
        <div class="title_info-account">
            <h1>Tài khoản của bạn</h1>
            <hr width="50px" style="text-align: center; display:inline-block;border: 2px solid #000; background-color: #000;">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-3 account_sidebar">
                    <?= include "account_sidebar.php"?>
                </div>
                <div class="col-sm-9">
                    <div class="col-xs-12">
                        <h3 class="title_detail">Thông tin Tài khoản</h3>
                        <h2 class="name_account">Nguyễn Công Quyền</h2>
                        <p class="email_account">quyenncph25762@fpt.edu.vn</p>
                        <div class="address_account">
                            <p>0967-584-597</p>
                            <p>Nơi nhận hàng: <span>Bắc Ninh , Từ Sơn</span></p>
                        </div>
                    </div>
                    <input type="submit" value="Cập nhật tài khoản" class="address_add mt28">
                    <form class="form_address-add">
                        <div class="name_address-add box_address-add">
                            <i class="icon_address-add fa-solid fa-user"></i>
                            <input type="text" name="" id="" placeholder="Họ và tên" class="form_control">
                        </div>
                        <div class="locate_address-add box_address-add">
                            <i class="icon_address-add fa-solid fa-envelope"></i>
                            <input type="text" name="" id="" placeholder="Email" class="form_control">
                        </div>
                        <div class="locate_address-add box_address-add">
                            <i class="icon_address-add fa-solid fa-phone"></i>
                            <input type="text" name="" id="" placeholder="Số điện thoại" class="form_control">
                        </div>
                        <div class="locate_address-add box_address-add">
                            <i class="icon_address-add fa-solid fa-house"></i>
                            <input type="text" name="" id="" placeholder="Địa chỉ" class="form_control">
                        </div>
                        <div class="bottom_address-add">
                            <input type="submit" value="Cập nhật" class="btn_add-address">
                            <label for="">hoặc <a class="cancel" href="" style="color: red;">Hủy</a></label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>