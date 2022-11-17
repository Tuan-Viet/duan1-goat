<?php
    //Lấy ra danh sách sản phẩm
    function products_detail_all(){
        $sql="SELECT * FROM products_detail ORDER BY id DESC";
        $product_detail = pdo_query($sql);
        return $product_detail;
    }
?>