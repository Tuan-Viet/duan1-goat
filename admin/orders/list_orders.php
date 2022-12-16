<div class="mainContent">
    <div class="title">
        <p>QUẢN LÍ ĐƠN HÀNG</p>
    </div>
    <div class="msg">
        <?php

        if ((isset($_GET['msg_delete'])) && ($_GET['msg_delete'] != "")) {
        ?>
            <label>
                <input type="checkbox" class="alertCheckbox" autocomplete="off" />
                <div class="alert success_delete">

                    <div class="messenger">
                        <?= $_GET['msg_delete'] ?>
                    </div>
                    <div class="tick_x">
                        <i class="fa-sharp fa-solid fa-xmark"></i>
                    </div>
                </div>
            </label>
        <?php
        }
        ?>
    </div>
    <div class="row filterGroup">
        <form action="?act=list_orders" method="POST" class="formSearch fl">
            <input type="text" class="inputSearch" value="<?= $keyword ?>" placeholder="Search" name="keyword">
            <button type="submit" class="btnSearch" name="btn-search"><i class="fa fa-search"></i></button>
        </form>
        <div class="areaFilter fr row">
            <div class="boxSelect fr">
                <div class="titleSelect">Sắp xếp</div>
                <ul class="optionSelect">
                    <li sortIndex="0"><a href="?act=list_orders&keyword=<?= $keyword ?>&sort=1">Mới nhất</a></li>
                    <li sortIndex="1"><a href="?act=list_orders&keyword=<?= $keyword ?>&sort=2  ">Cũ nhất</a></li>
                </ul>
            </div>
            <div class="btnFilter fr bg-fff"><span class="fa fa-filter"></span>Lọc</div>
            <div class="boxFilter">
                <form action="?act=list_orders" method="POST">
                    <div class="btnFilter"><span class="fa fa-close"></span>Đóng</div>
                    <div class="groupInput">
                        <select name="filter_status">
                            <option value="" hidden>Danh mục</option>
                            <option value="0">Đơn hàng mới</option>
                            <option value="1">Đang chuẩn bị hàng</option>
                            <option value="2">Đang giao</option>
                            <option value="3">Hoàn thành</option>
                        </select>
                    </div>
                    <!-- <div class="groupInput">
                        <p class="titleInput">Ngày nhập </p>
                        <div class="areaValue">
                            <p>Từ</p>
                            <input type="date" class="">
                            <p>Đến</p>
                            <input type="date" class="" value="<?= $now ?>">
                        </div>
                    </div> -->
                    <button type="submit" name="btn" class="btn-filter"><span class="fa fa-filter"></span> Lọc</button>
                </form>

            </div>
        </div>
    </div>
    <form action="?act=delete_all_orders" method="post">
        <div class="btn_dk">
            <a href="?act=add_product"><button type="button" class="btn btn-primary">Thêm mới</button></a>
            <button type="button" class="btn btn-secondary" id="click_all">Chọn tất cả</button>
            <button type="button" class="btn btn-success" id="unchecked">Bỏ chọn</button>
            <button onclick="return confirm('Bạn có chắc muốn xóa không?')" type="submit" class="btn btn-danger">Xóa mục đã chọn</button>


        </div>
        <div class="">
            <table class="list_product" id="results">
                <!-- <table class="list_product" id="my-table"> -->
                <thead>
                    <tr>
                        <th></th>
                        <th>Mã ĐH </th>
                        <!-- <th>User ID</th> -->
                        <th>Ngày tạo đơn</th>
                        <th>PTTT</th>
                        <th>Tổng tiền</th>
                        <th>Trạng thái</th>
                        <th style="width: 10px;"></th>
                        <th class="active-th" style="width: 80px;">Tác vụ</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($orders as $ord) : ?>
                        <tr>
                            <td><input type="checkbox" name="name[]" id="check_all" value="<?= $ord['id'] ?>"></td>
                            <td>GOAT-<?= $ord['id'] ?></td>
                            <!-- <td><?= $ord['user_id'] ?></td> -->
                            <td><?= $ord['date_time'] ?></td>
                            <td>
                                <?php
                                if ($ord['pay_methods'] == 0) {
                                    echo "COD";
                                } else {
                                    echo "ATM";
                                }
                                ?>
                            </td>
                            <td><?= $ord['total'] ?></td>
                            <td>
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
                            </td>
                            <td>
                                <?php if ($ord['status'] != 2 && $ord['status'] != 3) { ?>
                                    <a onclick="return confirm('Xác nhận cập nhật đơn hàng!')" href="?act=update_status&id=<?= $ord['id'] ?>&status=<?= $ord['status'] ?>"><img src="./../images/logo/package.png" alt="" width="20px" title="Cập nhật đơn hàng"></a>
                                <?php } ?>
                            </td>

                            <td class="active-td">

                                <a href="?act=order_detail&id=<?= $ord['id'] ?>"><img src="./../images/logo/eye.png" alt="" width="20px" title="Xem chi tiết"></a>
                                <a onclick="return confirm('Xác nhận xóa?')" href="?act=delete_order&id=<?= $ord['id'] ?>"><img src="./../images/logo/delete.png" alt="" width="20px" title="Xóa"></a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </form>

    <?php
    if ($num_product > 20) {
        echo '<div id="pageNavPosition"></div>';
    }
    ?>
    <script type="text/javascript">
        var pager = new Pager('results', 20);
        pager.init();
        pager.showPageNav('pager', 'pageNavPosition');
        pager.showPage(1);
    </script>
    <script>
        $('#my-table').DataTable();
    </script>
</div>