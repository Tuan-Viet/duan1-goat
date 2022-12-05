<?php
    function insert_account($user_name,$full_name,$user_password,$user_email,$user_tel,$rol){
        $sql = "insert into users(user_name,full_name, user_password, user_email,user_tel,role) values ('$user_name','$full_name','$user_password','$user_email','$user_tel','$rol')";
        pdo_execute($sql);
    }
    function check_user($user_name, $user_password) {
        $sql = "select * from users where user_name = '$user_name' and user_password = '$user_password'";
        $check_user = pdo_query_one($sql);
        return $check_user;
    }
    function check_username($user_name) {
        $sql = "select * from users where user_name = '$user_name'";
        $check_username = pdo_query_one($sql);
        return $check_username;
    }
    function check_useremail($user_email) {
        $sql = "select * from users where user_email = '$user_email'";
        $check_useremail = pdo_query_one($sql);
        return $check_useremail;
    }
    function check_usertel($user_tel) {
        $sql = "select * from users where user_tel = '$user_tel'";
        $check_usertel = pdo_query_one($sql);
        return $check_usertel;
    }
    // function header_dangnhap() {
    //     echo '
    //         <a href="" class="icon_user">        
    //             <ion-icon name="people-outline" class="icon_user-header"></ion-icon>
    //             <p>Hi! <span>Nguyễn Công Quyền</span></p>
    //         </a>
    //         <a href="" class="cart_icon">                  
    //         <svg xmlns="http://www.w3.org/2000/svg" class="icon_cart-header" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M24 0C10.7 0 0 10.7 0 24S10.7 48 24 48H76.1l60.3 316.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24-10.7 24-24s-10.7-24-24-24H179.9l-9.1-48h317c14.3 0 26.9-9.5 30.8-23.3l54-192C578.3 52.3 563 32 541.8 32H122l-2.4-12.5C117.4 8.2 107.5 0 96 0H24zM176 512c26.5 0 48-21.5 48-48s-21.5-48-48-48s-48 21.5-48 48s21.5 48 48 48zm336-48c0-26.5-21.5-48-48-48s-48 21.5-48 48s21.5 48 48 48s48-21.5 48-48z"/></svg>
    //         </a>
    //         <a href="index.php?act=dang_xuat">Đăng xuất</a>
    //     ';
    // }
    // function header_chuadangnhap() {
    //     echo '
    //         <a href="index.php?act=dang_nhap" class="icon_user">        
    //             <ion-icon name="people-outline" class="icon_user-header"></ion-icon>
    //             <span>Đăng nhập</span>
    //         </a>
    //         <a href="" class="cart_icon">                  
    //         <svg xmlns="http://www.w3.org/2000/svg" class="icon_cart-header" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M24 0C10.7 0 0 10.7 0 24S10.7 48 24 48H76.1l60.3 316.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24-10.7 24-24s-10.7-24-24-24H179.9l-9.1-48h317c14.3 0 26.9-9.5 30.8-23.3l54-192C578.3 52.3 563 32 541.8 32H122l-2.4-12.5C117.4 8.2 107.5 0 96 0H24zM176 512c26.5 0 48-21.5 48-48s-21.5-48-48-48s-48 21.5-48 48s21.5 48 48 48zm336-48c0-26.5-21.5-48-48-48s-48 21.5-48 48s21.5 48 48 48s48-21.5 48-48z"/></svg>
    //         </a>																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																											
    //     ';
    // }
    function show_user() {
        $sql ="select * from users";
        $list_user = pdo_query($sql);
        return $list_user;
    }

    //Lấy ra danh sách khách hàng
    function user_all(){
        $sql="SELECT * FROM users WHERE status = 0 ORDER BY id DESC";
        $users = pdo_query($sql);
        return $users;
    }
    //lock user
    function lock_user($id,$status){
        $sql = "UPDATE users SET status = '$status' WHERE id =$id";
        pdo_execute($sql);
    }
    //Unlock user
    function user_lock(){
        $sql="SELECT * FROM users WHERE status = 1 ORDER BY id DESC";
        $users = pdo_query($sql);
        return $users;
    }
    //Xóa user
    function delete_user($id){
        $sql = "DELETE FROM users WHERE id ='$id'";
        pdo_execute($sql);
    }
    //Lấy ra 1 khách hàng theo id
    function user_one($id){
        $sql="SELECT * FROM users WHERE id='$id'";
        $users = pdo_query($sql);
        return $users;
    }
    function forget_password($email) {
        $sql = " select * from users where user_email like '%$email%'";
        $check_user = pdo_query_one($sql);
        return $check_user;
    }
    function update_user($id,$full_name,$user_email,$user_tel,$address) {
        $sql="update users set full_name='$full_name',user_email='$user_email',user_tel='$user_tel',address='$address' where id=$id";
        pdo_execute($sql);
    }
    //Load user
    function load_user($keyword){
        $sql="SELECT * FROM users WHERE id LIKE '%$keyword%' OR full_name LIKE '%$keyword%' OR address LIKE '%$keyword%'";
        $user = pdo_query($sql);
        return $user;
    }
?>