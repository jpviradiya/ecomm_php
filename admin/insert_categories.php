<?php
  include('../partials/_dbconnect.php');
  if (isset($_POST['insert_cat'])) {
    $cat_title=$_POST['cat_title'];

    //checking for duplication
    $sql="SELECT * FROM `categories` WHERE category_title='$cat_title'";
    $result=mysqli_query($conn,$sql);
    $rowCount=mysqli_num_rows($result);
    if ($rowCount>0) {
      echo "<script>alert('This category is already exist.')</script>";
    }
    else {
      //insert into database
    $sql="INSERT INTO `categories` (`category_title`) VALUES ('$cat_title')";
    $result=mysqli_query($conn,$sql);
    if ($result) {
      echo "<script>alert('Category has been inserted successfully.')</script>";
    }
    }
  }
?>

<h2 class="text-center">Insert Category</h2>
<form action="" method="post" class="mb-2">
  <div class="input-group w-90 mb-2">
    <div class="input-group-prepend">
      <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
    </div>
    <input type="text" class="form-control" name="cat_title" placeholder="Insert categories">
  </div>

  <div class="input-group w-10 mb-2 m-aut">
    <input type="submit" value="Insert Categories" name="insert_cat" class="p-2 btn btn-outline-primary" style="width:200px">
  </div>
</form>