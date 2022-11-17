<?php
    //Lấy ra danh sách sản phẩm
    function products_all(){
        $sql="SELECT * FROM products ORDER BY id DESC";
        $hanghoa = pdo_query($sql);
        return $hanghoa;
    }
    //Lấy ra 1 sản phẩm
    function product_one($id){
        $sql="SELECT * FROM products WHERE id=$id";
        $hanghoa = pdo_query($sql);
        return $hanghoa;
    }
?>