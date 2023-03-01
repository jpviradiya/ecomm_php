<?php
  include('partials/_dbconnect.php');
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link rel="stylesheet" href="project/css/style.css">

  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>

  <title>E-commerce</title>
</head>

<body>
  <!-- navbar start -->
  <div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <img src="./img/logo.png" alt="error" style="height:2.5%;width:2.5%;">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"> <i class='fa fa-shopping-cart white-color'></i><sup>1</sup></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Total Prize:10000\-</a>
          </li>

        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
  </div>
  <!-- navbar ends -->

  <!-- user confirmation start -->
  <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
    <strong>Welcome Guest!</strong> Login
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <!-- user confirmation end -->

  <!-- intro start -->
  <div class="bg-white p-0 mb-0">
    <h3 class="text-center">Grand Mobile Store</h3>
    <p class="text-center mb-0">Here you can find your dream phone.</p>
  </div>
  <!-- intro end -->

  <!-- brand display start -->
  <div class="container-fluid">
    <div class="row">

    </div>
  </div>
  <!-- brand display end -->

  <div class="container-fluid">
    <div class="row">
      <!-- product display start -->
      <div class="col-md-10 p-0">
        <div class="row justify-content-between ml-5 mr-5 py-3">
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="./img/iphone14promax.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Add to cart</a>
                <a href="#" class="btn btn-secondary">Buy Now</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="./img/iphone14promax.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Add to cart</a>
                <a href="#" class="btn btn-secondary">Buy Now</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="./img/iphone14promax.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Add to cart</a>
                <a href="#" class="btn btn-secondary">Buy Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- product display end -->
      <!-- sidebar start -->
      <div class="col-md-2 bg-secondary p-0">
        <ul class="navbar-nav me-auto text-center">
          <li class="nav-item bg-primary">
            <a href="#" class="nav-link text-light"><h4>Brands</h4></a>
          </li>
          <?php
            $sql="SELECT * FROM `brands`";
            $result=mysqli_query($conn,$sql);
            while ($row=mysqli_fetch_assoc($result)) {
              $brand_id=$row['brand_id'];
              $brand_title=$row['brand_title'];
              echo "<li class='nav-item'>
            <a href='index.php?brand=$brand_id' class='nav-link text-light'>".$brand_title."</a>
            </li>";
            }
          ?>  
        </ul>
        <ul class="navbar-nav me-auto text-center">
          <li class="nav-item bg-primary">
            <a href="#" class="nav-link text-light"><h4>categories</h4></a>
          </li>
          <?php
            $sql="SELECT * FROM `categories`";
            $result=mysqli_query($conn,$sql);
            while ($row=mysqli_fetch_assoc($result)) {
              $category_id=$row['category_id'];
              $category_title=$row['category_title'];
              echo "<li class='nav-item'>
            <a href='index.php?brand=$category_id' class='nav-link text-light'>".$category_title."</a>
            </li>";
            }
          ?>
        </ul>
      </div>
      <!-- sidebar end -->
    </div>
  </div>

  <!-- jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>