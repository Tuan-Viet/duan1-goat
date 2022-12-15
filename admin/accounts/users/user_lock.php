<div class="mainContent">
    <div class="title">
        <p>QUẢN LÍ KHÁCH HÀNG</p>
    </div>
    <div class="msg">
        <?php
        if ((isset($_GET['msg_unlock'])) && ($_GET['msg_unlock'] != "")) {
        ?>
            <label>
                <input type="checkbox" class="alertCheckbox" autocomplete="off" />
                <div class="alert success_unlock">

                    <div class="messenger">
                        <?= $_GET['msg_unlock'] ?>
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
        <form action="?act=search_user" method="GET" class="formSearch fl">
            <input type="text" class="inputSearch" placeholder="Search" name="keyword">
            <button type="submit" class="btnSearch" name="btn-search"><i class="fa fa-search"></i></button>
        </form>
        <!-- <div class="areaFilter fr row">
            <div class="boxSelect fr">
                <div class="titleSelect">Sắp xếp</div>
                <ul class="optionSelect">
                    <li sortIndex="0"><a href="">Mới nhất</a></li>
                    <li sortIndex="1"><a href="">Cũ nhất</a></li>
                </ul>
            </div>
            <div class="btnFilter fr bg-fff"><span class="fa fa-filter"></span>Lọc</div>
            <div class="boxFilter">
                <div class="btnFilter"><span class="fa fa-close"></span>Đóng</div>
                <div class="groupInput">
                    <select name="">
                        <?php foreach ($loaihang as $loai) : ?>
                            <option value="<?= $loai['id'] ?>"><?= $loai['cate_name'] ?></option>
                        <?php endforeach ?>
                    </select>

                </div>

                <div class="groupInput">
                    <p class="titleInput">Giá: </p>
                    <div class="areaValue">
                        <p>Từ</p>
                        <input type="text" class="rangeValue">
                        <p>Đến</p>
                        <input type="text" class="rangeValue">
                    </div>
                </div>

            </div>
        </div> -->
    </div>
    <form action="?act=delete_all_users" method="post">
        <div class="btn_dk">
            <button type="button" class="btn btn-secondary" id="click_all">Chọn tất cả</button>
            <button type="button" class="btn btn-success" id="unchecked">Bỏ chọn</button>
            <button type="submit" class="btn btn-danger">Xóa mục đã chọn</button>
        </div>
        <div class="">
            <table class="list_users" id="results">
                <thead>
                    <tr>
                        <th></th>
                        <th>ID</th>
                        <th>Họ và tên</th>
                        <th>Ảnh</th>
                        <th>Địa chỉ</th>
                        <th>Email</th>
                        <th>SĐT</th>
                        <th>Trạng thái</th>
                        <th class="active-th">Tác vụ</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user) : ?>
                        <tr>
                            <td><input type="checkbox" name="name[]" id="check_all" value="<?= $hh['id'] ?>"></td>
                            <td><?= $user['id'] ?></td>
                            <td><?= $user['user_name'] ?></td>
                            <td>
                                <img src="./../images/users/<?= $user['avatar'] ?>" alt="" width="60">
                            </td>
                            < <td><?= $user['address'] ?></td>
                                <td><?= $user['user_email'] ?></td>
                                <td><?= $user['user_tel'] ?></td>
                                <td>
                                    <?php
                                    if ($user['status'] == 1) {
                                        echo "Khóa";
                                    }
                                    ?>
                                </td>
                                <td class="active-td">
                                    <a onclick="return confirm('Bạn có chắc mở khóa không?')" href="?act=unlock_user&id=<?= $user['id'] ?>"><img src="./../images/logo/unlock.png" alt="" width="20px" title="Khôi phục"></a>
                                    <a onclick="return confirm('Bạn có chắc muốn xóa không?')" href="?act=delete_user&id=<?= $user['id'] ?>"><img src="./../images/logo/delete.png" alt="" width="20px" title="Xóa"></a>
                                </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </form>
    <div id="pageNavPosition"></div>
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