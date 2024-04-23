<!-- connenct file -->
<?php 
include('includes/connect.php');

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
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Index</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-arrow-down"></i><sup>1</sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total Price:100/-</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!-- Second Child -->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <ul class="navbar-nav me-auto">
  <li class="nav-item">
          <a class="nav-link" href="#">Welcome Guest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
  </ul>
</nav>

<!-- Third Child -->
<div class="bd-light">
  <h3 class="text-center">Products For Gaming Center</h3>
  <p class="text-center">Old Gen and New Gen games are the pride of our this Gaming Center</p>
</div>

<!-- Fourth Child -->
<div class="row">
  <div class="col-md-10">
    <!-- Products -->
    <div class="row">
      <div class="col-md-4 mb-2">
      <div class="card" >
  <img src="./images/FateStayNightUlimitedCodes.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-dark">Add to Cart</a>
    <a href="#" class="btn btn-secondary">Veiw More</a>
  </div>
</div>
      </div>

      <div class="col-md-4 mb-2">
      <div class="card" >
  <img src="./images/DragonBallSparkingZero.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-dark">Add to Cart</a>
    <a href="#" class="btn btn-secondary">Veiw More</a>
  </div>
</div>
      </div>

      <div class="col-md-4 mb-2">
      <div class="card" >
  <img src="./images/SonicXShadowGenerations.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-dark">Add to Cart</a>
    <a href="#" class="btn btn-secondary">Veiw More</a>
  </div>
</div>
      </div>

      <div class="col-md-4 mb-2">
      <div class="card" >
  <img src="./images/Ghost.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-dark">Add to Cart</a>
    <a href="#" class="btn btn-secondary">Veiw More</a>
  </div>
</div>
      </div>

      <div class="col-md-4 mb-2">
      <div class="card" >
  <img src="./images/UnderTale.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-dark">Add to Cart</a>
    <a href="#" class="btn btn-secondary">Veiw More</a>
  </div>
</div>
      </div>

      <div class="col-md-4 mb-2">
      <div class="card" >
  <img src="./images/DevilMayCry5.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-dark">Add to Cart</a>
    <a href="#" class="btn btn-secondary">Veiw More</a>
  </div>
</div>
      </div>

      

    </div>
  </div>
 
  <!-- Sidenav -->
  <div class="col-md-2 bg-secondary p-0">
    <!-- Brands To Displayed -->
    <ul class="navbar-nav me-auto text-center">
      <li class="nav-item bg-dark">
      <a href="#" class="nav-link text-muted"><h4>Brands</h4></a>
      </li>

      <?php 
      $select_brands="Select * from 'brands'";
      $result_brands=mysqli_query($con, $select_brands);
      //$row_data=mysqli_fetch_assoc($result_brands);
      //echo $row_data['brand_title'];
      while($row_data=mysqli_fetch_assoc($result_brands)){
        $brand_title=$row_data['brand_title'];
        $brand_id=$row_data['brand_id'];
        echo "<li class='nav-item'> <a href='index.php?brand=$brand_id' class='nav-link text-light'>$brand_title</a></li>";
      }
      
      ?>

    </ul>
    <!-- Categories to be displayed -->
    <ul class="navbar-nav me-auto text-center">
      <li class="nav-item bg-dark">
      <a href="#" class="nav-link text-muted"><h4>Categories</h4></a>
      </li>

      <?php 
      $select_categories="Select * from 'categories'";
      $result_categories=mysqli_query($con, $select_categories);
      //$row_data=mysqli_fetch_assoc($result_brands);
      //echo $row_data['brand_title'];
      while($row_data=mysqli_fetch_assoc($result_categories)){
        $category_title=$row_data['category_title'];
        $category_id=$row_data['category_id'];
        echo "<li class='nav-item'> <a href='index.php?brand=$category_id' class='nav-link text-light'>$category_title</a></li>";
      }
      
      ?>

    </ul>
    
  </div>
</div>


<!-- Last Child -->
<div class="bg-info p-3 text-center bg-dark text-muted">
  <p>&copy; 2024 OldNewGen Gaming Center</p>
</div>
   </div>




<!--Bootstrap js Link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>