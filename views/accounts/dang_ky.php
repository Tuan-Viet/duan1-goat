<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/app.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <title>Document</title>
</head>

<body>
    <div id="wrapper">
        <form action="index.php?act=dang_ky" method="post" id="form-login">
            <h1 class="form-heading">Đăng Ký</h1>
            <div class="form-group">
                <i class="far fa-user"></i>
                <input type="text" class="form-input" placeholder="Tên tài khoản" name="user_name">
            </div>
            <small style="margin: 10px 15px 0; display: block; font-size: small;" class="text-danger"><?= isset($errors['user_name']) ? $errors['user_name'] : '' ?></small>
            <div class="form-group">
                <i class="far fa-user"></i>
                <input type="text" class="form-input" placeholder="Họ và tên" name="full_name">
            </div>
            <small style="margin: 10px 15px 0; display: block; font-size: small;" class="text-danger"><?= isset($errors['full_name']) ? $errors['full_name'] : '' ?></small>
            <div class="form-group">
                <i class="far fa-envelope"></i>
                <input type="email" class="form-input" placeholder="Email" name="user_email">
            </div>
            <small style="margin: 10px 15px 0; display: block; font-size: small;" class="text-danger"><?= isset($errors['user_email']) ? $errors['user_email'] : '' ?></small>
            <div class="form-group">
                <i class="fas fa-phone"></i>
                <input type="text" class="form-input" placeholder="Số điện thoại" name="user_tel">
            </div>
            <small style="margin: 10px 15px 0; display: block; font-size: small;" class="text-danger"><?= isset($errors['user_tel']) ? $errors['user_tel'] : '' ?></small>
            <div class="form-group">
                <i class="fas fa-key"></i>
                <input type="password" class="form-input" placeholder="Mật khẩu" name="user_password">
                <div id="eye">
                    <i class="far fa-eye"></i>
                </div>
            </div>
            <small style="margin: 10px 15px 0; display: block; font-size: small;" class="text-danger"><?= isset($errors['user_password']) ? $errors['user_password'] : '' ?></small>
            <input type="submit" value="Đăng ký" class="form-submit" name="btn_submit">
            <h1 class="or">OR</h1>
            <div class="dangky">
                <a href="./index.php?act=dang_nhap">Đăng Nhập</a>
            </div>
        </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.1.js"></script>
<script src="js/app.js"></script>
</html>