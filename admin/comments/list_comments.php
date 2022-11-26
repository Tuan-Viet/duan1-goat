
<div class="mainContent">
    <div class="title">
        <p>DANH SÁCH BÌNH LUẬN</p>
    </div>
    <form action="?act=delete_all_comments" method="post">
    <div class="btn_dk">
            <button type="button" class="btn btn-secondary" id="click_all">Chọn tất cả</button>
            <button type="button" class="btn btn-success" id="unchecked">Bỏ chọn</button>
            <button onclick="return confirm('Bạn có chắc muốn xóa không?')" type="submit" class="btn btn-danger">Xóa mục đã chọn</button>
    </div>
    <div class="">
        <table class="list_cate">
            <tr>
                <th style="width: 32px;"></th>
                <th style="width: 40px;">ID</th>
                <th>ID sản phẩm </th>
                <th>ID người dùng</th>
                <th>Nội dung</th>
                <th>Ngày bình luận</th>
                <th class="active-th">Tác vụ</th>
            </tr>
            <?php foreach ($binhluan as $bl) : ?>
                <tr>
                    <td><input type="checkbox" name="name[]" id="check_all" value="<?= $bl['id'] ?>"></td>
                    <td><?= $bl['id'] ?></td>
                    <td><?= $bl['product_id'] ?> <a href="?act=product_detail&id=<?= $bl['product_id'] ?>"><img src="./../images/logo/eye.png" alt="" width="20px" title="Xem chi tiết"></a></td>
                    <td><?= $bl['user_id'] ?> <a href="?act=user_detail&id=<?= $bl['product_id'] ?>"><img src="./../images/logo/eye.png" alt="" width="20px" title="Xem chi tiết"></a></td>
                    <td><?= $bl['content'] ?></td>
                    <td><?= $bl['time_sent'] ?></td>
                    <td class="active-td">
                        <a onclick="return confirm('Bạn có chắc muốn xóa không?')" href="?act=delete_comement&id=<?= $bl['id'] ?>" title="Xóa"><img src="./../images/logo/delete.png" alt="" width="20"></a>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
    </form>
    <div id="pageNavPosition"></div>
    <script type="text/javascript">
        var pager = new Pager('results', 10);
        pager.init();
        pager.showPageNav('pager', 'pageNavPosition');
        pager.showPage(1);
    </script>
    <script>
        $('#my-table').DataTable();
    </script>
</div>