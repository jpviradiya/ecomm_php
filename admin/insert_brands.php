<?php
  include('../partials/_dbconnect.php');

  if (isset($_POST['insert_brand'])) {
    $brand_title=$_POST['brand_title'];

    //checking for duplication
    $sql="SELECT * FROM `brands` WHERE brand_title = '$brand_title'";
    $result=mysqli_query($conn,$sql);
    $rowCount=mysqli_num_rows($result);
    if ($rowCount>0) {
      echo "<script>alert('This brand is already exist.')</script>";
    }
    else {
      //insert into database
    $sql="INSERT INTO `brands` (`brand_title`) VALUES ('$brand_title')";
    $result=mysqli_query($conn,$sql);
    if ($result) {
      echo "<script>alert('Brand has been inserted successfully.')</script>";
    }
    }
  }
?>

<h2 class="text-center">Insert Brand</h2>
<form action="" method="post" class="mb-2">
  <div class="input-group w-90 mb-2">
    <div class="input-group-prepend">
      <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
    </div>
    <input type="text" class="form-control" name="brand_title" placeholder="Insert brands">
  </div>

  <div class="input-group w-10 mb-2 m-aut">
    <input type="submit" value="Insert Brands" name="insert_brand" class="p-2 btn btn-outline-primary" style="width:200px">
  </div>
</form>