<?php
    function insert_account($user_name,$user_password,$user_email,$user_tel,$rol){
        $sql = "insert into users(user_name, user_password, user_email,user_tel,role) values ('$user_name','$user_password','$user_email','$user_tel','$rol')";
        pdo_execute($sql);
    }
    function check_user($user_name, $user_password) {
        $sql = "select * from users where user_name = $user_name and user_password = $user_password";
        $check_user = pdo_query_one($sql);
        return $check_user;
    }
?>