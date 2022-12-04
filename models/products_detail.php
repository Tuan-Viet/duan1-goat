<?php
function show_products_details($product_id)
{
    $sql = "select * from products_detail where product_id = $product_id";
    $listproducts = pdo_query($sql);
    return $listproducts;
}
//Lấy ra danh sách mẫu sản phẩm
function products_detail_all()
{
    $sql = "SELECT * FROM products_detail ORDER BY id DESC";
    $product_detail = pdo_query($sql);
    return $product_detail;
}
//Lấy ra 1 mẫu sản phẩm
function products_detail_one($product_detail_id)
{
    $sql = "SELECT * FROM products_detail where id = $product_detail_id";
    $product_detail_one = pdo_query_one($sql);
    return $product_detail_one;
}
    function show_products_details($product_id){
        $sql = "select * from products_detail where product_id = $product_id";
        $listproducts = pdo_query($sql);
        return $listproducts;
    }
    //Lấy ra danh sách sản phẩm
    function products_detail_all(){
        $sql="SELECT * FROM products_detail ORDER BY id DESC";
        $product_detail = pdo_query($sql);
        return $product_detail;
    }
    function products_detail_one($product_detail_id){
        $sql="SELECT * FROM products_detail where id = $product_detail_id";
        $product_detail_one = pdo_query_one($sql);
        return $product_detail_one;
    }
    function update_quantity($size,$quantity_new,$product_detail_id) {
        if ($size == 'S') {
            $sql="update products_detail set quantity_size_S = '$quantity_new' where id=$product_detail_id ";
        } 
         if($size == 'M') {
            $sql="update products_detail set quantity_size_M = '$quantity_new' where id=$product_detail_id ";
        }
         if($size == 'L') {
            $sql="update products_detail set quantity_size_L = '$quantity_new' where id=$product_detail_id ";
        }
        if($size == 'XL') {
            $sql="update products_detail set quantity_size_XL = '$quantity_new' where id=$product_detail_id ";
        }
        pdo_execute($sql);
    }
?>

//Thêm mẫu sản phẩm
function insert_product_detail($product_id, $product_color, $image_detail, $quantity_size_S, $quantity_size_M, $quantity_size_L, $quantity_size_XL)
{
    $sql = "INSERT INTO products_detail (product_id,product_color,image_detail,quantity_size_S,quantity_size_M,quantity_size_L,quantity_size_XL) VALUES ('$product_id','$product_color','$image_detail','$quantity_size_S','$quantity_size_M','$quantity_size_L','$quantity_size_XL')";
    pdo_execute($sql);
}
//Xóa sản phẩm
function delete_product_detail($product_id)
{
    $sql = "DELETE FROM products_detail WHERE product_id ='$product_id'";
    pdo_execute($sql);
}
//Sửa sản phẩm mẫu
function edit_product_detail($id,$product_color, $image_detail, $quantity_size_S, $quantity_size_M, $quantity_size_L, $quantity_size_XL)
{
    $sql = "UPDATE products_detail SET product_color = '$product_color', image_detail = '$image_detail', quantity_size_S = '$quantity_size_S', quantity_size_M = '$quantity_size_M', quantity_size_L = '$quantity_size_L', quantity_size_XL = '$quantity_size_XL' WHERE id = $id ";
    pdo_execute($sql);
}
