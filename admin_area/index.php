<!-- connenct file -->
<?php 
include('../includes/connect.php');
include('../functions/common_function.php');
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <!-- Font Awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- CSS File -->
    <link rel="stylesheet" href="../style.css">

    <!-- Styles -->
    <style>
.admin_image{
    width: 195px;
    object-fit: contain;
}
.footer{
    position: absolute;
    bottom: 0;
}
.product_img{
    width:20%;
    object-fit: contain;
}
    </style>

</head>
<body>
    <!-- Navbar -->
 <div class="container-fluid p-0">
    <!-- First Child -->
    <nav class="narbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <img src="../images/logo3.jpg" alt="" class="logo">
            <nav class="narbar navbar-expand-lg">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="" class="nav-link ">Welcome guest</a>
                    </li>
                </ul>

            </nav>
        </div>
    </nav>

    <!-- Second Child -->
    <div class="bg-light">
        <h3 class="text-center p-2">Manage Details</h3>
    </div>

    <!-- Third Child -->
    <div class="row">
        <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
            <div class="px-5">
                <a href="#"><img src="../images/Rogue shadow.jpg" alt="" class="admin_image"></a>
                <p class="text-light text-center">Admin Name</p>
            </div>

            <!-- button*10>a.nav-link.text-light.bg-dark.my-1 -->
            <div class="button text-center">
                <Button class="my-3"><a href="insert_product.php" class="nav-link text-light bg-dark my-1">Insert Products</a></Button>
                <Button><a href="index.php?view_products" class="nav-link text-light bg-dark my-1">View Products</a></Button>
                <Button><a href="index.php?insert_category" class="nav-link text-light bg-dark my-1">Insert Categories</a></Button>
                <Button><a href="" class="nav-link text-light bg-dark my-1">View Categories</a></Button>
                <Button><a href="index.php?insert_brand" class="nav-link text-light bg-dark my-1">Insert Brands</a></Button>
                <Button><a href="" class="nav-link text-light bg-dark my-1">View Brands</a></Button>
                <Button><a href="" class="nav-link text-light bg-dark my-1">All Orders</a></Button>
                <Button><a href="" class="nav-link text-light bg-dark my-1">All Payments</a></Button>
                <Button><a href="" class="nav-link text-light bg-dark my-1">List Users</a></Button>
                <Button><a href="" class="nav-link text-light bg-dark my-1">Logout</a></Button>
            </div>

        </div>
    </div>


    <!-- Fourth Child -->
    <div class="container my-3">
        <?php 
        if(isset($_GET['insert_category'])){
            include('insert_categories.php');
        }
        if(isset($_GET['insert_brand'])){
            include('insert_brands.php');
        }
        if(isset($_GET['view_products'])){
            include('view_products.php');
        }
        if(isset($_GET['edit_products'])){
            include('edit_products.php');
        }
        ?>

    </div>

    <!-- Last Child -->
<div>
<?php include("../includes/footer.php") ?>
</div>

 </div>


<!-- Bootstrap JS Link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
