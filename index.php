<?php
    include "models/PDO.php";
    include "models/products.php";
    include "models/products_detail.php";
    include "models/categories.php";
    include "models/comments.php";
    include "models/orders.php";
    include "models/accounts.php";
    include "views/header.php";
    session_start();
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
                    $user_email = $_POST['user_email'];
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
                    $user_password = $_POST['user_password'];
                    $check_user = check_user($user_name,$user_password);
                    if (is_array($check_user)) {
                        $_SESSION['user'] = $check_user;
                        header('location:index.php');

                    } else {
                        $thongbao = "Thông tin tài khoản hoặc mật khẩu không chính xác";
                    }
                }
                include "views/accounts/dang_nhap.php";
                break;
            case 'quen_mat_khau':
                include "views/accounts/quen_mat_khau.php";

            case 'addtocart':
                if (isset($_POST['btn_buynow']) && $_POST['btn_buynow']) {
                    $product_id = $_POST['product_id'];
                    $quantity = $_POST['quantity'];
                    $product_detail_id = $_POST['product_detail_id'];
                    $size = $_POST['size'];
                    
                }
                include "views/bill/view_cart.php";

                break;
            case 'bill_pttt':

                include "views/bill/bill_pttt.php";
                break;
            case 'bill_access':

                include "views/bill/bill_access.php";
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
