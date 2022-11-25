<?php
    session_start();
    include "models/PDO.php";
    include "models/products.php";
    include "models/products_detail.php";
    include "models/categories.php";
    include "models/comments.php";
    include "models/orders.php";
    include "models/orders_detail.php";
    include "models/accounts.php";
    include "views/header.php";
    // include "views/overlay_detail.php";
    if (!isset($_SESSION['my_cart'])) {
        $_SESSION['my_cart'] = [];
      }
    $error = [];
    if((isset($_GET['act'])) && ($_GET['act']!="")) {
        $act = $_GET['act'];
        switch ($act) {
            case 'hang_hoa':
                $listhanghoa = show_product(0);
                include "views/hang_hoa.php";
                break;
            case 'hang_hoa_chi_tiet':
                $product_id = $_GET['id'];
                $listhanghoa = show_product($product_id);
                $listproduct = show_products_details($product_id);
                include "views/hang_hoa_chi_tiet.php";
                break;
            case 'dang_ky':
                if (isset($_POST['btn_submit'])) {
                    $user_name = $_POST['user_name'];
                    if (trim($user_name) == '') {
                        $error['user_name'] = "Vui lòng nhập tên đăng nhập";
                    }
                    $user_email = $_POST['user_email'];
                    if (trim($user_email) == '') {
                        $error['user_email'] = "Vui lòng nhập tên đăng nhập";
                    }
                    $user_tel = $_POST['user_tel'];
                    $user_password = $_POST['user_password'];
                    insert_account($user_name,$user_password,$user_email,$user_tel, '0');
                    $thongbao = "Chúc mừng bạn đã đăng ký thành công";
                    header('location:index.php?act=dang_nhap');
                }
                include "views/accounts/dang_ky.php";
                break;
            case 'dang_nhap':
                if (isset($_POST['btn_submit'])) {
                    $user_name = $_POST['user_name'];
                    if (trim($user_name) == '') {
                        $error['user_name'] = "Vui lòng nhập tên đăng nhập";
                    }
                    $user_password = $_POST['user_password'];
                    if (trim($user_password) == '') {
                        $error['user$user_password'] = "Vui lòng nhập tên đăng nhập";
                    }
                    $check_user = check_user($user_name,$user_password);
                    if (is_array($check_user)) {
                        $_SESSION['user'] = $check_user;
                        // header('location:index.php');
                        echo "
                        <script>window.open('index.php','_self')</script>
                        ";
                    } else {
                        $thongbao = "Thông tin tài khoản hoặc mật khẩu không chính xác";
                    }
                    
                }
                include "views/accounts/dang_nhap.php";
                break;
            case 'quen_mat_khau':
                include "views/accounts/quen_mat_khau.php";
                break;
            case 'dang_xuat' :
                session_unset();
                // header('location:index.php');
                echo "
                    <script>window.open('index.php','_self')</script>
                    ";
                break;
            case 'addtocart':
                if (isset($_POST['btn_buynow']) && $_POST['btn_buynow']) {
                    $product_id = $_POST['product_id'];
                    $product_name = $_POST['product_name'];
                    // $product_price = $_POST['product_price'];
                    // $sale = $_POST['sale'];
                    $total = $_POST['total'];
                    $product_detail_id = $_POST['product_detail_id'];
                    // $image = $_POST['image'];
                    // $product_color = $_POST['product_color'];
                    $product_detail_one = products_detail_one($product_detail_id);
                    $product_color = $product_detail_one['product_color'];
                    $image = $product_detail_one['image'];
                    $size = $_POST['size'];
                    $quantity = $_POST['quantity'];
                    $tongtien = $total * $quantity;
                    // tạo ra 1 mảng cart để chứa thông tin sản phẩm đã thêm vào giỏ hàng
                    $cart = [$product_id,$product_name,$total,$product_detail_id,$image,$product_color,$size,$quantity,$tongtien];
                    // array_push($_SESSION['mycart'], $cart);
                    //thêm mảng cart vào trong session
                    $_SESSION['my_cart'][] = $cart;
                    // array_push($_SESSION['my_cart'], $cart);
                    // echo $tongtien;
                    // var_dump($cart);
                    include "views/bill/cart.php";
                }
                 else{
                    include "views/bill/cart.php";
                }
                if (isset($_POST['btn_addtocart']) && $_POST['btn_addtocart']) {
                    $product_id = $_POST['product_id'];
                    $product_name = $_POST['product_name'];
                    // $product_price = $_POST['product_price'];
                    // $sale = $_POST['sale'];
                    $total = $_POST['total'];
                    $product_detail_id = $_POST['product_detail_id'];
                    $image = $_POST['image'];
                    $product_color = $_POST['product_color'];
                    $size = $_POST['size'];
                    $quantity = $_POST['quantity'];
                    $tongtien = $total * $quantity;
                    // tạo ra 1 mảng cart để chứa thông tin sản phẩm đã thêm vào giỏ hàng
                    $cart = [$product_id,$product_name,$total,$product_detail_id,$image,$product_color,$size,$quantity,$tongtien];
                    // array_push($_SESSION['mycart'], $cart);
                    //thêm mảng cart vào trong session
                    // $_SESSION['my_cart'][] = $cart;
                    array_push($_SESSION['my_cart'], $cart);
                    // echo $tongtien;
                    // var_dump($cart);
                    // header("Location: ".$_SERVER['HTTP_REFERER']);
                    // echo "
                    // <script>location.reload()</script>
                    // ";
                    echo "
                        <script>window.open('index.php?act=hang_hoa_chi_tiet&id=".$product_id." ','_self')</script>
                    ";
                }
                break;
            case 'delete_cart' :
                if (isset($_GET['id_cart'])) {
                    array_splice($_SESSION['my_cart'], $_GET['id_cart'], 1);
                } 
                // else {
                //     $_SESSION['mycart'] = [];
                // }
                // header('Location: index.php?act=addtocart');
                echo "
                    <script>window.open('index.php?act=addtocart','_self')</script>
                ";
                break;
            case 'bill_confirm' :
                include "views/bill/bill_confirm.php";
                break;
            case 'bill_pttt':
                if (isset($_POST['btn_submit'])) {
                    $user_id = $_SESSION['user']['id'];
                    $name = $_POST['name'];
                    $tel = $_POST['tel'];
                    $address = $_POST['address'];
                    $date_time = date('h:i:sa d/m/Y');
                    $thanh_tien = tongtien();
                    $id_order = insert_order($user_id, $name, $address, $tel, $date_time,$thanh_tien);
                    include "views/bill/bill_pttt.php";
                }
                break;
            case 'bill_access':
                $pay_methods = $_POST['check'];
                $id_order = $_POST['id_order'];
                update_order($pay_methods,$id_order);
                foreach ($_SESSION['my_cart'] as $cart) {
                    insert_orders_detail($id_order,$cart['0'],$cart['3'],$cart[1],$cart['4'],$cart[7],$cart[6],$cart[5],$cart[8]);
                }
                $_SESSION['my_cart']=[];
                $load_one_order = load_one_order($id_order);
                $load_all_order_detail = load_all_order_detail($id_order);
                include "views/bill/bill_access.php";
                break;
            case 'cart':
                include "views/bill/cart.php";
                break;
            case 'mycart':
                include "views/bill/mycart.php";
                break;
            default:
                include "views/home.php";
                break; 
        }
    }
    else {
     include "views/home.php";
    }
    include "views/footer.php";
?>
