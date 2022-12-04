
<div class="mainContent">
    <div class="title">
        <p>QUẢN LÍ KHÁCH HÀNG</p>
    </div>
    <div class="row filterGroup">
        <form action="?act=search_products" method="GET" class="formSearch fl">
            <input type="text" class="inputSearch" placeholder="Search" name="keyword">
            <button type="submit" class="btnSearch" name="btn-search"><i class="fa fa-search"></i></button>
        </form>
        <!-- <div class="areaFilter fr row">
            <div class="boxSelect fr">
                <div class="titleSelect">Sắp xếp</div>
                <ul class="optionSelect">
                    <li sortIndex="0"><a href="">Sản phẩm mới nhất</a></li>
                    <li sortIndex="1"><a href="">Sản phẩm cũ</a></li>
                    <li sortIndex="2"><a href="">Giá tăng dần</a></li>
                    <li sortIndex="3"><a href="">Giá giảm dần</a></li>
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
    <form action="?act=delete_all_products" method="post">
        <div class="btn_dk">
            <a href="?act=add_product"><button type="button" class="btn btn-primary">Thêm mới</button></a>
            <button type="button" class="btn btn-secondary" id="click_all">Chọn tất cả</button>
            <button type="button" class="btn btn-success" id="unchecked">Bỏ chọn</button>
            <button type="submit" class="btn btn-danger">Xóa mục đã chọn</button>


        </div>
        <div class="">
            <table class="list_product" id="results">
                <!-- <table class="list_product" id="my-table"> -->
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
                            <td><input type="checkbox" name="name[]" id="check_all" value="<?= $user['id'] ?>"></td>
                            <td><?= $user['id'] ?></td>
                            <td><?= $user['user_name'] ?></td>
                            <td>
                                <img src="./../images/products/<?= $user['avatar'] ?>" alt="" width="60">
                            </td>
                            <td><?= $user['address'] ?></td>
                            <td><?= $user['user_email'] ?></td>
                            <td><?= $user['user_tel'] ?></td>
                            <td>
                                <?php
                                if ($user['status'] == 0) {
                                    echo "Bình thường";
                                }
                                ?>
                            </td>

                            <td class="active-td" style="width: 150px;">
                                <a href="?act=product_detail&id=<?= $user['id'] ?>"><img src="./../images/logo/eye.png" alt="" width="20px" title="Xem chi tiết"></a>
                                <a href="?act=edit_product&id=<?= $user['id'] ?>"><img src="./../images/logo/edit.png" alt="" width="20px" title="Chỉnh sửa"></a>
                                <a onclick="return confirm('Bạn có chắc muốn xóa không?')" href="?act=lock_user&id=<?= $user['id'] ?>"><img src="./../images/logo/lock.png" alt="" width="20px" title="Khóa tài khoản"></a>
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