<div class="m_content">
    <div class="title">
        <h3>CẬP NHẬT LOẠI HÀNG HÓA</h3>
    </div>
    <div class="frmcontent">
        <form action="?act=edit_categories" method="post" enctype="multipart/form-data" class="row g-3 needs-validation" novalidate>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">ID</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="id" readonly value="<?= $lh['id'] ?>" disabled>
                <input type="hidden" name="id" value="<?= $lh['id'] ?>">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Tên loại hàng</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="cate_name" value="<?= $lh['cate_name'] ?>">
            </div>
            <div class="btn_dk">
                <button type="submit" class="btn btn-success " name="btn">Lưu</button>
                <button type="reset" class="btn btn-danger">Nhập lại</button>
                <a href="?act=list_cate"><button type="button" class="btn btn-primary">Danh sách</button></a>
            </div>
        </form>
    </div>
</div>