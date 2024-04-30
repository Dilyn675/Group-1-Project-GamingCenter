<!-- connenct file -->
<?php 
include('includes/connect.php');
include('functions/common_function.php');
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OldNew Gen Gaming Center</title>
    <!--Bootstrap CSS Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS File -->
    <link rel="stylesheet" href="style.css">

    <style>
        body{
            overflow-x: hidden;
        }
        .banner-img {
            width: 100%;
            height: auto;
        }
    </style>


</head>
<body>
   <!-- navbar -->
   <div class="container-fluid p-0">
    <!-- first child -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <img src="./images/logo3.jpg" alt="" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Index</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="display_all.php">Product</a>
        </li>

        <?php 
        
        if(isset($_SESSION['username'])){
          echo "<li class='nav-item'>
          <a class='nav-link' href=./users_area/profile.php'>My Account</a>
          </li>";
        }else{
          echo "<li class='nav-item'>
          <a class='nav-link' href=./users_area/user_registration.php'>Register</a>
          </li>";
        }

        ?>

        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-arrow-down"></i><sup><?php cart_item();?></sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total Price: $<?php total_cart_price();?></a>
        </li>
      </ul>
      <form class="d-flex" action="search_product.php" method="get">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
        <input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product">


      </form>
    </div>
  </div>
</nav>



<!-- calling cart function-->
<?php 
cart();
?>

<!-- Second Child -->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <ul class="navbar-nav me-auto">
  
        <?php
        if(!isset($_SESSION['username'])){
          echo "<li class='nav-item'>
          <a class='nav-link' href='#'>Welcome Guest</a>
        </li>";
        }else{
          echo "<li class='nav-item'>
          <a class='nav-link' href='./users_area/profile.php'>Welcome ".$_SESSION['username']." </a>
          </li>";
        }


        if(!isset($_SESSION['username'])){
          echo "<li class='nav-item'>
          <a class='nav-link' href='./users_area/user_login.php'>Login</a></li>";
        }else{
          echo "<li class='nav-item'>
          <a class='nav-link' href='./users_area/logout.php'>Logout</a>
          </li>";
        }
        ?>
  </ul>
</nav>

<img src="https://i.ibb.co/hdC8ppv/Untitled-design-1.png" alt="Banner Image" class="banner-img">

<!-- Third Child -->
<div class="bd-light">
  <h3 class="text-center">Products For Gaming Center</h3>
  <p class="text-center">Old Gen and New Gen games are the pride of our this Gaming Center</p>
</div>

<!-- Fourth Child -->
<div class="row px-1">
  <div class="col-md-10">
    <!-- Products -->
    <div class="row">

    <!-- fetching products -->
    <?php 
    //calling function
    getproducts();
    get_unique_categories();
    get_unique_brands();
    // $ip = getIPAddress();  
    // echo 'User Real IP Address - '.$ip;
    ?>

      <!-- row end -->

    </div>
    <!-- col end -->
  </div>
 
  <!-- Sidenav -->
  <div class="col-md-2 bg-secondary p-0">
    <!-- Brands To Displayed -->
    <ul class="navbar-nav me-auto text-center">
      <li class="nav-item bg-dark">
      <a href="#" class="nav-link text-muted"><h4>Brands</h4></a>
      </li>

      <?php 
      //calling brands function
      getbrands();
      
      ?>

      
    </ul>
    <!-- Categories to be displayed -->
    <ul class="navbar-nav me-auto text-center">
      <li class="nav-item bg-dark">
      <a href="#" class="nav-link text-muted"><h4>Categories</h4></a>
      </li>

      <?php 
      getcategories();
      
      ?>

    </ul>
    
  </div>
</div>


<!-- Last Child -->
<!-- include footer -->
<?php include("./includes/footer.php") ?>
   </div>




<!--Bootstrap js Link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
