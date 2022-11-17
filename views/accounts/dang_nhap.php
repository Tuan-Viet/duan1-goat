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
        <form action="form-login" id="form-login">
            <h1 class="form-heading">Đăng Nhập</h1>
            <div class="form-group">
                <i class="far fa-user"></i>
                <input type="text" class="form-input" placeholder="Tên đăng nhập">
            </div>
            <div class="form-group">
                <i class="fas fa-key"></i>
                <input type="password" class="form-input" placeholder="Mật khẩu">
                <div id="eye">
                    <i class="far fa-eye"></i>
                </div>
            </div>
            <div class="text">
                <input type="checkbox" value="" class="remember"><span>Remember me ?</span>
                <a href="./index.php?act=quen_mat_khau" class="quenmk">Quên mật khẩu ?</a>
            </div>
            <input type="submit" value="Đăng nhập" class="form-submit">
            <h1 class="or">OR</h1>
            <div class="dangky">
                <a href="./index.php?act=dang_ky">Đăng ký</a>
            </div>
        </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.1.js"></script>
<script src="js/app.js"></script>

</html>