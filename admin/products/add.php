<div class="mainContent">
    <div class="title">
        <p>THÊM MỚI SẢN PHẨM</p>
    </div>
    <div class="main container-fluid">
        <form action="?act=add_product" method="post" enctype="multipart/form-data" class="" novalidate>
            <div class="box-input">
                <label for="formGroupExampleInput" class="form-label">ID</label>
                <input type="text" class="form-control" id="" name="id" readonly value="Auto number" disabled style="width: 98.6%;">
                <!-- <label for="" class="note">*ID tự động tăng</label> -->
            </div>
            <div class="box">
                <div class="box-input">
                    <label for="formGroupExampleInput" class="form-label">Tên sản phẩm</label>
                    <input type="text" class="form-control" id="" name="product_name" placeholder="<?= $errors['product_name'] ?? '' ?>" required>
                </div>
                <div class="box-input">
                    <label for="formGroupExampleInput" class="form-label">Danh mục</label>
                    <select class="" name=cate_id>
                        <?php foreach ($loaihang as $l) : ?>
                            <option value="<?= $l['id'] ?>"><?= $l['cate_name'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>

            <div class="box">
                <div class="box-input">
                    <label for="formGroupExampleInput" class="form-label">Giá sản phẩm</label>
                    <input type="text" class="form-control" id="" name="product_price" placeholder="<?= $errors['product_price'] ?? '' ?>" required>
                </div>
                <div class="box-input">
                    <label for="formGroupExampleInput" class="form-label">Giảm giá(%)</label>
                    <input type="text" class="form-control" id="" name="sale" placeholder="<?= $errors['sale'] ?? '' ?>" required>
                </div>
            </div>
            <div class="box">
                <div class="box-input">
                    <label for="formGroupExampleInput" class="form-label">Mô tả</label>
                    <textarea name="description" id="" cols="" rows="10"></textarea>
                </div>
                <div class="box-input">
                    <label for="formGroupExampleInput" class="form-label">Ảnh</label>
                    <img id="img-preview" src="./img.jpg" />
                    <label for="file-input" onclick="preview()">Upload Image</label>
                    <input accept="image/*" type="file" id="file-input" name="image">
                </div>

            </div>
            <h3>MẪU SẢN PHẨM</h3>
            <div class="required_inp box">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="sub-box box">
                        <div class="box-input">
                            <label for="">Ảnh</label>
                            <input type="file" name="image" id="">
                        </div>
                        <div class="box-input">
                            <label for="">Nhập màu</label>
                            <input type="text" name="product_color">
                        </div>
                        <div class="box-input">
                            <label for="">Size(S)</label>
                            <input type="text" name="quantity_size_S">
                        </div>
                        <div class="box-input">
                            <label for="">Size(M)</label>
                            <input type="text" name="quantity_size_M">
                        </div>
                        <div class="box-input">
                            <label for="">Size(L)</label>
                            <input type="text" name="quantity_size_L">
                        </div>
                        <div class="box-input">
                            <label for="">Size(XL)</label>
                            <input type="text"name="quantity_size_XL">
                        </div>
                    </div>
                </form>
                <button type="submit" class="inputRemove btn-form"><img src="./../images/logo/delete.png" alt="" width="20px" title="Xóa"></button>


            </div>
            <div id="req_input" class="datainputs">

            </div>
            <input type="button" id="addmore" class="add_input" value="Thêm mới">


            <div class="btn_remote">
                <button type="submit" class="btn btn-success " name="btn">Lưu</button>
                <button type="reset" class="btn btn-danger">Nhập lại</button>
                <a href="?act=list_cate"><button type="button" class="btn btn-primary">Danh sách</button></a>
            </div>

        </form>
    </div>
</div>
<script>
    $(document).ready(function() {
        $("#addmore").click(function() {
            $("#req_input").append('<div class="required_inp box">' +
            '<form action="" method="post" enctype="multipart/form-data">'+
                    '<div class="sub-box box">'+
                        '<div class="box-input">'+
                            '<label for="">Ảnh</label>'+
                           ' <input type="file" name="image" id="">'+
                        '</div>'+
                        '<div class="box-input">'+
                            '<label for="">Nhập màu</label>'+
                            '<input type="text" name="product_color">'+
                        '</div>'+
                        '<div class="box-input">'+
                            '<label for="">Size(S)</label>'+
                            '<input type="text" class="quantity_size_S">'+
                        '</div>'+
                        '<div class="box-input">'+
                            '<label for="">Size(M)</label>'+
                            '<input type="text" class="quantity_size_M">'+
                        '</div>'+
                        '<div class="box-input">'+
                            '<label for="">Size(L)</label>'+
                            '<input type="text" class="quantity_size_L">'+
                        '</div>'+
                        '<div class="box-input">'+
                            '<label for="">Size(XL)</label>'+
                            '<input type="text" class="quantity_size_XL">'+
                        '</div>'+
                    '</div>'+
                '</form>'+
                // '<input type="button" class="inputRemove" value="Remove"/>'+
                '<button type="" class="inputRemove"><img src="./../images/logo/delete.png" alt="" width="20px" title="Xóa" ></button>'+
                
                '</div>');
        });
        $('body').on('click', '.inputRemove', function() {
            $(this).parent('div.required_inp').remove()
        });
    });
</script>