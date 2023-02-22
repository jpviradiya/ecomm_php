<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style.css">

  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>

  <title>Admin Area</title>
</head>

<body>
  <div class="container-fluid p-0">
    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-0">
      <div class="container-fluid">
        <img src="../img/logo.png" alt="error" style="height:2.5%;width:2.5%;">
        <nav class="navbar navbar-expand-lg">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="" class="nav-link">Welcome Guest <img src="../img/iphone11.jpg" alt="error" style="height:40px;width:40px;"></a>
            </li>
          </ul>
        </nav>
      </div>
    </nav>
    <!-- navbar ends -->

    <!-- info start -->
    <div class="bg-light">
      <h3 class="text-center p-2 m-0">Manager Details</h3>
    </div>
    <!-- info end -->

    <!-- All buttons start -->
    <div class="row">
      <div class="col-md-12 bg-info py-2 align-items-center">
        <div class="button text-center">
          <button class="mx-1"><a href="" class="nav-link text-light bg-primary">Insert Products</a></button>
          <button class="mx-1"><a href="" class="nav-link text-light bg-primary">View Products</a></button>
          <button class="mx-1"><a href="index.php?insert_categories" class="nav-link text-light bg-primary">Insert Categories</a></button>
          <button class="mx-1"><a href="" class="nav-link text-light bg-primary">View Categories</a></button>
          <button class="mx-1"><a href="index.php?insert_brands" class="nav-link text-light bg-primary">Insert Brand</a></button>
          <button class="mx-1"><a href="" class="nav-link text-light bg-primary">View Brand</a></button>
          <button class="mx-1"><a href="" class="nav-link text-light bg-primary">All Orders</a></button>
          <button class="mx-1"><a href="" class="nav-link text-light bg-primary">All Payments</a></button>
          <button class="mx-1"><a href="" class="nav-link text-light bg-primary">List Users</a></button>
          <button class="mx-1"><a href="" class="nav-link text-light bg-primary">Logout</a></button>
        </div>
      </div>
    </div>
    <!-- All buttons end -->

    <!-- button page display using get method start -->
    <div class="container my-5">
      <?php
        if (isset($_GET['insert_categories'])) {
          include('insert_categories.php');
        }
        if (isset($_GET['insert_brands'])) {
          include('insert_brands.php');
        }
      ?>
    </div>
    <!-- button page display using get method end -->
  </div>




  <!-- jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>