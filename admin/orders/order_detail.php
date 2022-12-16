<div class="mainContent">
    <div class="title">
        <p>CHI TIẾT ĐƠN HÀNG</p>
    </div>
    <div class="main" >
        <div class="box" style="justify-content: space-evenly;">
            <div class="info_user">
                <h2 style="margin-bottom: 20px;">Thông tin người nhận</h2>
                <div class="user_detail">
                    <span style="width: 150px;">
                        Tên người nhận
                    </span>
                    <span>
                        : <?= $order['name'] ?>
                    </span>
                </div>
                <div class="user_detail">
                    <span style="width: 150px;">
                        SĐT
                    </span>
                    <span>
                        : <?= $order['tel'] ?>
                    </span>
                </div>
                <div class="user_detail">
                    <span style="width: 150px;">
                        Địa chỉ
                    </span>
                    <span>
                        : <?= $order['address'] ?>
                    </span>
                </div>
                <div class="user_detail">
                    <span style="width: 150px;">
                        PTTT
                    </span>
                    <span>
                        : <?php
                            if ($order['pay_methods'] == 0) {
                                echo "COD";
                            } else {
                                echo "ATM";
                            }
                            ?>
                    </span>
                </div>
                <div class="user_detail">
                    <span style="width: 150px;">
                        Ghi chú: 
                    </span>
                 <textarea name="" id="" cols="30" rows="10" readonly class="note_order"></textarea>
                </div>

            </div>
            <div class="info_order">
                <h2>Thông tin đơn hàng</h2>
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
                <?php foreach ($order_detail as $ord)
                    if ($order['id'] == $ord['order_id']) {
                ?>
                    <div class="one_product" style="display: flex;align-items: center;margin-bottom: 10px;">
                        <img src="./../images/products/<?= $ord['image'] ?>" alt="" width="50">
                        <div class="info_detail">
                            <div class="">
                                <label for=""><?= $ord['product_name'] ?></label> <br>
                                <label for=""><?= $ord['size'] ?>/<?= $ord['product_color'] ?></label>
                            </div>
                            <div class="">
                                <label for="" style="margin: 0 14px;"><?= $ord['quantity'] ?></label>
                                <label for="" style="margin-left:30px;"><?= $ord['total'] ?> <sup>đ</sup></label>
                            </div>
                        </div>

                    </div>
                <?php
                    }
                ?>
                <hr style="width: 550px;">
                <div class="box" style="justify-content: space-between;">
                    <label for="">Tổng tiền: </label>
                    <label for=""><?= $order['total'] ?> <sup>đ</sup> </label>
                </div>
                <label for="">Trạng thái:
                    <?php
                    if ($order['status'] == 0) {
                        echo '<span style="color: #BEBEBE;">Đơn hàng mới</span>';;
                    } else if ($order['status'] == 1) {
                        echo '<span style="color: #FFCC66;">Đang chuẩn bị hàng</span>';
                    } else if ($order['status'] == 2) {
                        echo '<span style="color: #00DD00;">Đang giao</span>';
                    }
                    if ($order['status'] == 3) {
                        echo '<span style="color: #1E90FF;">Hoàn thành</span>';
                    }
                    ?>
                </label>
            </div>
        </div>

    </div>
</div>