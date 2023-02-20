<?php include 'inc/header.php';?>
<section class="content">
<div class="body_scroll">
<!-- ===BLOCK-HEADER=== -->
<div class="block-header">
<div class="row">
<div class="col-lg-7 col-md-6 col-sm-12">

<!-- ===BREADCRUMB=== -->
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="../index.php"><i class="zmdi zmdi-home"></i> Home</a></li>
<li class="breadcrumb-item ">product</li>
<li class="breadcrumb-item ">List</li>
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
    <table class="table table-borderd">
        <thead>
            <th>#</th>
            <th>Img</th>
            <th>Name</th>
            <th>Category</th>
            <th>Description</th>
            <th>Price</th>
            <th>Status</th>
            <th>Action</th>
        </thead>
        <tbody id="data"></tbody>
        <script>
            $(document).ready(function () {
                setInterval(
                    $.ajax({
                    url : "data.php",
                    success : result => {
                        $('#data').html(result);
                    },
                    error : Error => {
                        console.log(Error);
                    }
                }),1000)
            });
        </script>
    </table>

    </div>
    <!-- ===/BODY/=== -->

</div>
</div>
</div>
</div>
</div>
</section>
<?php include 'inc/footer.php' ?>