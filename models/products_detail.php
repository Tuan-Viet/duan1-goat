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
    function products_detail_one($product_detail_id){
        $sql="SELECT * FROM products_detail where id = $product_detail_id";
        $product_detail_one = pdo_query_one($sql);
        return $product_detail_one;
    }
    function update_quantity($size,$quantity_new,$product_detail_id) {
        if ($size == 'S') {
            $sql="update products_detail set quantity_size_S = '$quantity_new' where id=$product_detail_id ";
        } 
         if($size == 'M') {
            $sql="update products_detail set quantity_size_M = '$quantity_new' where id=$product_detail_id ";
        }
         if($size == 'L') {
            $sql="update products_detail set quantity_size_L = '$quantity_new' where id=$product_detail_id ";
        }
        if($size == 'XL') {
            $sql="update products_detail set quantity_size_XL = '$quantity_new' where id=$product_detail_id ";
        }
        pdo_execute($sql);
    }
?>

