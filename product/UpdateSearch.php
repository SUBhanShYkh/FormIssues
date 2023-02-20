<?php
include('config/config.php');
$obj = new init();
 $text = $_POST['text'];
$result = $obj->get('*','product','','',"WHERE product_name LIKE '$text'");
if($result == true)
{
foreach($result as $row)
{
echo "<div class='row'>";
echo "<input type='hidden' id='id' value='".$row['product_id']."'>";
echo "<div class='col'>ID : ".$row['product_id']."</div>";
echo "<div class='col'>NAME : ".$row['product_name']."</div>";
echo "<div class='col'>PRICE : ".$row['price']."</div>";
echo "<div class='col'><button class='btn btn-info' id='btn-updae'>UPDATE</button></div>";
echo "</div>";
}
}
else
{
echo "<div class='row'>";
echo "<div class='col'>PRODUCT DOES'NT EXISTS!!</div>";
echo "</div>";
}
?>
