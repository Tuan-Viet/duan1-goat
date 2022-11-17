<?php
    include "models/PDO.php";
    include "models/products.php";
    include "models/products_detail.php";
    include "models/categories.php";
    include "models/comments.php";
    include "models/orders.php";
    include "models/accounts.php";
    include "views/header.php";
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
            case 'addtocart':
                // if (isset($_POST['btn_buynow']) && $_POST['btn_buynow']) {

                // }
                include "views/bill/bill_confirm.php";
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
