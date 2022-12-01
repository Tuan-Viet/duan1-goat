<?php
    function show_products_details($product_code){
        $sql = "select * from products_detail where product_code = $product_code";
        $listproducts = pdo_query($sql);
        return $listproducts;
    }
    //Lấy ra danh sách sản phẩm
    function products_detail_all(){
        $sql="SELECT * FROM products_detail ORDER BY id DESC";
        $product_detail = pdo_query($sql);
        return $product_detail;
    }
    function products_detail_one($product_detail_id){
        $sql="SELECT * FROM products_detail where id = $product_detail_id";
        $product_detail_one = pdo_query_one($sql);
        return $product_detail_one;
    }
?>

