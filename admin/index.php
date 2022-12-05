<?php
session_start();
include "../models/PDO.php";
include "../models/products.php";
include "../models/categories.php";
include "../models/comments.php";
include "../models/orders.php";
include "../models/accounts.php";
include "../models/products_detail.php";
include "header.php";
date_default_timezone_set('Asia/Ho_Chi_Minh');
// $_SESSION['prroducts_detail'] = array();

// controller
if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
  $act = $_GET['act'];
  switch ($act) {
      //Danh sách sản phẩm
    case 'list_products':
      $now = date('d-m-Y');
     
      
      if ((isset($_POST['keyword'])) && ($_POST['keyword'] != "")) {
        $keyword = $_POST['keyword'];
      } else {
        $keyword = "";
      }
      if ((isset($_POST['filter_cate'])) && ($_POST['filter_cate'] != "")) {
        $cate_id = $_POST['filter_cate'];
        $cate = "cate_id = $cate_id";
      } else {
        $cate = "";
      }
      if ((isset($_GET['sort'])) && ($_GET['sort'] != "")) {
        $sort = $_GET['sort'];
        $keyword = $_GET['keyword'];
        if ($sort == 1) {
          $condition_sort = "ORDER BY id DESC";
        } elseif ($sort == 2) {
          $condition_sort = "ORDER BY id ASC";
        } elseif ($sort == 3) {
          $condition_sort = "ORDER BY product_price ASC";
        } else {
          $condition_sort = "ORDER BY product_price DESC";
        }
      } else {
        $condition_sort = "ORDER BY id DESC";
      }

      $hanghoa = load_products($keyword,$cate, $condition_sort);
      
      $num_product = count($hanghoa);
      $loaihang = loai_all();
      include_once "./products/list_products.php";
      break;
      //Lọc sản phẩm
    case 'filter_products':
      if ((isset($_GET['btn-filter'])) && ($_GET['btn-filter'] != "")) {
        extract($_POST);
        $cate_id = $filter_cate;
        $hanghoa = product_filter($cate_id);
        $num_product = count($hanghoa);
        include_once "./products/list_products.php";
      } else {
        include_once "./products/list_products.php";
      }
      break;

      //Chi tiết sản phẩm
    case 'product_detail':
      $id = $_GET['id'];
      $product_detail = products_detail_all();
      $hanghoa = product_one($id);
      $hh_detail = products_detail_all();
      include_once "./products/product_detail.php";
      break;

      //Thêm mới sản phẩm
    case 'add_product':
      if (isset($_POST['btn'])) {
        extract($_POST);
        $date = date('d-m-Y');
        $view = 0;
        //Hình upload
        $file = $_FILES['image'];
        //Lấy tên hình
        $image = $file['name'];
        $errors = [];
        if (empty($product_name)) {
          $errors['product_name'] = "Vui lòng nhập tên sản phẩm";
        }
        if (empty($product_price)) {
          $errors['product_price'] = "Vui lòng nhập giá sản phẩm";
        } elseif (!is_numeric($product_price)) {
          $errors['product_price'] = "Vui lòng nhập số";
        }
        if ($cate_id == 0) {
          $errors['cate_id'] = "Chọn danh mục sản phẩm";
        }
        // if ($image == 0) {
        //   $errors['image'] = "Vui lòng nhập ảnh sản phẩm";
        // }
        if (empty($description)) {
          $errors['description'] = "Vui lòng nhập mô tả sản phẩm";
        }
        if (!$errors) {
          //Upload hình
          move_uploaded_file($file['tmp_name'], '../images/products/' . $image);
          $lastID = insert_product($product_name, $product_price, $sale, $image, $cate_id, $description, $date, $view);
          echo "
        <script>window.open('?act=add_product_detail&id=$lastID','_self')</script>
        ";
          exit;
        }
        $loaihang = loai_all();
        include_once './products/add.php';
      } else {
        $loaihang = loai_all();
        include_once './products/add.php';
      }
      break;

      //Thêm mẫu sản phẩm
    case 'add_product_detail':
      if (isset($_POST['btn'])) {
        extract($_POST);
        //Hình upload
        $file_detail = $_FILES['image_detail'];
        //Lấy tên hình
        $image_detail = $file_detail['name'];
        $errors = [];
        if (empty($product_color)) {
          $errors['product_color'] = "Vui lòng nhập";
        }
        if (empty($quantity_size_S)) {
          $errors['quantity_size_S'] = "Vui lòng nhập số lượng";
        } elseif (!is_numeric($quantity_size_S)) {
          $errors['quantity_size_S'] = "Vui lòng nhập số";
        }
        if (empty($quantity_size_M)) {
          $errors['quantity_size_M'] = "Vui lòng nhập số lượng";
        } elseif (!is_numeric($quantity_size_M)) {
          $errors['quantity_size_M'] = "Vui lòng nhập số";
        }
        if (empty($quantity_size_L)) {
          $errors['quantity_size_L'] = "Vui lòng nhập số lượng";
        } elseif (!is_numeric($quantity_size_L)) {
          $errors['quantity_size_L'] = "Vui lòng nhập số";
        }
        if (empty($quantity_size_XL)) {
          $errors['quantity_size_XL'] = "Vui lòng nhập số lượng";
        } elseif (!is_numeric($quantity_size_XL)) {
          $errors['quantity_size_XL'] = "Vui lòng nhập số";
        }

        if (!$errors) {
          //Upload hình
          move_uploaded_file($file_detail['tmp_name'], '../images/products/' . $image_detail);
          insert_product_detail($product_id, $product_color, $image_detail, $quantity_size_S, $quantity_size_M, $quantity_size_L, $quantity_size_XL);
          echo "
           <script>window.open('?act=add_product_detail&id=$product_id','_self')</script>
           ";
          exit;
        }
        $id = $_POST['product_id'];
        $hanghoa = product_one($id);
        $hh_detail = products_detail_all();
        include_once './products/add_pd_detail.php';
      } else {
        $id = $_GET['id'];
        $hanghoa = product_one($id);
        include_once './products/add_pd_detail.php';
      }
      break;
      //Edit sản phẩm
    case 'edit_product':
      if (isset($_POST['btn'])) {
        extract($_POST);
        $file = $_FILES['image'];
        if ($file['size'] > 0) {
          $image = $file['name'];
          move_uploaded_file($file['tmp_name'], '../images/products/' . $image);
        }
        edit_product($id, $product_name, $product_price, $sale, $image, $cate_id, $description);
        echo "
        <script>window.open('?act=list_products','_self')</script>
        ";
        exit;
      } else {
        $id = $_GET['id'];
        $hanghoa = product_one($id);
        $loaihang = loai_all();
        $product_detail = products_detail_all();
        include_once './products/edit.php';
      }
      break;
      //Edit mẫu sản phẩm
    case 'edit_product_detail':
      if (isset($_POST['btn'])) {
        extract($_POST);
        $file_detail = $_FILES['image_detail'];
        if ($file_detail['size'] > 0) {
          $image_detail = $file_detail['name'];
          move_uploaded_file($file_detail['tmp_name'], '../images/products/' . $image_detail);
        }
        edit_product_detail($id, $product_color, $image_detail, $quantity_size_S, $quantity_size_M, $quantity_size_L, $quantity_size_XL);
        echo "
        <script>window.open('?act=edit_product&id=" . $product_id . "','_self')</script>
        ";
        exit;
      } else {
        $product_detail_id = $_GET['id'];
        $product_detail = products_detail_one($product_detail_id);
        include_once './products/edit_pd_detil.php';
      }
      break;

      //Xóa sản phẩm
    case 'delete_product':
      $id = $_GET['id'];
      $product_id = $id;
      delete_product($id);
      delete_product_detail($product_id);
      echo ";
        <script>window.open('?act=list_products','_self')</script>
        ";
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
      echo "
        <script>window.open('?act=list_products','_self')</script>
        ";
      break;
      //Danh sách danh mục
    case 'list_cate':
      $loaihang = loai_all();
      include_once "./categories/list_cate.php";
      break;
      //Thêm mới danh mục
    case 'add_categories':
      if (isset($_POST['btn'])) {
        extract($_POST);
        $errors = [];
        if (empty($cate_name)) {
          $errors['cate_name'] = "Vui lòng nhập danh mục";
        }
        if (!$errors) {
          insert_categories($cate_name);
          echo "
        <script>window.open('?act=list_cate','_self')</script>
        ";
          exit;
        }
        include_once "./categories/add.php";
      } else {
        include_once "./categories/add.php";
      }
      break;
      //Sửa danh mục
    case 'edit_categories':
      if (isset($_POST['btn'])) {
        extract($_POST);
        update_categories($id, $cate_name);
        echo "
        <script>window.open('?act=list_cate','_self')</script>
        ";
        exit;
      } else {
        $id = $_GET['id'];
        $lh = loai_one($id);
        include_once "./categories/edit.php";
      }
      break;
      //Xóa danh mục 
    case 'delete_categories':
      $id = $_GET['id'];
      delete_categories($id);
      echo "
        <script>window.open('?act=list_cate','_self')</script>
        ";
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
      echo "
        <script>window.open('?act=list_cate','_self')</script>
        ";
      break;
      //Danh sách bình luận
    case 'list_comments':
      if ((isset($_POST['keyword'])) && ($_POST['keyword'] != "")) {
        $keyword = $_POST['keyword'];
      } else {
        $keyword = "";
      }
      if ((isset($_GET['sort'])) && ($_GET['sort'] != "")) {
        $sort = $_GET['sort'];
        $keyword = $_GET['keyword'];
        if ($sort == 1) {
          $condition_sort = "ORDER BY id DESC";
        } elseif ($sort == 2) {
          $condition_sort = "ORDER BY id ASC";
        }
      } else {
        $condition_sort = "ORDER BY id DESC";
      }
      $binhluan = load_comments($keyword,$condition_sort);
      $num_product = count($binhluan);
      include_once './comments/list_comments.php';
      break;
      //Xóa bình luận 
    case 'delete_comment':
      $id = $_GET['id'];
      delete_comment($id);
      echo "
          <script>window.open('?act=list_comments','_self')</script>
          ";
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
      echo "
          <script>window.open('?act=list_comments','_self')</script>
          ";
      break;
      //Lấy ra danh sách khách hàng
    case "list_users":
      if ((isset($_POST['keyword'])) && ($_POST['keyword'] != "")) {
        $keyword = $_POST['keyword'];
      } else {
        $keyword = "";
      }
      $users = load_user($keyword);
      $num_product = count($users);
      include_once './accounts/users/list_user.php';
      break;
      //Khóa tài khoản
    case "lock_user":
      $status = '1';
      $id = $_GET['id'];
      lock_user($id, $status);
      echo "
          <script>window.open('?act=list_users','_self')</script>
          ";
      break;
      //Lấy ra danh sách khách hàng bị khóa
    case "user_lock":
      $users = user_lock();
      include_once './accounts/users/user_lock.php';
      break;
      //Khôi phục tài khoản
    case "unlock_user":
      $status = '0';
      $id = $_GET['id'];
      lock_user($id, $status);
      echo "
          <script>window.open('?act=user_lock','_self')</script>
          ";
      break;
      //Xóa user
    case 'delete_user':
      $id = $_GET['id'];
      delete_user($id);
      echo "
            <script>window.open('?act=user_lock','_self')</script>
            ";
      exit;
      break;
      //Xóa nhiều user
    case 'delete_all_users':
      if (isset($_POST['name'])) {
        $check = $_POST['name'];
        foreach ($check as $ma) {
          $id = $ma;
          delete_user($id);
        }
      }
      echo "
          <script>window.open('?act=user_lock','_self')</script>
          ";
      break;
      //Chi tiết khách hàng
    case "user_detail":
      $id = $_GET['id'];
      $user_one = user_one($id);
      break;

      //Lấy ra danh sách đơn hàng
    case "list_orders":
      if ((isset($_POST['keyword'])) && ($_POST['keyword'] != "")) {
        $keyword = $_POST['keyword'];
      } else {
        $keyword = "";
      }
      if ((isset($_GET['sort'])) && ($_GET['sort'] != "")) {
        $sort = $_GET['sort'];
        $keyword = $_GET['keyword'];
        if ($sort == 1) {
          $condition_sort = "ORDER BY id DESC";
        } elseif ($sort == 2) {
          $condition_sort = "ORDER BY id ASC";
        }
      } else {
        $condition_sort = "ORDER BY id DESC";
      }
      $orders = load_orders($keyword,$condition_sort);
      $num_product = count($orders);
      include_once './orders/list_orders.php';

      break;
      //Xóa đơn hàng
    case 'delete_order':
      $id = $_GET['id'];
      delete_order($id);
      echo "
            <script>window.open('?act=list_orders','_self')</script>
            ";
      exit;
      break;
      //Xóa nhiều đơn hàng
      // case 'delete_all_orders':
      //   if (isset($_POST['name'])) {
      //     $check = $_POST['name'];
      //     foreach ($check as $ma) {
      //       $id = $ma;
      //       delete_order($id);
      //     }
      //   }
      //   echo "
      //       <script>window.open('?act=list_orders','_self')</script>
      //       ";
      //   break;













    default:
      include "home.php";
      break;
  }
}
include "footer.php";
