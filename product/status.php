<?php
include '../config/config.php';
$obj = new init();
$id = $_GET['id'];
$status = $_GET['status']; 
//FIRST_CONDITION--->
if($id != '' && $status == '0')
{
    $values = ['product_status'=>'1'];
    $result = $obj->update('product',$values,'product_id = '.$id);
    if($result = TRUE){ header('location:index.php'); }
}
//SECOND_CONDITION--->
elseif($id != '' && $status == '1')
{
    $values = ['product_status'=>'0'];
    $result = $obj->update('product',$values,'product_id = '.$id);
    if($result = TRUE){ header('location:index.php'); }
}
?>
