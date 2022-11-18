<?php
    function show_product($product_id) {
        if ($product_id==0) {
            $sql = "select *, (100-sale)/100*product_price as total from products where 1";
            $listhanghoa = pdo_query($sql);
        } else {
            $sql = "select *,(100-sale)/100*product_price as total from products where id = $product_id";
            $listhanghoa = pdo_query_one($sql);
        }
        return $listhanghoa;
    }
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
