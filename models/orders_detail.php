<?php
    function insert_orders_detail($order_id,$product_id,$product_detail_id,$product_name,$image,$quantity,$size,$product_color,$total) {
        $sql = "insert into orders_detail (order_id,product_id,product_detail_id,product_name,image,quantity,size,product_color,total)
         values('$order_id','$product_id','$product_detail_id','$product_name','$image','$quantity','$size','$product_color','$total')";
         pdo_execute($sql);
    }
    function load_all_order_detail($id_order){
        $sql = "select * from orders_detail where order_id=$id_order";
        $load_all_order_detail = pdo_query($sql);
        return $load_all_order_detail;
    }
    //Lấy ra danh sách chi đơn hàng
    function order_detail_all(){
        $sql = "SELECT * FROM orders_detail ";
        $order_detail_all = pdo_query($sql);
        return $order_detail_all;
    }

  
?>