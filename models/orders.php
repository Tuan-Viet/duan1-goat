<?php
    function insert_order($user_id, $name, $address, $tel, $date_time,$thanh_tien,$status) {
        $sql = "insert into orders(user_id, name, address, tel, date_time,total,status) values ('$user_id', '$name', '$address', '$tel', '$date_time','$thanh_tien','$status')";
        return pdo_execute_lastInsertId($sql);
    }
    function tongtien() {
        $thanh_tien = 0;
        foreach($_SESSION['my_cart'] as $cart) {
            $thanh_tien += $cart[8];
        }
        return $thanh_tien;
    }
    function update_order($pay_method,$id_order){
        $sql = "update orders set pay_methods='$pay_method' where id  = $id_order ";
        pdo_execute($sql);
    }
    function load_one_order($id_order){
        $sql = "select * from orders where id=$id_order";
        $load_one_order = pdo_query_one($sql);
        return $load_one_order;
    }
    function load_all_order($user_id){
        $sql = "select * from orders where user_id=$user_id order by id desc";
        $load_all_order = pdo_query($sql);
        return $load_all_order;
    }
    function check_pttt($pay_method) {
        switch ($pay_method) {
            case '0':
                $pttt = "Thanh toán khi giao hàng";
                break;
            case '1':
                $pttt = "Thanh toán qua ATM";
                break;
            default:
                $pttt = "Thanh toán khi giao hàng";
                break;
            }
            return $pttt;
    }
    function atm($pay_method,$name,$user_id,$order_id) {
        if ($pay_method == 1) {
            echo '
            <div class="photo_qr mb8"><img src="./images/logo/z3905348577496_6410dc30b319e253c086b49a1372a1de.jpg" alt="" class="qr"></div>
            <h2 class="title_qr">Hoặc stk 030720032906</h2>
            <h2 class="title_qr">người nhận Vũ Tiến Thành</h2>
            <h2 class="title_qr">Nội dung chuyển khoản: <div>"'.$name.' KH_'.$user_id.' chuyen khoan don hang GOAT-'.$order_id.'"</div> </h2>
            ';
        }
    }
    //Lấy ra danh sách đơn hàng
    function orders_all (){
        $sql = "SELECT * FROM orders ORDER BY id DESC";
        $orders_all = pdo_query($sql);
        return $orders_all ;
    }
    //Xóa đơn hàng
    function delete_order($id){
        $sql = "DELETE FROM orders WHERE id ='$id'";
        pdo_execute($sql);
    }
    //Lấy ra đơn hàng theo id
    function order_one($id){
        $sql = "SELECT * FROM orders WHERE id =$id";
        $order_one = pdo_query_one($sql);
        return $order_one;
    }
    //Cập nhật trạng thái đơn hàng
    function update_status($id,$status){
        $sql = "UPDATE orders SET status = '$status' WHERE id =$id";
        pdo_execute($sql);
    }
    //load đơn hàng
    function load_orders($keyword,$filter_status,$condition_sort){
        $sql="SELECT * FROM orders WHERE (id LIKE '%$keyword%' OR user_id LIKE '%$keyword%' OR name LIKE '%$keyword%') ".$filter_status."  ".$condition_sort." ";
        $orders = pdo_query($sql);
        return $orders;
    }
?>



<style>
    h2.title_qr {
    font-size: 15px;
    text-align: center;
    }

    .photo_qr {
        width: 100%;
        text-align: center;
        /* height: 230px; */
    }
    .qr {
        width: 200px;
        height: 200px;
        /* text-align: center; */
        
    }
</style>
