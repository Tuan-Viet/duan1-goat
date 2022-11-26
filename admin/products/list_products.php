<div class="mainContent">
    <div class="title">
        <p>DANH SÁCH SẢN PHẨM</p>
    </div>
    <div class="row filterGroup">
        <form action="" method="GET" class="formSearch fl">
            <input type="text" class="inputSearch" placeholder="Search" name="keyword">
            <button type="submit" class="btnSearch"><i class="fa fa-search"></i></button>
        </form>
        <div class="areaFilter fr row">
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
                    <!-- <div id="filterPrice"></div> -->
                    <div class="areaValue">
                        <p>Từ</p>
                        <input type="text" class="rangeValue">
                        <p>Đến</p>
                        <input type="text" class="rangeValue">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <form action="?act=delete_all_products" method="post">
    <div class="btn_dk">
        <a href="?act=add_product"><button type="button" class="btn btn-primary">Thêm mới</button></a>
        <button type="button" class="btn btn-secondary" id="btn1">Chọn tất cả</button>
        <button type="button" class="btn btn-success" id="btn2">Bỏ chọn</button>
        <button type="submit" class="btn btn-danger">Xóa mục đã chọn</button>


    </div>
    <div class="">
        <table class="list_product" id="results">
        <!-- <table class="list_product" id="my-table"> -->
            <thead>
                <tr>
                    <th></th>
                    <th>ID</th>
                    <th>Tên sản phẩm</th>
                    <th>Đơn giá</th>
                    <th>Giảm giá(%)</th>
                    <th>Ảnh minh họa</th>
                    <th>Loại</th>
                    <th>Mô tả</th>
                    <th>Ngày nhập</th>
                    <th>Số lượt xem</th>
                    <th class="active-th">Tác vụ</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($hanghoa as $hh) : ?>
                    <tr>
                        <td><input type="checkbox" name="name[]" id="check_all" value="<?= $hh['id'] ?>"></td>
                        <td><?= $hh['id'] ?></td>
                        <td><?= $hh['product_name'] ?></td>
                        <td><?= $hh['product_price'] ?></td>
                        <td><?= $hh['sale'] ?></td>
                        <td>
                            <img src="./../images/products/<?= $hh['image'] ?>" alt="" width="60">
                        </td>
                        <td>
                            <?php foreach ($loaihang as $loai) : ?>
                                <?php
                                if ($hh['cate_id'] == $loai['id']) {
                                    echo $loai['cate_name'];
                                }
                                ?>
                            <?php endforeach ?>
                        </td>
                        <td><?= $hh['description'] ?></td>
                        <td><?= $hh['date'] ?></td>
                        <td><?= $hh['views'] ?></td>
                        <td class="active-td">
                            <a href="?act=product_detail&id=<?= $hh['id'] ?>"><img src="./../images/logo/eye.png" alt="" width="20px" title="Xem chi tiết"></a>
                            <a href="?act=edit_product&id=<?= $hh['id'] ?>"><img src="./../images/logo/edit.png" alt="" width="20px" title="Chỉnh sửa"></a>
                            <a onclick="return confirm('Bạn có chắc muốn xóa không?')" href="?act=delete_product&id=<?= $hh['id'] ?>"><img src="./../images/logo/delete.png" alt="" width="20px" title="Xóa"></a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
   </form>

    <div id="pageNavPosition"></div>
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