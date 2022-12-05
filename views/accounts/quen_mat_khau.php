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
        <form action="index.php?act=quen_mat_khau" method="post" id="form-login">
            <h1 class="form-heading">Tìm tài khoản của bạn</h1>
            <div class="form-group">
                <i class="far fa-user"></i>
                <input type="text" name="email" class="form-input" placeholder="Email của bạn">
            </div>
            <small style="margin: 10px 15px 0; display: block; font-size: small;" class="text-danger"><?= isset($errors['thong_bao']) ? $errors['thong_bao'] : '' ?></small>
            <input type="submit" name="forget_password" value="Tìm kiếm" class="form-submit">
        </form>
    </div>
</body>
</html>