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
      //Danh sách sản phẩm
      case 'list_products':
        $hanghoa = products_all();
        $loaihang = loai_all();
        include_once "./products/list_products.php";
        break;
      //Chi tiết sản phẩm
      case 'product_detail':
        $id = $_GET['id'];
        $product_detail = products_detail_all();
        $hanghoa = product_one($id);
        include_once "./products/product_detail.php";
        break;
      //Thêm mới sản phẩm
      case 'add_product':
        if (isset($_POST['btn'])) {
          extract($_POST);
          $date = date('Y-m-d');
          $view = 0;
          //Hình upload
          $file = $_FILES['image'];
          //Lấy tên hình
          $image = $file['name'];
          //Upload hình
          move_uploaded_file($file['tmp_name'], '../images/products/' . $image);
          
          insert_product($product_name,$product_price,$sale,$image,$cate_id,$description,$date,$view);
          header("location: ?act=list_products");
          exit;
      } else {
          $loaihang = loai_all();
          include_once './products/add.php';
      }
        break;
      //Xóa sản phẩm
      case 'delete_product':
        $id = $_GET['id'];
        delete_product($id);
        header("location: ?act=list_products");
        exit;
        break;
      //Xóa nhiều sản phẩm
      case 'delete_all_products':
        if (isset($_POST['name'])) {
            $check = $_POST['name'];
            foreach ($check as $ma) {
                $id = $ma;
                delete_product($id);
            }
        }
        header("location: ?act=list_products");
        break;
      //Danh sách danh mục
      case 'list_cate':
        $loaihang = loai_all();
        include_once "./categories/list_cate.php";
        break;
      //Thêm mới danh mục
      case 'add_categories':
        if (isset($_POST['btn'])){
          extract($_POST);
         
          insert_categories($cate_name);
          header("location: ?act=list_cate");
          exit;
          // echo "<scrip>window.open('index.php?act=list_cate','_self')</scrip>";
        }else{
          include_once "./categories/add.php";
        }
        break;
      //Sửa danh mục
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
      //Xóa danh mục 
      case 'delete_categories':
        $id = $_GET['id'];
        delete_categories($id);
        header("location: ?act=list_cate");
        exit;
        break;
      //Xóa nhiều danh mục
      case 'delete_all_categoories':
        if (isset($_POST['name'])) {
            $check = $_POST['name'];
            foreach ($check as $ma) {
                $id = $ma;
                delete_categories($id);
            }
        }
        header("location: ?act=list_cate");
        break;
      //Danh sách bình luận
      case 'list_comments':
        $binhluan = comment_all();
        include_once './comments/list_comments.php';
        break;
      //Xóa bình luận 
      case 'delete_comment':
        $id = $_GET['id'];
        delete_comment($id);
        header("location: ?act=list_comments");
        exit;
        break;
      //Xóa nhiều bình luận
      case 'delete_all_comments':
        if (isset($_POST['name'])) {
            $check = $_POST['name'];
            foreach ($check as $ma) {
                $id = $ma;
                delete_comment($id);
            }
        }
        header("location: ?act=list_comments");
        break;
     

      
     
      





      default:
        include "home.php";
        break;  
    }
  }
  include "footer.php";
