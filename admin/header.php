<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/0f0775b010.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/admin/style.css">
    <script src="../js/admin.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    <script src="https://code.jquery.com/jquery-1.11.3.js"></script>

</head>

<body>
    <div class="container">
        <div class="sideArea">
            <!-- <div class="avatar">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCNOdyoIXDDBztO_GC8MFLmG_p6lZ2lTDh1ZnxSDawl1TZY_Zw"alt="">
                <div class="avatarName">Welcome,<br>ADMIN</div>
            </div> -->
            <div class="logo">
                <a href="?act=home"><img src="../images/logo/Logo-final.png" alt=""></a>
            </div>
            <ul class="sideMenu">
                <li><a href="?act=home">Dashboard</a></li>
                <li>
                    <a href="javascript:void(0)" class="has-submenu"><span class="fa fa-angle-down"></span>Quản lí sản phẩm</a>
                    <ul class="submenu">
                        <li><a href="?act=list_products"><i class="fa fa-list"></i>Danh sách sản phẩm</a></li>
                        <li><a href="?act=add_product"><span class="fa fa-tags"></span>Thêm mới</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)" class="has-submenu"><span class="fa fa-angle-down"></span>Quản lí danh mục</a>
                    <ul class="submenu">
                        <li><a href="?act=list_cate"><span class="fa fa-list"></span>Danh mục</a></li>
                        <li><a href="?act=add_categories"><span class="fa fa-tags"></span>Thêm mới</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)" class="has-submenu"><span class="fa fa-angle-down"></span>Quản lí khách hàng</a>
                    <ul class="submenu">
                        <li><a href="?act=list_users"><i class="fa fa-list"></i>Danh sách khách hàng</a></li>
                        <li><a href="?act=user_lock"><span class="fa fa-tags"></span>Khôi phục tài khoản</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)" class="has-submenu"><span class="fa fa-angle-down"></span>Quản lí đơn hàng</a>
                    <ul class="submenu">
                        <li><a href="?act=list_orders"><i class="fa fa-list"></i>Quản lí đơn hàng</a></li>
                        <li><a href="?act=order_status"><span class="fa fa-tags"></span>Trạng thái đơn hàng</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)" class="has-submenu"><span class="fa fa-angle-down"></span>Quản lí bình luận</a>
                    <ul class="submenu">
                        <li><a href="?act=list_comments"><i class="fa fa-list"></i>Danh sách bình luận</a></li>
                        <!-- <li><a href="?act=add_product"><span class="fa fa-tags"></span>Khôi phục tài khoản</a></li> -->
                    </ul>
                </li>
                
                <!-- <li>
                    <a href="javascript:void(0)" class="has-submenu"><span class="fa fa-angle-down"></span>Quản lí nhân viên</a>
                    <ul class="submenu">
                        <li><a href="?act=list_products"><i class="fa fa-list"></i>Danh sách nhân viên</a></li>
                        <li><a href="?act=add_product"><span class="fa fa-tags"></span>Thêm mới</a></li>
                    </ul>
                </li> -->

            </ul>
        </div>
        <div class="mainArea">
            <nav class="navTop row">
                <div class="menuIcon fl"><span class="fa fa-bars"></span></div>
                <div class="account fr">
                    <div class="name has-submenu">ADMIN<span class="fa fa-angle-down"></span></div>
                    <ul class="accountLinks submenu">
                        <li><a href="../index.php">View website</a></li>
                        <li><a href="">Đăng xuất<span class="fa fa-sign-out fr"></span></a></li>
                    </ul>
                </div>

            </nav>