<?php
    //Lấy ra danh sách bình luận
    function comment_all(){
        $sql = "SELECT * FROM comments ORDER BY id DESC";
        $binhluan = pdo_query($sql);
        return $binhluan;
    }
    //Xóa bình luận
    function delete_comment($id){
        $sql = "DELETE FROM comments WHERE id ='$id'";
        pdo_execute($sql);
    }
?>