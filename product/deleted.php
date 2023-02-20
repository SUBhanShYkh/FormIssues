<?php
include('config/config.php');
$obj = new init();
$id = $_POST['id'];
$result =$obj->delete('product',"`product_id` = '$id'");
if($result = true)
{
    echo "TRUE";
}
else
{
    echo "FALSE";
}

?>