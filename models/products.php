<?php
    function show_product($product_id) {
        if ($product_id==0) {
            $sql = "select *, (100-sale)/100*product_price as total from products ORDER BY id DESC";
            $listhanghoa = pdo_query($sql);
        } else {
            $sql = "select *,(100-sale)/100*product_price as total from products where id = $product_id";
            $listhanghoa = pdo_query_one($sql);
        }
        return $listhanghoa;
    }
    //Lấy ra danh sách sản phẩm
    function products_all(){
        $sql="SELECT * FROM products ORDER BY id DESC";
        $hanghoa = pdo_query($sql);
        return $hanghoa;
    }
    //Lấy ra 1 sản phẩm
    function product_one($id){
        $sql="SELECT * FROM products WHERE id=$id";
        $hanghoa = pdo_query($sql);
        return $hanghoa;
    }
    function product_cate($product_id,$cate_id) {
        $sql = "select *,(100-sale)/100*product_price as total from products where cate_id = $cate_id and id <> $product_id";
        $product_cate = pdo_query($sql);
        return $product_cate;
    }
    function show_product_total() {
        $sql = "select *, (100-sale)/100*product_price as total from products ORDER BY total ASC";
        $listhanghoa = pdo_query($sql);
        return $listhanghoa;
    }
    function show_product_total_desc() {
        $sql = "select *, (100-sale)/100*product_price as total from products ORDER BY total desc";
        $listhanghoa = pdo_query($sql);
        return $listhanghoa;
    }


//Xóa sản phẩm
function delete_product($id){
    $sql = "DELETE FROM products WHERE id ='$id'";
    pdo_execute($sql);
}
//Thêm mới sản phẩm
function insert_product($product_name,$product_price,$sale,$image,$cate_id,$description,$date,$views){
    $sql = "INSERT INTO products (product_name,product_price,sale,image,cate_id,description,date,views) VALUES ('$product_name','$product_price','$sale','$image','$cate_id','$description','$date','$views')";
    // pdo_execute($sql);
    return pdo_execute_lastInsertId($sql);
}
//Edit sản phẩm
function edit_product($id,$product_name,$product_price,$sale,$image,$cate_id,$description){
    $sql = "UPDATE products SET product_name = '$product_name', product_price = '$product_price', sale = '$sale',image = '$image', cate_id = '$cate_id', description = '$description' WHERE id = $id ";
    pdo_execute($sql);
}
// show all 
function load_products($keyword,$cate,$condition_sort){
    $sql="SELECT * FROM products WHERE product_name  LIKE '%$keyword%' OR id LIKE '%$keyword%' ".$condition_sort." ";
    $hanghoa = pdo_query($sql);
    return $hanghoa;
}

//Lọc
function product_filter($cate_id){
    $sql = "SELECT * FROM products WHERE cate_id = $cate_id";
    $hanghoa = pdo_query($sql);
    return $hanghoa;
}
?>
