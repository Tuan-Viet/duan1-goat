<div class="mainContent">
    <div class="title">
        <p>QUẢN LÍ DANH MỤC</p>
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
    <form action="?act=delete_all_categoories" method="post">
        <div class="btn_dk">
            <a href="?act=add_categories"><button type="button" class="">Thêm mới</button></a>
            <button type="button" class="btn btn-secondary" id="click_all">Chọn tất cả</button>
            <button type="button" class="btn btn-success" id="unchecked">Bỏ chọn</button>
            <button onclick="return confirm('Bạn có chắc muốn xóa không?')" type="submit" class="btn btn-danger">Xóa mục đã chọn</button>
        </div>
        <div class="">
            <table class="list_cate">
                <tr>
                    <th style="width: 32px;"></th>
                    <!-- <th style="width: 40px;">ID</th> -->
                    <th style="float: left;margin-left: 50px;">Tên loại hàng</th>
                    <th class="active-th">Tác vụ</th>
                </tr>
                <?php foreach ($loaihang as $lh) : ?>
                    <tr>
                        <td><input type="checkbox" name="name[]" id="check_all" value="<?= $lh['id'] ?>"></td>
                        <!-- <td><input type="checkbox" name="name[]" id="check_all" style="width: 14px;"></td> -->
                        <!-- <td><?= $lh['id'] ?></td> -->
                        <td style="float: left;margin-left: 50px;"><?= $lh['cate_name'] ?></td>
                        <td class="active-td">
                            <a href="?act=edit_categories&id=<?= $lh['id'] ?>" name="btn" title="Chỉnh sửa"><img src="./../images/logo/edit.png" alt="" width="20"></a>
                            <a onclick="return confirm('Bạn có chắc muốn xóa không?')" href="?act=delete_categories&id=<?= $lh['id'] ?>" title="Xóa"><img src="./../images/logo/delete.png" alt="" width="20"></a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    </form>
</div>