<div class="main">
        <div class="title_info-account">
            <h1>Tài khoản của bạn</h1>
            <hr width="50px" style="text-align: center; display:inline-block;border: 2px solid #000; background-color: #000;">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-3 account_sidebar">
                    <div class="account_top">
                        <h3 class="account_title">Tài khoản</h3>
                    </div>
                    <div class="account_content">
                        <ul class="accountList">
                            <li class="current"><a href="">Thông tin tài khoản</a></li>
                            <li><a href="index.php?act=list_address">Danh sách địa chỉ</a></li>
                            <li class="last"><a href="index.php?act=dang_xuat">Đăng xuất</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="col-xs-12">
                        <h3 class="title_detail">Thông tin Tài khoản</h3>
                        <h2 class="name_account">Nguyễn Công Quyền</h2>
                        <p class="email_account">quyenncph25762@fpt.edu.vn</p>
                        <div class="address_account">
                            <p>Vietnam</p>
                            <p>Nơi nhận hàng: <span>Bắc Ninh , Từ Sơn</span></p>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <table class="table table-light">
                            <thead class="thead-light">
                                <tr>
                                    <th colspan="8">Danh sách đơn hàng mới nhất</th>
                                    
                                </tr>
                                <tr>
                                    <th>Mã đơn hàng</th>
                                    <th>Người nhận hàng</th>
                                    <th>Ngày đặt hàng</th>
                                    <th>Nơi nhận</th>
                                    <th>Thành tiền</th>
                                    <th>Trạng thái thanh toán</th>
                                    <th>Phương thức thanh toán</th>
                                    <th>Vận chuyển</th>
                                </tr>
                            </thead>
                            <tbody class="row_mycard">
                                <?php foreach($load_all_order as $order): ?>
                                    <?php extract($order) ?>
                                    <tr>
                                        <td><a href="index.php?act=mycart_detail" class="mycart_id-pro">GOAT-<?= $id ?></a></td>
                                        <td><?= $name ?></td>
                                        <td><?= $date_time ?></td>
                                        <td><?= $address ?></td>
                                        <td style="width: 100px;"><?= $total ?> <sup>đ</sup></td>
                                        <td>pending</td>
                                        <td><?= $pttt = check_pttt($pay_methods) ?></td>
                                        <td>Đang vận chuyển</td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>