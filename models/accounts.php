<?php
    function insert_account($user_name,$user_password,$user_email){
        $sql = "insert into users(user_name, user_password, user_email) values ($user_name,$user_password,$user_email)";
        pdo_execute($sql);
    }
?>