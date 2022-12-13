        <div class="title_info-account">
            <h1>Đơn hàng của tôi</h1>
            <hr width="50px" style="text-align: center; display:inline-block;border: 2px solid #000; background-color: #000;">
        </div>
        <div class="container">
            <div class="row">
                 <div class="col-sm-3 account_sidebar">
                    <?php include "account_sidebar.php"?>
                </div>
                <div class="col-sm-9">
                    <!-- <div class="row"> -->
                    <div class="col-xs-12">
                        <div class="tables_bill">
                            <!-- section table -->
                            <?php foreach($load_all_order as $order): ?>
                                <form action="index.php?act=mybill" method="post">
                                    <input type="hidden" name="id" value="<?= $order['id'] ?>">
                                    <div class="table_address">
                                        <div class="title_address">
                                            <h3 class="title_address-name"><?= $order['name'] ?></h3>
                                            <h3 class="date_mybill"><?= $order['date_time'] ?></h3>
                                        </div>
                                        <div class="nav_address">
                                            <div class="info_pro mb24 row_mybill">
                                                <div class="col-xs-12">
                                                <!-- BOX-ROW-BILL -->
                                                <?php $load_all_order_detail = load_all_order_detail($order['id']) ?>
                                                <?php foreach($load_all_order_detail as $order_detail): ?>
                                                    <div class="info_pro-id row_mybill-nav">
                                                        <div class="section_mybill-left">
                                                            <div class="photo_pro-view">
                                                                <a href="">
                                                                    <img src="./images/products/<?= $order_detail['image'] ?>" alt="" class="img_pro-view">
                                                                    <span class="pro_quantity-cart clear_fix-quantity"><span class="pro_quantity-view"><?= $order_detail['quantity'] ?></span></span>
                                                                </a>
                                                            </div>
                                                            <div class="info_pro-view">
                                                                <a href="" class="pro_title-view"><?= $order_detail['product_name'] ?></a>
                                                                <span class="pro_cate-view"><?= $order_detail['product_color'] ?>/<?= $order_detail['size']?></span>
                                                            </div>
                                                        </div>
                                                        <div class="section_mybill-right">
                                                        <span class="pro_price-view pro_price-cart price_mycart-section" style="display: block;"><?= $order_detail['total'] ?></span>
                                                        </div>
                                                    </div>
                                                <?php endforeach ?>
                                                <!-- </div> -->
                                                <!-- BOX-ROW-BILL -->
                                            </div>
                                            <p class="mt8"><?= $pttt = check_pttt($order['pay_methods']) ?></p>
                                                <div class="col-xs-12 price_mycart">
                                                    <span class="mt8">Phí vận chuyển</span>
                                                    <span class="pro_price-view pro_price-cart price_mycart-section mt8" style="display: block;" >30.000đ</span>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="bottom_mycart">
                                                <div class="title_total_bottom_mycart">Tổng tiền</div>
                                                <div class="price_total_bottom_mycart fz24"><span class="pro_price-view pro_price-cart price_mycart-section mt8 fz24" style="display: block;" ><?= $order['total'] + 30000 ?></span></div>
                                            </div>
                                            <?php if($order['status'] != 2 ) { ?>
                                                <?php
                                                    if ($order['status'] == 0) {
                                                        echo '<span style="color: #BEBEBE;">Đơn hàng mới</span>';;
                                                    } else if ($order['status'] == 1) {
                                                        echo '<span style="color: #FFCC66;">Đang chuẩn bị hàng</span>';
                                                    }
                                                    if ($order['status'] == 3) {
                                                        echo '<span style="color: #1E90FF;">Hoàn thành</span>';
                                                    }
                                                ?>
                                            <?php } else {?>
                                                <?php if ($order['status'] == 2) {
                                                    echo '<span style="color: #00DD00;">Đang giao</span>';
                                                } ?>
                                                <input type="submit" name="completed" value="Đã nhận hàng" class="btn btn-success mb8 mt8">
                                            <?php } ?>
                                        </div>
                                    </div>

                                </form>
                            <?php endforeach ?>
                            <!-- section table  -->
                        </div>
                    </div>
                </div>
            </div>
            </div>