<?php
    function show_product($product_id) {
        if ($product_id==0) {
            $sql = "select *, (100-sale)/100*product_price as total from products ORDER BY id DESC";
            $listhanghoa = pdo_query($sql);
        } else {
            $sql = "select *,(100-sale)/100*product_price as total from products where id = $product_id";
            $listhanghoa = pdo_query_one($sql);
        }
        return $listhanghoa;
    }
    function show_product_cate($cate_id) {
        $sql = "select *, (100-sale)/100*product_price as total from products where cate_id=$cate_id ORDER BY id DESC";
        $listhanghoa = pdo_query($sql);
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
    function product_cate($product_id,$cate_id) {
        $sql = "select *,(100-sale)/100*product_price as total from products where cate_id = $cate_id and id <> $product_id";
        $product_cate = pdo_query($sql);
        return $product_cate;
    }
    function show_product_total($cate_id) {
        if ($cate_id == 0) {
            $sql = "select *, (100-sale)/100*product_price as total from products ORDER BY total ASC";
        } else {
            $sql = "select *, (100-sale)/100*product_price as total from products where cate_id=$cate_id ORDER BY total ASC";
        }
        $listhanghoa = pdo_query($sql);
        return $listhanghoa;
    }
    function show_product_total_desc($cate_id) {
        if ($cate_id == 0) {
            $sql = "select *, (100-sale)/100*product_price as total from products ORDER BY total desc";
        } else {
            $sql = "select *, (100-sale)/100*product_price as total from products where cate_id = $cate_id ORDER BY total desc";
        }
        $listhanghoa = pdo_query($sql);
        return $listhanghoa;
    }
?>
