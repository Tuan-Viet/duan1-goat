<div class="mainContent">
    <div class="title">
        <p>QUẢN LÍ SẢN PHẨM</p>
    </div>
    <div class="msg">
        <?php
        if ((isset($_GET['msg_add'])) && ($_GET['msg_add'] != "")) {
        ?>
            <label>
                <input type="checkbox" class="alertCheckbox" autocomplete="off" />
                <div class="alert success_add">

                    <div class="messenger">
                        <?= $_GET['msg_add'] ?>
                    </div>
                    <div class="tick_x">
                        <i class="fa-sharp fa-solid fa-xmark"></i>
                    </div>
                </div>
            </label>
        <?php
        }
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
        if ((isset($_GET['msg_edit'])) && ($_GET['msg_edit'] != "")) {
        ?>
            <label>
                <input type="checkbox" class="alertCheckbox" autocomplete="off" />
                <div class="alert success_edit">
                    <div class="messenger">
                        <?= $_GET['msg_edit'] ?>
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
        <form action="?act=list_products" method="POST" class="formSearch fl">
            <input type="text" class="inputSearch" value="<?= $keyword ?>" placeholder="Search" name="keyword">
            <?php
            if ($num_product == 0) {
                echo '<span class="kq_search" style="color: red;">Không tìm thấy kết quả</span>';
            }
            ?>
            <button type="submit" class="btnSearch" name="btn"><i class="fa fa-search"></i></button>
            <input type="hidden" name="condition_sort" value="<?= $condition_sort  ?>">
            <input type="hidden" name="condition_sort" value="<?= $cate  ?>">
        </form>
        <div class="areaFilter fr row">
            <div class="boxSelect fr">

                <div class="titleSelect">
                    <?php
                    if ((isset($_GET['sort'])) && ($_GET['sort'] != "")) {
                        $sort = $_GET['sort'];
                        if ($sort == 1) {
                            echo "Sản phẩm mới nhất";
                        } elseif ($sort == 2) {
                            echo "Sản phẩm cũ nhất";
                        } elseif ($sort == 3) {
                            echo "Giá tăng dần";
                        } elseif ($sort == 4) {
                            echo "Giá giảm dần";
                        }
                    } else {
                        echo "Sắp xếp";
                    }

                    ?>
                </div>

                <ul class="optionSelect">
                    <li sortIndex="0"><a href="?act=list_products&keyword=<?= $keyword ?>&sort=1">Sản phẩm mới nhất</a></li>
                    <li sortIndex="1"><a href="?act=list_products&keyword=<?= $keyword ?>&sort=2">Sản phẩm cũ nhất</a></li>
                    <li sortIndex="2"><a href="?act=list_products&keyword=<?= $keyword ?>&sort=3">Giá tăng dần</a></li>
                    <li sortIndex="3"><a href="?act=list_products&keyword=<?= $keyword ?>&sort=4">Giá giảm dần</a></li>
                </ul>
            </div>
            <div class="btnFilter fr bg-fff"><span class="fa fa-filter"></span>Lọc</div>


            <div class="boxFilter">
                <form action="?act=list_products" method="POST">
                    <div class="btnFilter"><span class="fa fa-close"></span>Đóng</div>
                    <div class="groupInput">
                        <select name="filter_cate">
                            <option value="" hidden>Danh mục</option>
                            <?php foreach ($loaihang as $loai) : ?>
                                <option value="<?= $loai['id'] ?>"><?= $loai['cate_name'] ?></option>
                            <?php endforeach ?>
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
    <form action="?act=delete_all_products" method="post">
        <div class="btn_dk">
            <a href="?act=add_product"><button type="button" class="btn btn-primary">Thêm mới</button></a>
            <button type="button" class="btn btn-secondary" id="click_all">Chọn tất cả</button>
            <button type="button" class="btn btn-success" id="unchecked">Bỏ chọn</button>
            <button type="submit" class="btn btn-danger">Xóa mục đã chọn</button>


        </div>
        <div class="">
            <?php
            if ($num_product > 0) { ?>
                <table class="list_product" id="results">
                    <!-- <table class="list_product" id="my-table"> -->
                    <thead>
                        <tr>
                            <th style="width: 3%;"></th>
                            <th style="width: 3%;">ID </th>
                            <th style="width: 13%;">Tên sản phẩm</th>
                            <th style="width: 7%;">Đơn giá</th>
                            <th style="width: 8%;">Giảm giá (%)</th>
                            <th style="width: 10%;">Ảnh</th>
                            <th style="width: 8%;">Loại</th>
                            <th style="width: 20%;">Mô tả</th>
                            <th style="width: 8%;">Ngày nhập</th>
                            <th style="width: 7%;">Views</th>
                            <th class="active-th" style="width: 15%;">Tác vụ</th>
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
                                <td style="padding-right: 25px;text-align: left;">
                                    <span style="
                                display: -webkit-box;
                                -webkit-line-clamp: 5;
                                -webkit-box-orient: vertical;
                                overflow: hidden;
                                "><?= $hh['description'] ?></span>
                                </td>
                                <td><?= $hh['date'] ?></td>
                                <td><?= $hh['views'] ?></td>
                                <td class="active-td" s>
                                    <a href="?act=add_product_detail&id=<?= $hh['id'] ?>"><img src="./../images/logo/add.png" alt="" width="20px" title="Thêm mẫu sản phẩm"></a>
                                    <a href="?act=product_detail&id=<?= $hh['id'] ?>"><img src="./../images/logo/eye.png" alt="" width="20px" title="Xem chi tiết"></a>
                                    <a href="?act=edit_product&id=<?= $hh['id'] ?>"><img src="./../images/logo/edit.png" alt="" width="20px" title="Chỉnh sửa"></a>
                                    <a onclick="return confirm('Bạn có chắc muốn xóa không?')" href="?act=delete_product&id=<?= $hh['id'] ?>"><img src="./../images/logo/delete.png" alt="" width="20px" title="Xóa"></a>
                                </td>

                            </tr>

                        <?php endforeach ?>
                    </tbody>
                </table>
            <?php  } ?>
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