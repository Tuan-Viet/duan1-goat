<div class="m_content">
    <div class="title">
        <h3>THÊM MỚI LOẠI HÀNG HÓA</h3> 
    </div>
    <div class="frmcontent">
        <form action="?act=add_categories" method="post" enctype="multipart/form-data" class="row g-3 needs-validation" novalidate>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">ID</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="id" readonly value="Auto number"disabled>
                <label for="" class="note">*ID tự động tăng</label>
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Tên loại hàng</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="cate_name" placeholder="<?= $errors['cate_name'] ?? '' ?>" required>
            </div>
            
            <div class="btn_dk">
                <button type="submit" class="btn btn-success " name="btn">Thêm mới</button>
                <button type="reset" class="btn btn-danger">Nhập lại</button>
                <a href="?act=list_cate"><button type="button" class="btn btn-primary">Danh sách</button></a>
            </div>
            
        </form>
    </div>
</div>