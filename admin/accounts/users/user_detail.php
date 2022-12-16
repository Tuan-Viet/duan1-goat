<div class="mainContent">
    <div class="title">
        <p>THÔNG TIN KHÁCH HÀNG</p>
    </div>
    <div class="main">

        <div class="box" style="justify-content: space-between;">
            <div class="info_user" style="display: flex;margin-left: 20px;">
                <div class="image_user">
                    <!-- <img src="./../images/products/<?= $user['avatar'] ?>" alt=""> -->
                    <img src="https://png.pngitem.com/pimgs/s/30-307416_profile-icon-png-image-free-download-searchpng-employee.png" alt="">
                </div>

                <div class="detail_user">
                    <h2 style="margin-bottom: 20px;">Thông tin</h2>

                    <div class="user_detail">
                        <span style="width: 150px;">
                            Họ và tên
                        </span>
                        <span>
                            : <?= $user['full_name'] ?>
                        </span>
                    </div>
                    <div class="user_detail">
                        <span style="width: 150px;">
                            SĐT
                        </span>
                        <span>
                            : <?= $user['user_tel'] ?>
                        </span>
                    </div>
                    <div class="user_detail">
                        <span style="width: 150px;">
                            Email
                        </span>
                        <span>
                            : <?= $user['user_email'] ?>
                        </span>
                    </div>
                    <div class="user_detail">
                        <span style="width: 150px;">
                            Địa chỉ
                        </span>
                        <span>
                            : <?= $user['address'] ?>
                        </span>
                    </div>
                </div>

            </div>
            <div class="list_order">
                <h2>ĐƠN HÀNG</h2>
               
                <?php
                foreach ($order as $ord)
                    if ($user['id'] == $ord['user_id']) {
                ?>
                    <div class="info_user_order">
                        <div class="code_order">
                            MÃ ĐH: GOAT-<?= $ord['id'] ?>
                        </div>
                        <div class="box_order">
                            <div class="one_product" style="display: flex;align-items: center;">
                                <div class="" style="width: 50px;"></div>
                                <div class="info_detail">
                                    <div class="">
                                        <label for=""></label> <br>
                                        <label for=""></label>
                                    </div>
                                    <div class="">
                                        <label for="">SL</label>
                                        <label for="" style="margin-left:30px;">Thành tiền</label>
                                    </div>
                                </div>

                            </div>
                            <?php
                            foreach ($order_detail as $ord_detail)
                                if ($ord['id'] == $ord_detail['order_id']) {
                            ?>



                                <div class="one_product" style="display: flex;align-items: center;margin-bottom: 10px;">
                                    <img src="./../images/products/<?= $ord_detail['image'] ?>" alt="" width="50">
                                    <div class="info_detail">
                                        <div class="">
                                            <label for=""><?= $ord_detail['product_name'] ?></label> <br>
                                            <label for=""><?= $ord_detail['size'] ?>/<?= $ord_detail['product_color'] ?></label>
                                        </div>
                                        <div class="">
                                            <label for="" style="margin: 0 14px;"><?= $ord_detail['quantity'] ?></label>
                                            <label for="" style="margin-left:30px;"><?= $ord_detail['total'] ?> <sup>đ</sup></label>
                                        </div>
                                    </div>

                                </div>

                            <?php
                                }
                            ?>
                            <hr style="width: 508px;">
                            <div class="box" style="justify-content: space-between;">
                                <label for="">Tổng tiền: </label>
                                <label for=""><?= $ord['total'] ?> <sup>đ</sup> </label>
                            </div>
                            <label for="">Trạng thái:
                                <?php
                                if ($ord['status'] == 0) {
                                    echo '<span style="color: #BEBEBE;">Đơn hàng mới</span>';;
                                } else if ($ord['status'] == 1) {
                                    echo '<span style="color: #FFCC66;">Đang chuẩn bị hàng</span>';
                                } else if ($ord['status'] == 2) {
                                    echo '<span style="color: #00DD00;">Đang giao</span>';
                                }
                                if ($ord['status'] == 3) {
                                    echo '<span style="color: #1E90FF;">Hoàn thành</span>';
                                }
                                ?>
                            </label>
                        </div>
                    </div>
                <?php
                    }
                ?>



            </div>
        </div>

    </div>
</div>