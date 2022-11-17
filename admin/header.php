<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/admin/style.css">
  <title>Home Admin</title>
</head>
<body>
    <div class="main">
      <!-- The sidebar -->
      <div class="sidebar">
        <img src="../images/logo/Logo.jpg" alt="" width="100%">
        <a class="active" href="./home_admin.php">Goat Shop</a>
        <button type="button" class="collapsible">Quản lí người dùng</button>
        <div class="content1">
            <a href="#">Danh sách người dùng</a>
        </div>
        <button type="button" class="collapsible">Quản lí nhân viên</button>
        <div class="content1">
            <a href="#">Danh sách nhân viên</a>
            <a href="#">Thêm mới</a>
        </div>
        <button type="button" class="collapsible">Quản lí sản phẩm</button>
        <div class="content1">
            <a href="?act=list_products">Danh sách sản phẩm</a>
            <a href="#">Thêm mới</a>
        </div>
        <button type="button" class="collapsible">Quản lí loại hàng</button>
        <div class="content1">
            <a href="?act=list_cate">Danh sách loại hàng</a>
            <a href="#">Thêm mới</a>
        </div>
        <button type="button" class="collapsible">Quản lí đơn hàng</button>
        <div class="content1">
            <a href="#">Danh sách đơn hàng</a>
        </div>
        <button type="button" class="collapsible">Quản lí bình luận</button>
        <div class="content1">
            <!-- <a href="#">Phản hồi</a>
            <a href="#">Xóa bình luận</a> -->
        </div>
      </div>
      <!-- Page content -->
      <div class="content">