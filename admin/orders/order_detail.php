<div class="mainContent">
    <div class="title">
        <p>CHI TIẾT ĐƠN HÀNG</p>
    </div>
    <div class="main">
        <div class="box">
            <div class="info_user">
                <h2>Thông tin người nhận</h2>
                <label for="">Tên người nhận: <?= $order['name'] ?> </label> <br>
                <label for="">SĐT: <?= $order['tel'] ?></label><br>
                <label for="">Địa chỉ: <?= $order['address'] ?></label><br>
                <label for="">PTTT:
                    <?php
                    if ($order['pay_methods'] == 0) {
                        echo "Thanh toán COD";
                    } else {
                        echo "Thanh toán qua ATM";
                    }
                    ?>
                </label><br>
            </div>
            <div class="info_cart">
                <h2>Thông tin đơn hàng</h2>
                <?php foreach ($order_detail as $ord)
                    if ($order['id'] == $ord['order_id']) {
                ?>
                <img src="./../images/products/<?= $ord['image_detail'] ?>" alt="">
                <?php
                    }
                ?>
            </div>
        </div>

    </div>
</div>