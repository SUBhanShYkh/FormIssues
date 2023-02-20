<?php include 'inc/header.php'; include("config/config.php"); 

$id = $_POST['id'];
$obj = new init();
?>
<section class="content">
<div class="body_scroll">
<!-- ===BLOCK-HEADER=== -->
<div class="block-header">
<div class="row">
<div class="col-lg-7 col-md-6 col-sm-12">
<!-- ===BREADCRUMB=== -->
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="../index.php"><i class="zmdi zmdi-home"></i> Home</a></li>
<li class="breadcrumb-item ">Product</li>
<li class="breadcrumb-item ">Update</li>
</ul>
<!-- ===/BREADCRUMB/=== -->
<button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
</div>
</div>
</div>
<!-- ===/BLOCK-HEADER/=== -->
<div class="container-fluid">
<div class="row clearfix">
<div class="col-lg-12">
<div class="card">
<!-- ===BODY=== -->
<div class="body">
<div class="col-lg-12 col-md-12">
<form id="form" enctype="multipart/form-data">
    <?php
    $result = $obj->get('*','product',"product_id","$id");
    foreach($result as $row)
    {
    ?>
    <label>Product</label>
    <br>
    <label for="upload_img">
    <img src="productimgs/<?php echo $row['product_img'] ?>" alt="IMG" id="output" width="100%" style="cursor: pointer;">
    </label>
    <input type="file" name="img" id="upload_img" onchange="loadfile(event)" style="display: none;">
    <input type="text" class="form-control text mb-2" name="product" required value="<?=$row['product_name']?>">
    <input type="text" class="form-control text mb-2" name="desc" required value="<?=$row['product_description']?>">
    <input type="number" class="form-control text mb-2"name="price" required value="<?=$row['price']?>">
    <input type="hidden" class="form-control text mb-2"name="status"  value="1">
    <input type="hidden" class="form-control text mb-2" name="id" value="<?=$row['product_id']?>" >
    <select name="category" class="form-control text mb-2">
    <?php  $category = $obj->get('*','category');
    foreach($category as $cat)
    {
        ?>
        <option value="<?=$cat['id']?>"><?=$cat['category_name']?></option>
        <?php
    }
    }
    ?>    
    <input type="submit" value="Add Category" class="btn btn-success" name="btn">
    </form>
    <script>
        $(document).ready(function () {
            $("#form").on('submit',event=>{
                event.preventDefault();
                var form = $("#form");
                var formData = new FormData(form);
                $.ajax({
                    url: "update_store.php",
                    method : "POST",
                    data:formData,
                    success : result=>{
                        console.log(result);
                    }
                });
            });
        });
    </script>
</div>
</div>
<!-- ===/BODY/=== -->
</div>
</div>
</div>
</div>
</div>
</section>
<?php include 'inc/footer.php';
//     if(isset ( $_POST['btn'] ) )
//     {
//         $product = $_POST['product'];
//         $desc = $_POST['desc'];
//         //$img = $_POST['img'];
//         $img = rand(1000, 9999) . basename($_FILES['img']['name']);
//         $path = "productimgs/";
//         move_uploaded_file($_FILES['img']['tmp_name'], $path . $img);
//         $price = $_POST['price'];
//         $status = $_POST['status'];
//         $category = $_POST['category'];
//         $values = ['product_name'=>$product,'product_description'=>$desc,'product_img'=>$img,'price'=>$price,'product_status'=>$status,'category_id'=>$category];
//         $result = $obj->update('product',$values,'id = '.$id);
//         if($result = TRUE)
//         {
//             header('location:list.php');
//         }
//     }
// }
?>