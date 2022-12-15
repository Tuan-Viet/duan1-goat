<div class="mainContent">
    <div class="title">
        <p>THÊM MẪU SẢN PHẨM</p>
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
        ?>
    </div>
    <form action="?act=add_product_detail" method="post" enctype="multipart/form-data" class="" novalidate>
        <div class="main container-fluid">
            <input type="hidden" name="product_id" value="<?= $id ?>">
            <div class="box">
                <div class="box-left">
                    <!-- <label for="formGroupExampleInput" class="form-label">Ảnh</label> -->
                    <!-- <div class="image">
                        <img id="img-preview" src="./img.jpg" width=""/>
                    </div> -->
                    <label for="file-input" onclick="preview()" id="btn-upload-file">
                        <img id="img-preview" src="./../images/logo/image.png" style="margin: 0;" />
                    </label>
                    <input accept="image/*" type="file" id="file-input" name="image_detail">
                </div>
                <div class="box-right">
                    <div class="box-input">
                        <label for="formGroupExampleInput" class="form-label">Màu sắc</label>
                        <input type="text" class="form-control" id="" name="product_color" placeholder="<?= $errors['product_color'] ?? '' ?>" style="width: 98%;">
                    </div>
                    <div class="box">
                        <div class="box-input">
                            <label for="formGroupExampleInput" class="form-label">Size(S)</label>
                            <input type="text" class="form-control" id="" name="quantity_size_S" placeholder="<?= $errors['quantity_size_S'] ?? '' ?>" required>
                        </div>
                        <div class="box-input">
                            <label for="formGroupExampleInput" class="form-label">Size(M)</label>
                            <input type="text" class="form-control" id="" name="quantity_size_M" placeholder="<?= $errors['quantity_size_M'] ?? '' ?>" required>
                        </div>
                        <div class="box-input">
                            <label for="formGroupExampleInput" class="form-label">Size(L)</label>
                            <input type="text" class="form-control" id="" name="quantity_size_L" placeholder="<?= $errors['quantity_size_L'] ?? '' ?>" required>
                        </div>
                        <div class="box-input">
                            <label for="formGroupExampleInput" class="form-label">Size(XL)</label>
                            <input type="text" class="form-control" id="" name="quantity_size_XL" placeholder="<?= $errors['quantity_size_XL'] ?? '' ?>" required>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="btn_remote">
            <button type="submit" class="btn btn-success " name="btn">Lưu</button>
            <button type="reset" class="btn btn-danger">Nhập lại</button>
            <a href="?act=list_products"><button type="button" class="btn btn-primary">Danh sách</button></a>
        </div>

    </form>
</div>