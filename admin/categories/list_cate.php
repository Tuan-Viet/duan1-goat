<div class="m_content">
    <div class="row frmcontent">
        <div class="btn_dk">
            <a href="?act=add_categories"><button type="button" class="btn btn-primary">Thêm mới</button></a>
        </div>
        <table class="table">
            <tr>
                <th style="width: 32px;"></th>
                <th style="width: 40px;">ID</th>
                <th>Tên loại hàng</th>
                <th style="width: 50px;">Tác vụ</th>
            </tr>
            <?php foreach ($loaihang as $lh) : ?>
                <tr>
                    <td><input type="checkbox" name="name[]" id="check_all" style="width: 14px;"></td>
                    <td><?= $lh['id'] ?></td>
                    <td><?= $lh['cate_name'] ?></td>
                    <td>
                        <button class=""><a href="?act=edit_categories&id=<?= $lh['id'] ?>" name="btn">Sửa</a></button>
                        <button class="" onclick="return confirm('Bạn có chắc muốn xóa không?')"><a href="?act=delete_categories&id=<?= $lh['id'] ?>">Xóa</a></button>
                    </td>
                </tr>
            <?php endforeach ?>

    </div>
</div>