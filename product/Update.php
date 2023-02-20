<?php include 'inc/header.php'; include '../config/config.php';?>
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
<li class="breadcrumb-item ">Update by Search</li>
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
            <label>Update</label>
            <div class="input-group masked-input mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text">
            <i class="zmdi zmdi-hc-fw"></i>
            </span>
            </div>
            <input type="text" class="form-control text" placeholder="Ex: Product" id="product" required>
            </div>
            <button class="btn btn-success" id="btn">Search</button>
            <a href="index.php">Back To List?</a>
            <hr>
            <div id="data" class="text-center"></div>
            <script>
                $(document).ready(function () {
                $("#btn").click(()=>{
                    $.ajax({
                        url:"UpdateSearch.php",
                        method:"POST",
                        data:{"text":$("#product").val()},
                        success:result=>{
                            $("#data").html(result);
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
<?php include 'inc/footer.php' ?>