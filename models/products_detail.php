<?php
    function show_products_details($product_id){
        $sql = "select * from products_detail where product_id = $product_id";
        $listproducts = pdo_query($sql);
        return $listproducts;
    }
?>