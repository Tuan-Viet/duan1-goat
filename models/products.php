<?php 
    function show_product($product_id){
        if ($product_id == 0) {
            $sql = "select *, (100-sale)/100*product_price as total from products";
            $listhanghoa = pdo_query($sql);
        } else {
            $sql = "select *, (100-sale)/100*product_price as total from products where id =$product_id";
            $listhanghoa = pdo_query_one($sql);
        }
        return $listhanghoa;
    }

?>