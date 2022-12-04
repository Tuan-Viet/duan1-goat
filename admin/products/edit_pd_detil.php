<div class="mainContent">
    <div class="title">
        <p>CẬP NHẬT MẪU SẢN PHẨM</p>
    </div>
    <form action="?act=edit_product_detail" method="post" enctype="multipart/form-data" class="">
        <div class="main container-fluid">
            <input type="hidden" name="id" value="<?= $product_detail['id'] ?>">
            <input type="hidden" name="product_id" value="<?= $product_detail['product_id'] ?>">
            <div class="box">
                <div class="box-left">
                    <div class="image">
                        <img id="img-preview" src="./../images/products/<?= $product_detail['image_detail'] ?>" />
                    </div>
                    <label for="file-input" onclick="preview()" id="btn-upload-file">Upload Image</label>
                    <input accept="image/*" type="file" id="file-input" name="image_detail">
                    <input type="hidden" name="image_detail" value="<?= $product_detail['image_detail'] ?>">
                </div>
                <div class="box-right">
                    <div class="box-input">
                        <label for="formGroupExampleInput" class="form-label">Màu</label>
                        <input type="text" class="form-control" id="" name="product_color" style="width: 98%;" value="<?= $product_detail['product_color'] ?>">
                    </div>
                    <div class="box">
                        <div class="box-input">
                            <label for="formGroupExampleInput" class="form-label">Size(S)</label>
                            <input type="text" class="form-control" id="" name="quantity_size_S" placeholder="<?= $errors['quantity_size_S'] ?? '' ?>" value="<?= $product_detail['quantity_size_S'] ?>">
                        </div>
                        <div class="box-input">
                            <label for="formGroupExampleInput" class="form-label">Size(S)</label>
                            <input type="text" class="form-control" id="" name="quantity_size_M" placeholder="<?= $errors['quantity_size_M'] ?? '' ?>" value="<?= $product_detail['quantity_size_M'] ?>">
                        </div>
                        <div class="box-input">
                            <label for="formGroupExampleInput" class="form-label">Size(S)</label>
                            <input type="text" class="form-control" id="" name="quantity_size_L" placeholder="<?= $errors['quantity_size_L'] ?? '' ?>" value="<?= $product_detail['quantity_size_L'] ?>">
                        </div>
                        <div class="box-input">
                            <label for="formGroupExampleInput" class="form-label">Size(S)</label>
                            <input type="text" class="form-control" id="" name="quantity_size_XL" placeholder="<?= $errors['quantity_size_XL'] ?? '' ?>" value="<?= $product_detail['quantity_size_XL'] ?>">
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