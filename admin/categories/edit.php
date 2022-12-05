
<?php

    if(isset($_POST['btn'])){
        $errors = [];
        extract($_POST);
        if ($cate_name =='') {
            $errors['cate_name'] = "vui lòng nhập thông tin";
        }
    }
?>
<div class="mainContent">
    <div class="title">
        <p>CẬP NHẬT SẢN PHẨM</p>
    </div>
    <div class="main">
        <form action="?act=add_categories" method="post" enctype="multipart/form-data" class="" novalidate>
            <div class="box-input">
                <label for="formGroupExampleInput" class="form-label">ID</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="id" readonly value="<?= $lh['id'] ?>" disabled>
                <label for="" class="note">*ID tự động tăng</label>
            </div>
            <div class="box-input">
                <label for="formGroupExampleInput" class="form-label">Tên loại hàng</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="cate_name" placeholder="<?= $errors['cate_name'] ?? '' ?> " value="<?= $lh['cate_name'] ?>" required>
            </div>

            <div class="btn_remote">
                <button type="submit" class="btn btn-success " name="btn">Lưu</button>
                <button type="reset" class="btn btn-danger">Nhập lại</button>
                <a href="?act=list_cate"><button type="button" class="btn btn-primary">Danh sách</button></a>
            </div>

        </form>
    </div>
</div>