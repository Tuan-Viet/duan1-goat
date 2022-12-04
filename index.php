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
    $errors = [];
    if((isset($_GET['act'])) && ($_GET['act']!="")) {
        $act = $_GET['act'];
        switch ($act) {
            case 'hang_hoa':
                $listhanghoa = show_product(0);
                include "views/hang_hoa.php";
                break;
            case 'blog':
                $listhanghoa = show_product(0);
                echo $listhanghoa;
                include "views/blog.php";   
                break;
            case 'hang_hoa_chi_tiet':
                $product_id = $_GET['id'];
                $listhanghoa = show_product($product_id);
                $product_id = $listhanghoa['product_id'];
                $listproduct = show_products_details($product_id);
                    // if (!isset($product_detail_id)) {
                    //     $errors['product_detail_id'] = "Bạn vui lòng chọn màu";
                    // }
                    // echo "
                    //     <script>window.open('index.php?act=hang_hoa_chi_tiet&id=".$product_id." ','_self')</script>
                    // ";
                    if(isset($_SESSION['product_detail_id'])){
                        $errors['product_detail_id'] = $_SESSION['product_detail_id'];
                        // echo "<script>alert('$a')</script>";
                        unset($_SESSION['product_detail_id']);
                    }
    
                    if(isset($_SESSION['size'])){
                        $errors['size']= $_SESSION['size'];
                        // echo "<script>alert('$size')</script>";
                        unset($_SESSION['size']);
                    }
                // else {

                // }
                extract($listhanghoa);
                $product_cate = product_cate($product_id,$cate_id);
                include "views/hang_hoa_chi_tiet.php";
                break;
            case 'dang_ky':
                if (isset($_POST['btn_submit'])) {
                    $user_name = $_POST['user_name'];
                    if (trim($user_name) == '') {
                        $errors['user_name'] = "Vui lòng nhập tên đăng nhập";
                    }
                    $user_email = $_POST['user_email'];
                    if (trim($user_email) == '') {
                        $errors['user_email'] = "Vui lòng nhập email";
                    }
                    $user_tel = $_POST['user_tel'];
                    if (trim($user_tel) == '') {
                        $errors['user_tel'] = "Vui lòng nhập số điện thoại";
                    }
                    $user_password = $_POST['user_password'];
                    if (trim($user_password) == '') {
                        $errors['user_password'] = "Vui lòng nhập mật khẩu";
                    }
                    if (!isset($errors['user_name']) && !isset($errors['user_email']) && !isset($errors['user_tel']) && !isset($errors['user_password'])) {
                        insert_account($user_name,$user_password,$user_email,$user_tel, '0');
                        header('location:index.php?act=dang_nhap');
                    }
                    // $thongbao = "Chúc mừng bạn đã đăng ký thành công";
                }
                include "views/accounts/dang_ky.php";
                break;
            case 'dang_nhap':
                if (isset($_POST['btn_submit'])) {
                    $user_name = $_POST['user_name'];
                    if (trim($user_name) == '') {
                        $errors['user_name'] = "Vui lòng nhập tên đăng nhập";
                    }
                    $user_password = $_POST['user_password'];
                    if (trim($user_password) == '') {
                        $errors['user_password'] = "Vui lòng nhập mật khẩu";
                    }
                    if (!isset($errors['user_name']) && !isset($errors['user_password'])) {
                        $check_user = check_user($user_name,$user_password);
                        if (is_array($check_user)) {
                            $_SESSION['user'] = $check_user;
                            // header('location:index.php');
                            echo "
                            <script>window.open('index.php','_self')</script>
                            ";
                        } else {
                            $thongbao = "Thông tin tài khoản hoặc mật khẩu ko chính xác";
                        }
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
                    if(isset($_POST['product_detail_id']) && isset($_POST['size'])){
                        $product_id = $_POST['product_id'];
                        $product_id = $_POST['product_id'];
                        $product_name = $_POST['product_name'];
                        // $product_price = $_POST['product_price'];
                        // $sale = $_POST['sale'];
                        $total = $_POST['total'];
                        $product_detail_id = $_POST['product_detail_id'];
                        // $image = $_POST['image'];
                        // $product_color = $_POST['product_color'];
                        // if (!isset($_POST['product_detail_id'])) {
                        //     $errors['product_detail_id'] = "Bạn vui lòng chọn màu";
                        // }
                        if (!isset($product_detail_id)) {
                            $errors['product_detail_id'] = "Bạn vui lòng chọn màu";
                        }
                        else {
                            $product_detail_one = products_detail_one($product_detail_id);
                            $product_color = $product_detail_one['product_color'];
                            $image = $product_detail_one['image_detail'];
                        }
                        $quantity = $_POST['quantity'];
                        $tongtien = $total * $quantity;
                        $size = $_POST['size'];
                        if (!isset($_POST['size'])) {
                            $errors['size'] = "Bạn vui lòng chọn size";
                        }

                        $fl = 0;
                        // if (!isset($errors['product_detail_id']) && !isset($errors['size'])) {
                            for ($i=0; $i < sizeof($_SESSION['my_cart']); $i++) { 
                                if($_SESSION['my_cart'][$i][3]==$product_detail_id) {
                                $fl=1;
                                $so_luong_new = $quantity + $_SESSION['my_cart'][$i][7];
                                $_SESSION['my_cart'][$i][7]=$so_luong_new;
                                break;
                                }
                            }
                            if ($fl==0) {
                                // thêm mới sản phẩm vào giỏ hàng
                                // $hhaddtocart=[$ma_hh,$ten_hh,$hinh,$don_gia,$so_luong,$thanh_tien];
                                // array_push($_SESSION['mycart'],$hhaddtocart);
                                $cart = [$product_id,$product_name,$total,$product_detail_id,$image,$product_color,$size,$quantity,$tongtien];
                                $_SESSION['my_cart'][] = $cart;
                            }
                        } else {
                            $product_id = $_POST['product_id'];
                            if(!isset($_POST['product_detail_id'])){
                                $_SESSION['product_detail_id'] = "Bạn vui lòng chọn màu";
                            }
                            if(!isset($_POST['size'])){
                                $_SESSION['size'] = "Bạn vui lòng chọn size";
                            }

                            echo "
                            <script>window.open('index.php?act=hang_hoa_chi_tiet&id=".$product_id." ','_self')</script>";
                        }
                        
                        include "views/bill/cart.php";
                    // } 
                    // else {
                        // echo "
                        // <script>window.open('index.php?act=hang_hoa_chi_tiet&id=".$product_id." ','_self')</script>
                        // ";
                    // }
                    
                    // tạo ra 1 mảng cart để chứa thông tin sản phẩm đã thêm vào giỏ hàng
                    // array_push($_SESSION['mycart'], $cart);
                    //thêm mảng cart vào trong session
                    // array_push($_SESSION['my_cart'], $cart);
                    // echo $tongtien;
                    // var_dump($cart);
                }
                 else{
                    include "views/bill/cart.php";
                }
                if (isset($_POST['btn_addtocart']) && $_POST['btn_addtocart']) {
                    if(isset($_POST['product_detail_id']) && isset($_POST['size'])){
                    $product_id = $_POST['product_id'];
                    $product_id = $_POST['product_id'];
                    $product_name = $_POST['product_name'];
                    // $product_price = $_POST['product_price'];
                    // $sale = $_POST['sale'];
                    $total = $_POST['total'];
                    $product_detail_id = $_POST['product_detail_id'];
                    $product_detail_one = products_detail_one($product_detail_id);
                    $product_color = $product_detail_one['product_color'];
                    $image = $product_detail_one['image_detail'];
                    $quantity = $_POST['quantity'];
                    $size = $_POST['size'];
                    $quantity = $_POST['quantity'];
                    $tongtien = $total * $quantity;
                    $fl = 0;
                    for ($i=0; $i < sizeof($_SESSION['my_cart']); $i++) { 
                        if($_SESSION['my_cart'][$i][3]==$product_detail_id) {
                          $fl=1;
                          $so_luong_new = $quantity + $_SESSION['my_cart'][$i][7];
                          $_SESSION['my_cart'][$i][7]=$so_luong_new;
                          break;
                        }
                    }
                    if ($fl==0) {
                        // thêm mới sản phẩm vào giỏ hàng
                        // $hhaddtocart=[$ma_hh,$ten_hh,$hinh,$don_gia,$so_luong,$thanh_tien];
                        // array_push($_SESSION['mycart'],$hhaddtocart);
                        $cart = [$product_id,$product_name,$total,$product_detail_id,$image,$product_color,$size,$quantity,$tongtien];
                        $_SESSION['my_cart'][] = $cart;
                    }
                    echo "
                        <script>window.open('index.php?act=hang_hoa_chi_tiet&id=".$product_id." ','_self')</script>
                    ";
                    }  else {
                        $product_id = $_POST['product_id'];
                        if(!isset($_POST['product_detail_id'])){
                            $_SESSION['product_detail_id'] = "Bạn vui lòng chọn màu";
                        }
                        if(!isset($_POST['size'])){
                            $_SESSION['size'] = "Bạn vui lòng chọn size";
                        }

                        echo "
                        <script>window.open('index.php?act=hang_hoa_chi_tiet&id=".$product_id." ','_self')</script>";
                    }
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
                if(isset($_SESSION['name'])){
                    $errors['name'] = $_SESSION['name'];
                    // echo "<script>alert('$a')</script>";
                    unset($_SESSION['name']);
                }

                if(isset($_SESSION['tel'])){
                    $errors['tel']= $_SESSION['tel'];
                    // echo "<script>alert('$tel')</script>";
                    unset($_SESSION['tel']);
                }

                if(isset($_SESSION['address'])){
                    $errors['address']= $_SESSION['address'];
                    // echo "<script>alert('$address')</script>";
                    unset($_SESSION['address']);
                }
                include "views/bill/bill_confirm.php";
                break;
            case 'bill_pttt':
                if (isset($_POST['btn_submit'])) {
                    if(trim($_POST['name']) != '' && trim($_POST['tel']) != '' && trim($_POST['address']) !=''){
                    $user_id = $_SESSION['user']['id'];
                    $name = $_POST['name'];
                    $tel = $_POST['tel'];
                    $address = $_POST['address'];
                    $date_time = date('h:i:sa d/m/Y');
                    $thanh_tien = tongtien();
                    $id_order = insert_order($user_id, $name, $address, $tel, $date_time,$thanh_tien);
                    
                    } else {
                        if (trim($_POST['name']) =='') {
                            $_SESSION['name'] = "Bạn vui lòng nhập tên";
                        }
                        if (trim($_POST['tel']) =='') {
                            $_SESSION['tel'] = "Bạn vui lòng nhập số điện thoại";
                        }
                        if (trim($_POST['address']) =='') {
                            $_SESSION['address'] = "Bạn vui lòng nhập địa chỉ";
                        }
                        echo "
                            <script>window.open('index.php?act=bill_confirm','_self')</script>";
                    }
                    include "views/bill/bill_pttt.php";
                }
                break;
            case 'pttt_ATM':     
                include "views/bill/pttt_ATM.php";
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
            case 'blog':
                include "views/blog.php";
                break;
            case 'intro':
                include "views/intro.php";
                break;
            case 'contact':
                include "views/contact.php";
                break;
            case 'list_address':
                include "views/bill/list_address.php";
                break;
            case 'mycart':
                $load_all_order = load_all_order($_SESSION['user']['id']);
                
                include "views/bill/mycart.php";
                break;
            case 'mycart_detail':
                include "views/bill/mycart_detail.php";
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
