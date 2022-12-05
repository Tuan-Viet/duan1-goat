<head>
    <!--Required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>My Page Title</title>
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="./fonts/Montserrat-VariableFont_wght.ttf">
    <link rel="stylesheet" href="./css/contact.css">
    <link rel="stylesheet" href="./css/pro_detail.css">
    <link rel="stylesheet" href="./css/comments.css">
    <link rel="stylesheet" href="./css/cart.css">
    <link rel="stylesheet" href="./css/bill_confirm.css">
    <link rel="stylesheet" href="./css/bill_pttt.css">
    <link rel="stylesheet" href="./css/pttt_ATM.css">
    <link rel="stylesheet" href="./css/bill_access.css">
    <link rel="stylesheet" href="./css/mycart.css">
    <link rel="stylesheet" href="./css/mycart_detail.css">
    <link rel="stylesheet" href="./css/mybill.css">
    <link rel="stylesheet" href="./css/intro.css">
    <link rel="stylesheet" href="./css/blog.css">
    <link rel="stylesheet" href="./css/product.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/reponsive/rp_header.css">
</head>
<body class="main">
        <header>
            <div class="sub_header">
                <div class="wrapper box_sub-header">
                    <div class="sub_header-left fz14">
                        <div class="header_left-email pw5">quyenncph25762@fpt.edu.vn</div>
                        <div class="header_left-tel pw5">Hotline: 0967-584-597</div>
                    </div>
                    <div class="sub_header-center fz14">
                        <a href="" class="title_header-center">GOAT.VN</a>
                    </div>
                    <div class="sub_header-right">
                        <form action="index.php?act=hang_hoa" method="post">
                            <input type="text" name="keyword" class="form_control-header" placeholder="Tìm kiếm sản phẩm ..." required>
                            <button type="submit" name="btn_search">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon_search-header" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352c79.5 0 144-64.5 144-144s-64.5-144-144-144S64 128.5 64 208s64.5 144 144 144z"/></svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="header_menu">
                <div class="section_header-menu wrapper">
                    <div class="logo_header">
                        <a href="?act=home"><img src="./images/logo/z3873649224107_9da7327af01da45a4a2f921f0e652d14-removebg-preview.png" alt="" class="logo_header"></a>
                    </div>
                    <ul class="menu">
                        <li><a href="./index.php">Trang chủ</a></li>
                        <li><a href="index.php?act=hang_hoa">Sản phẩm</a></li>
                        <li><a href="index.php?act=blog">Blog</a></li>
                        <li><a href="index.php?act=intro">Giới thiệu</a></li>
                        <li><a href="index.php?act=contact">Liên hệ</a></li>
                    </ul>
                    <div class="header_right">
                        <div class="user">
                            <?php if (isset($_SESSION['user'])){ ?>
                                <a href="index.php?act=mycart" class="icon_user">        
                                    <ion-icon name="people-outline" class="icon_user-header"></ion-icon>
                                    <p>Hi! <span>Nguyễn Công Quyền</span></p>
                                </a>
                                <a href="" class="cart_icon">                  
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon_cart-header" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M24 0C10.7 0 0 10.7 0 24S10.7 48 24 48H76.1l60.3 316.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24-10.7 24-24s-10.7-24-24-24H179.9l-9.1-48h317c14.3 0 26.9-9.5 30.8-23.3l54-192C578.3 52.3 563 32 541.8 32H122l-2.4-12.5C117.4 8.2 107.5 0 96 0H24zM176 512c26.5 0 48-21.5 48-48s-21.5-48-48-48s-48 21.5-48 48s21.5 48 48 48zm336-48c0-26.5-21.5-48-48-48s-48 21.5-48 48s21.5 48 48 48s48-21.5 48-48z"/></svg>
                                </a>
                            <?php } else { ?>
                                <a href="index.php?act=dang_nhap" class="icon_user">        
                                    <ion-icon name="people-outline" class="icon_user-header"></ion-icon>
                                    <span>Đăng nhập</span>
                                </a>
                                <a href="" class="cart_icon">                  
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon_cart-header" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M24 0C10.7 0 0 10.7 0 24S10.7 48 24 48H76.1l60.3 316.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24-10.7 24-24s-10.7-24-24-24H179.9l-9.1-48h317c14.3 0 26.9-9.5 30.8-23.3l54-192C578.3 52.3 563 32 541.8 32H122l-2.4-12.5C117.4 8.2 107.5 0 96 0H24zM176 512c26.5 0 48-21.5 48-48s-21.5-48-48-48s-48 21.5-48 48s21.5 48 48 48zm336-48c0-26.5-21.5-48-48-48s-48 21.5-48 48s21.5 48 48 48s48-21.5 48-48z"/></svg>
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                
                </div>
            </div>
        </header>
        <div class="overlay_addtocart">
            <div class="nav_addtocart">
                <div class="view_overlay-cart">
                <div class="title_addtocart">
                    <p>Giỏ hàng</p>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon_close-cart ionicon" viewBox="0 0 512 512"><title>Close</title><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M368 368L144 144M368 144L144 368"/></svg>
                </div>
                <?php if(isset($_SESSION['my_cart'])): ?>
                    <?php foreach($_SESSION['my_cart'] as $cart): ?>
                    <table id="view_cart" class="mt50">
                        <tbody>
                            <tr class="item_id-pro">
                                <td class="photo_pro-view">
                                    <a href="">
                                        <img src="./images/products/<?= $cart[4] ?>" alt="" class="img_pro-view">
                                        <span class="pro_quantity-cart clear_fix-quantity"><span class="pro_quantity-view"><?= $cart[7] ?></span></span>
                                    </a>
                                </td>
                                <td class="info_pro-view">
                                    <a href="" class="pro_title-view"><?= $cart[1] ?></a>
                                    <span class="pro_cate-view"><?= $cart[5] ?> / <?= $cart[6] ?></span>
                                    <span class="pro_price-view"><?= $cart[2] ?> <sup>đ</sup></span></div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon_close-viewcart ionicon" viewBox="0 0 512 512"><title>Close</title><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M368 368L144 144M368 144L144 368"/></svg>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <?php endforeach ?>
                <?php endif ?>
                <hr class="inline"></hr>
                <div class="total_cart mt28">
                    <p>Tổng tiền</p>
                    <p class="total_price"><?= $thanh_tien = tongtien() ?><sup>đ</sup></p>
                </div>
                <div class="btn_cart mt28">
                    <a href="index.php?act=cart" class="link_to-cart">Xem giỏ hàng</a>
                    <a href="index.php?act=bill_confirm" class="link_to-checkout">Thanh Toán</a>
                </div>
                </div>
                
            </div> 
        </div>