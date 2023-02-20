<?php 
include 'inc/header.php';
include('config/config.php');
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
                        <li class="breadcrumb-item ">Add</li>
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
                            <div class="col-lg-12 col-md-12  text-center">

<?php
if(isset($_POST['submit']))
{    

$product = $_POST['product'];
$desc = $_POST['desc'];
if(isset($_FILES['img']) && $_FILES['img']['error'] == 0) 
{
    $img = $_FILES['img'];
    $img_name = rand(1000, 9999) . basename($img['name']);
    $img_path = "productimgs/";
    move_uploaded_file($img['tmp_name'], $img_path . $img_name);
} 
else 
{
    $img_name = "";
}
$price = $_POST['price'];
$status = $_POST['status'];
$category = $_POST['category'];
$values = [
    'product_name' => $product,
    'product_description' => $desc,
    'product_img' => $img_name,
    'price' => $price,
    'product_status' => $status,
    'category_id' => $category
];
$result = $obj->add('product', $values);
if($result = TRUE)
{
    echo "<script>console.log('ADD!')</script>";
}
}
?>

<form method="post" enctype="multipart/form-data">
<label>Product</label>
<br>
<label for="img">
<img src="https://static.thenounproject.com/png/5191452-200.png" alt="IMG" id="output" width="100%" style="cursor: pointer;">
</label>
<input type="file" id="img" name="img" onchange="loadfile(event)" style="display: none;"> 
<input type="text" class="form-control text mb-2" placeholder="Ex: Product" name="product" required>
<input type="text" class="form-control text mb-2" placeholder="Ex: Description" name="desc" required>
<input type="number" class="form-control number mb-2" placeholder="Ex: price" name="price" required>
<input type="hidden" class="form-control text mb-2" placeholder="Ex: Product" name="status" required value="1">
<select name="category">
<?php
$result =  $obj->get('*', 'category');
foreach ($result as $row) { ?>
<option value="<?= $row['id'] ?>"><?= $row['category_name'] ?></option>
<?php }
?>
</select>
<input class="btn btn-success btn-lg w-100" type="submit" name="submit" value="Add">
</form>
                                <script>
                                function loadfile(event) 
                                {
                                var img = document.getElementById('output');
                                img.src = URL.createObjectURL(event.target.files[0]);
                                //console.log(img);
                                };
                                </script>
                                <!-- <input class="btn btn-success btn-lg w-100" type="submit" value="Add"> -->
                                <!-- <button  id="btn">Add Category</button> -->
                                <!-- <script>
                                $(document).ready(function() {
                                $("#form").on('submit', event => {
                                    event.preventDefault();
                                    var formData = new FormData("#form");
                                    console.log(formData);
                                    $.ajax({
                                    url: "store.php",
                                    method: 'POST',
                                    data: formData,
                                    processData: false,
                                    contentType: false,
                                    success: result => {
                                        console.log(formData);
                                    }
                                    });
                                });
                                });
                                </script> -->
                                <!-- <script>
                                    $(document).ready(function () {
                                        $('#form').on('submit', e => {
                                            e.preventDefault();

                                            $.ajax({
                                                type: 'POST',
                                                url: 'store.php',
                                                data: $('#form').serialize(),
                                                success: function () {
                                                    alert('form was submitted');
                                                }
                                            });
                                        });
                                    });
                                </script> -->
                            </div>
                        </div>
                        <!-- ===/BODY/=== -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'inc/footer.php' ?>