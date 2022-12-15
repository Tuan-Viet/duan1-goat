<div class="mainContent">
    <div class="title">
        <p>QUẢN LÍ BÌNH LUẬN</p>
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
        <form action="?act=list_comments" method="POST" class="formSearch fl">
            <input type="text" class="inputSearch" value="<?= $keyword ?>" placeholder="Search" name="keyword">
            <?php
            if ($num_product == 0) {
                echo '<span class="kq_search" style="color: red;">Không tìm thấy kết quả</span>';
            }
            ?>
            <button type="submit" class="btnSearch" name="btn-search"><i class="fa fa-search"></i></button>
        </form>
        <div class="areaFilter fr row">
            <div class="boxSelect fr">
                <div class="titleSelect">Sắp xếp</div>
                <ul class="optionSelect">
                    <li sortIndex="0"><a href="?act=list_comments&keyword=<?= $keyword ?>&sort=1">Mới nhất</a></li>
                    <li sortIndex="1"><a href="?act=list_comments&keyword=<?= $keyword ?>&sort=2">Cũ nhất</a></li>
                </ul>
            </div>
            <!-- <div class="btnFilter fr bg-fff"><span class="fa fa-filter"></span>Lọc</div>
            <div class="boxFilter">
                <div class="btnFilter"><span class="fa fa-close"></span>Đóng</div>
                <div class="groupInput">
                    <select name="">
                        <option value="0">Đơn hàng mới</option>
                        <option value="1">Đang chuẩn bị hàng</option>
                        <option value="2">Đang giao</option>
                        <option value="3">Hoàn thành</option>
                    </select>

                </div>

                <div class="groupInput">
                    <p class="titleInput">Ngày tạo đơn </p>
                    <div class="areaValue">
                        <p>Từ</p>
                        <input type="text" class="rangeValue">
                        <p>Đến</p>
                        <input type="text" class="rangeValue">
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <form action="?act=delete_all_comments" method="post">
        <div class="btn_dk">
            <button type="button" class="btn btn-secondary" id="click_all">Chọn tất cả</button>
            <button type="button" class="btn btn-success" id="unchecked">Bỏ chọn</button>
            <button onclick="return confirm('Bạn có chắc muốn xóa không?')" type="submit" class="btn btn-danger">Xóa mục đã chọn</button>
        </div>
        <div class="">
            <table class="list_cate" id="results">
                <tr>
                    <th style="width: 32px;"></th>
                    <!-- <th style="width: 40px;">ID</th> -->
                    <th style="width: 10%;" colspan="1">ID sản phẩm </th>
                    <th style="width: 10%;" colspan="1">ID người dùng</th>
                    <th style="text-align: center;margin-left: 50px;">Nội dung</th>
                    <th style="width: 15%;">Time-sent</th>
                    <th class="active-th">Tác vụ</th>
                </tr>
                <?php foreach ($binhluan as $bl) : ?>
                    <tr>
                        <td><input type="checkbox" name="name[]" id="check_all" value="<?= $bl['id'] ?>"></td>
                        <!-- <td><?= $bl['id'] ?></td> -->
                        <td><?= $bl['product_id'] ?></td>
                        <!-- <td><a href="?act=product_detail&id=<?= $bl['product_id'] ?>"><img src="./../images/logo/eye.png" alt="" width="20px" title="Xem chi tiết"></a></td> -->
                        <td><?= $bl['user_id'] ?> </td>
                        <!-- <td><a href="?act=user_detail&id=<?= $bl['product_id'] ?>"><img src="./../images/logo/eye.png" alt="" width="20px" title="Xem chi tiết"></a></td> -->
                        <td style="float: left;margin-left: 50px;"><?= $bl['content'] ?></td>
                        <td><?= $bl['time_sent'] ?></td>
                        <td class="active-td">
                            <a onclick="return confirm('Bạn có chắc muốn xóa không?')" href="?act=delete_comement&id=<?= $bl['id'] ?>" title="Xóa"><img src="./../images/logo/delete.png" alt="" width="20"></a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    </form>
    <?php
    if ($num_product > 20) {
        echo '<div id="pageNavPosition"></div>';
    }
    ?>
    <script type="text/javascript">
        var pager = new Pager('results', 10);
        pager.init();
        pager.showPageNav('pager', 'pageNavPosition');
        pager.showPage(1);
    </script>
    <script>
        $('#my-table').DataTable();
    </script>
</div>