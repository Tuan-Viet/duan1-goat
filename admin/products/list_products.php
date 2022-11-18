<div class="m_content">
    <div class="row title">
        <h3>DANH SÁCH SẢN PHẨM</h3>
    </div>
    <form action="?act=xoa_all_hh" method="post">
        <div class="row frmcontent">
            <div class="btn_dk">
                <a href="?act=add_hh"><button type="button" class="btn btn-primary">Thêm mới</button></a>
                <button type="button" class="btn btn-secondary" id="btn1">Chọn tất cả</button>
                <button type="button" class="btn btn-success" id="btn2">Bỏ chọn</button>
                <button type="submit" class="btn btn-danger">Xóa mục đã chọn</button>
            </div>
            <table class="table">
                <tr>
                    <th></th>
                    <th>ID</th>
                    <th>Tên sản phẩm</th>
                    <th>Đơn giá</th>
                    <th>Giảm giá(%)</th>
                    <th>Ảnh minh họa</th>
                    <th>Loại</th>
                    <th>Mô tả</th>
                    <th>Số lượt xem</th>
                    <th>Tác vụ</th>
                </tr>
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
                                    if($hh['cate_id'] == $loai['id']){
                                        echo $loai['cate_name'];
                                    }
                                ?>
                            <?php endforeach ?>
                        </td>
                        <td><?= $hh['description'] ?></td>
                        <td><?= $hh['views'] ?></td>
                        <td>
                            <button class><a href="?act=product_detail&id=<?= $hh['id'] ?>">Chi tiết</a></button>
                            <button class=""><a href="?act=edit_product&id=<?= $hh['id'] ?>">Sửa</a></button>
                            <button class="" onclick="return confirm('Bạn có chắc muốn xóa không?')"><a href="??act=edit_product&id=<?= $hh['id'] ?>">Xóa</a></button>
                        </td>
                    </tr>
                <?php endforeach ?>
        </div>
</div>
</div>
</form>
</div>