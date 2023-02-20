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
echo "<div class='col'><button class='btn btn-danger' id='btn-delete'>DELETE</button></div>";
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
<script>
    $(document).ready(function () {
        $("#btn-delete").click(()=>{
            $.ajax({
                url:"deleted.php",
                method:"POST",
                data:{"id":$("#id").val()},
                success:result=>{
                    //console.log(result);
                    if(result == "TRUE")
                    {
                        swal('deleted!','','success').then(function(IsConfrim)
                        {
                            if(IsConfrim)
                            {
                            window.location.href = "http://localhost/JEB/Admin/product/";
                            }
                        })
                    }
                    else
                     {
                        swal('in use','','error');
                    }
                }
            });
        })
    });
</script>
