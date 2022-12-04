<div class="mainContent">
    <div class="title">
        <p>THÊM MỚI SẢN PHẨM</p>
    </div>
    <form action="?act=add_product" method="post" enctype="multipart/form-data" class="" novalidate>
        <div class="main container-fluid">
            <div class="box">
                <div class="box-left">

                    <label for="file-input" onclick="preview()" id="btn-upload-file">
                        <img id="img-preview" src="./../images/logo/image.png" />
                    </label>
                    <input accept="image/*" type="file" id="file-input" name="image">
                    <!-- <span class="errors" style="display: block;text-align: center;"><?= $errors['image'] ?? '' ?></span>  -->
                </div>
                <div class="box-right">
                    <div class="box-input">
                        <label for="formGroupExampleInput" class="form-label">ID</label>
                        <input type="text" class="form-control" id="" name="id" readonly value="Auto number" disabled style="width: 98%;">
                        <!-- <label for="" class="note">*ID tự động tăng</label> -->
                    </div>
                    <div class="box">
                        <div class="box-input">
                            <label for="formGroupExampleInput" class="form-label">Tên sản phẩm</label>
                            <input type="text" class="form-control" id="" name="product_name" placeholder="<?= $errors['product_name'] ?? '' ?>">
                        </div>
                        <div class="box-input">
                            <label for="formGroupExampleInput" class="form-label"></label>
                            <div class="box" style="margin: 0;">
                            <select class="" name=cate_id>
                                <option value="" hidden >Danh mục</option>
                                <?php foreach ($loaihang as $l) : ?>
                                    <option value="<?= $l['id'] ?>"><?= $l['cate_name'] ?></option>
                                <?php endforeach ?>
                            </select>
                            <span class="errors"><?= $errors['cate_id'] ?? '' ?></span>    
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-input">
                            <label for="formGroupExampleInput" class="form-label">Giá</label>
                            <input type="text" class="form-control" id="" name="product_price" placeholder="<?= $errors['product_price'] ?? '' ?>" required>
                        </div>
                        <div class="box-input">
                            <label for="formGroupExampleInput" class="form-label">Giảm giá(%)</label>
                            <input type="text" class="form-control sale-msg" id="" name="sale" placeholder="0<?= $errors['sale'] ?? '' ?>" required style="">
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-input">
                            <label for="formGroupExampleInput" class="form-label">Mô tả</label>
                            <textarea class="description" name="description" id="" cols="" rows="10" placeholder="<?= $errors['description'] ?? '' ?>"></textarea>
                        </div>

                    </div>
                </div>
            </div>



        </div>
        <div class="btn_remote">
            <button type="submit" class="btn btn-success " name="btn">Lưu</button>
            <button type="reset" class="btn btn-danger">Nhập lại</button>
            <a href="?act=list_cate"><button type="button" class="btn btn-primary">Danh sách</button></a>
        </div>
    </form>
</div>