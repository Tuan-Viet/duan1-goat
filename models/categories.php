<?php
    //Lấy ra danh sách các loại
    function loai_all(){
        $sql = "SELECT * FROM categories ORDER BY id DESC";
        $loaihang = pdo_query($sql);
        return $loaihang;
    }
    //Thêm mới loại
    function insert_categories($cate_name){
        $sql = "INSERT INTO categories (cate_name) VALUES ('$cate_name')";
        pdo_execute($sql);
    }
    //Cập nhật loại
    function update_categories($id,$cate_name){
        $sql = "UPDATE categories SET cate_name = '$cate_name' WHERE id =$id";
        pdo_execute($sql);
    }
    //Lấy ra 1 loại 
    function loai_one($id){
        $sql = "SELECT * FROM categories WHERE id =$id";
        $loaihang = pdo_query_one($sql);
        return $loaihang;
    }
    //Xóa loại
    function delete_categories($id){
        $sql = "DELETE FROM categories WHERE id =$id";
        pdo_execute($sql);
    }
?>