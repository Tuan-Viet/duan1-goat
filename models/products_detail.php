<?php
    function show_products_details($product_id){
        $sql = "select * from products_detail where product_id = $product_id";
        $listproducts = pdo_query($sql);
        return $listproducts;
    }
    //Lấy ra danh sách sản phẩm
    function products_detail_all(){
        $sql="SELECT * FROM products_detail ORDER BY id DESC";
        $product_detail = pdo_query($sql);
        return $product_detail;
    }
?>