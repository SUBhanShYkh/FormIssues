<?php 
include ('config/config.php');
$obj = new init();
    $id = $_POST['product_id'];
    $product = $_POST['product'];
    $desc = $_POST['desc'];
    $img = $_POST['img'];
    $img = rand(1000, 9999) . basename($_FILES['img']['name']);
    $path = "productimgs/";
    move_uploaded_file($_FILES['img']['tmp_name'], $path . $img);
    $price = $_POST['price'];
    $status = $_POST['status'];
    $category = $_POST['category'];
    $values = ['product_name'=>$product,'product_description'=>$desc,'product_img'=>$img,'price'=>$price,'product_status'=>$status,'category_id'=>$category];
    $result = $obj->update('product',$values,"`product_id` = '$id'");
    //$obj->add('product',$values);
    if($result = TRUE)
    {
        echo "ADDED";
    }
    else
    {
        echo "ERROR";
    }
// echo $_POST['img'];

?>