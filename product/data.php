<?php
include 'config/config.php';
$obj = new init();
$result = $obj->get('*', 'product','','',"JOIN category ON product.category_id = category.id");
foreach ($result as $row) {
?>
    <tr>
        <td><?= $row['product_id'] ?></td>
        <td><?= $row['product_img'] ?></td>
        <td><?= $row['product_name'] ?></td>
        <td><?=$row['category_name'] ?></td>
        <td><?= $row['product_description'] ?></td>
        <td><?= $row['price'] ?></td>
        <td><?php
            if ($row['product_status'] == '1') { ?>
                <a href="status.php?id=<?php echo $row['product_id'] ?>&status=<?php echo $row['product_status'] ?> " class="btn btn-info">Click To Active</a>
            <?php } else { ?>
                <a href="status.php?id=<?php echo $row['product_id'] ?>&status=<?php echo $row['product_status'] ?> " class="btn btn-danger">Click To Unactive</a>
            <?php }
            ?>
        </td>
        <td>
            <input type='hidden' id='id' value="$row['product_id']">
            <button  id='btn-update' class="btn btn-info">UPDATE</button>
            <button class='btn btn-danger' id='btn-delete'>DELETE</button>
        </td>
    </tr>
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
        });
        // $("#btn-update").click(()=>{
        //     $.ajax({
        //         url:"UpdateProduct.php",
        //         method:"POST",
        //         data:{"id":$("#id").val()},
        //     });
        //});
    });
</script>
<?php
}
?>