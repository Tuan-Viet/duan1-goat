<?php
    include "../models/PDO.php";
    include "../models/products.php";
    include "../models/categories.php";
    include "../models/comments.php";
    include "../models/orders.php";
    include "../models/accounts.php";
    include "../models/products_detail.php";
    include "header.php";
  // controller
  if((isset($_GET['act'])) && ($_GET['act']!="")) {
    $act = $_GET['act'];
    switch ($act) { 
      case 'list_products':
        $hanghoa = products_all();
        $loaihang = loai_all();
        include_once "./products/list_products.php";
        break;
      case 'product_detail':
        $id = $_GET['id'];
        $product_detail = products_detail_all();
        $hanghoa = product_one($id);
        include_once "./products/product_detail.php";
        break;
      case 'list_cate':
        $loaihang = loai_all();
        include_once "./categories/list_cate.php";
        break;
      case 'add_categories':
        if (isset($_POST['btn'])){
          extract($_POST);
          insert_categories($cate_name);
          header("location: ?act=list_cate");
          exit;
        }else{
          include_once "./categories/add.php";
          break;
        }
      case 'edit_categories':
        if (isset($_POST['btn'])){
          extract($_POST);
          update_categories($id,$cate_name);
          header("location: ?act=list_cate");
          exit;
        }else{
          $id = $_GET['id'];
          $lh = loai_one($id);
          include_once "./categories/edit.php";
        }
        break;
      case 'delete_categories':
        $id = $_GET['id'];
        delete_categories($id);
        header("location: ?act=list_cate");
        exit;
        break;





      default:
        include "home.php";
        break;  
    }
  }
  include "footer.php";
?>
