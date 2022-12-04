<div class="mainContent">
    <div class="title">
        <p>CẬP NHẬT SẢN PHẨM</p>
    </div>
    <form action="?act=edit_product" method="post" enctype="multipart/form-data" class="" novalidate>

        <div class="main container-fluid">
            <?php foreach ($hanghoa as $hh) : ?>
                <div class="box">
                    <div class="box-left">
                        <!-- <label for="formGroupExampleInput" class="form-label">Ảnh</label> -->
                        <div class="image">
                            <img id="img-preview" src="./../images/products/<?= $hh['image'] ?>" />
                        </div>
                        <label for="file-input" onclick="preview()" id="btn-upload-file">Upload Image</label>
                        <input accept="image/*" type="file" id="file-input" name="image">
                        <input type="hidden" name="image" value="<?= $hh['image'] ?>">
                    </div>
                    <div class="box-right">
                        <div class="box-input">
                            <label for="formGroupExampleInput" class="form-label">ID</label>
                            <input type="text" class="form-control" id="" name="id" readonly value="<?= $hh['id'] ?>" disabled style="width: 98.6%;">
                            <input type="hidden" name="id" value="<?= $hh['id'] ?>">
                        </div>
                        <div class="box">
                            <div class="box-input">
                                <label for="formGroupExampleInput" class="form-label">Tên sản phẩm</label>
                                <input type="text" class="form-control" id="" name="product_name" value="<?= $hh['product_name'] ?>" placeholder="<?= $errors['product_name'] ?? '' ?>" required>
                            </div>
                            <div class="box-input">
                                <label for="formGroupExampleInput" class="form-label">Danh mục</label>
                                <select class="" name=cate_id>
                                    <?php foreach ($loaihang as $l) : ?>
                                        <option value="<?= $l['id'] ?>" <?= ($l['id'] == $hh['cate_id']) ? 'selected' : '' ?>><?= $l['cate_name'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <div class="box">
                            <div class="box-input">
                                <label for="formGroupExampleInput" class="form-label">Giá sản phẩm</label>
                                <input type="text" class="form-control" id="" name="product_price" value="<?= $hh['product_price'] ?>" placeholder="<?= $errors['product_price'] ?? '' ?>" required>
                            </div>
                            <div class="box-input">
                                <label for="formGroupExampleInput" class="form-label">Giảm giá(%)</label>
                                <input type="text" class="form-control" id="" name="sale" value="<?= $hh['sale'] ?>" placeholder="<?= $errors['sale'] ?? '' ?>" required>
                            </div>
                        </div>
                        <div class="box">
                            <div class="box-input">
                                <label for="formGroupExampleInput" class="form-label">Mô tả</label>
                                <textarea name="description" id="" cols="" rows="10"><?= $hh['description'] ?></textarea>
                            </div>
                        </div>
                        <table class="table">
                            <tr>
                                <th></th>
                                <th>Màu sắc</th>
                                <th>Size(S)</th>
                                <th>Size(M)</th>
                                <th>Size(L)</th>
                                <th>Size(Xl)</th>
                                <th></th>
                            </tr>
                            <?php foreach ($product_detail as $prd) : ?>
                                <?php
                                if ($hh['id'] == $prd['product_id']) {
                                ?>
                                    <tr>
                                        <td><img src="./../images/products/<?= $prd['image_detail'] ?>" alt="" width="60"></td>
                                        <td><?= $prd['product_color'] ?></td>
                                        <td><?= $prd['quantity_size_S'] ?></td>
                                        <td><?= $prd['quantity_size_M'] ?></td>
                                        <td><?= $prd['quantity_size_L'] ?></td>
                                        <td><?= $prd['quantity_size_XL'] ?></td>
                                        <td>
                                            <a href="?act=edit_product_detail&id=<?= $prd['id'] ?>"><img src="./../images/logo/edit.png" alt="" width="20px" title="Chỉnh sửa"></a>

                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            <?php endforeach ?>
                        </table>
                    </div>
                </div>
            <?php endforeach ?>


        </div>
        <div class="btn_remote">
            <button type="submit" class="btn btn-success " name="btn">Lưu</button>
            <button type="reset" class="btn btn-danger">Nhập lại</button>
            <a href="?act=list_cate"><button type="button" class="btn btn-primary">Danh sách</button></a>
        </div>
    </form>

</div>