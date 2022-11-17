<?php
    include "models/PDO.php";
    include "models/products.php";
    include "models/categories.php";
    include "models/comments.php";
    include "models/orders.php";
    include "models/accounts.php";
    include "views/header.php";
    if((isset($_GET['act'])) && ($_GET['act']!="")) {
        $act = $_GET['act'];
        switch ($act) {
            case 'hang_hoa':
                include "views/hang_hoa.php";
                break;
            case 'hang_hoa_chi_tiet':
                include "views/hang_hoa_chi_tiet.php";
                break;
            case 'dang_nhap':
                include "views/accounts/dang_nhap.php";
                break;
            case 'dang_ky':
                include "views/accounts/dang_ky.php";
                break;
            case 'quen_mat_khau':
                include "views/accounts/quen_mat_khau.php";
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
