
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            padding: 0px;
            margin: 0px;
            box-sizing: border-box;
        }

        ::-webkit-scrollbar {
            width: 0 !important;
            display: none;
        }

        body {
            background-color: #ffffff;
            overflow: hidden;
            overflow: auto;
            scrollbar-width: none;
            -ms-overflow-style: none;
        }
    </style>
</head>

<body>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
        Mã đơn :
        <select name="status">
            <option value="0">Đang xử lí</option>
            <option value="1">Đang chuẩn bị hàng</option>
            <option value="2">Đang giao</option>
            <option value="3">Hoàn thành</option>
        </select>
        <button type="submit" name="btn-update">Lưu</button>
    </form>
    <?php
         if (isset($_POST['btn-update'])) {
            extract($_POST);
            $id = $_GET['id'];
            update_categories($id, $cate_name);
            // echo "
            //     <script>window.open('?act=list_cate','_self')</script>
            //     ";
                header("location: " . $_SERVER['HTTP_REFERER']);
            
            exit;
          }
    ?>
</body>

</html>