<?php

@include 'config.php';

$id = $_GET['edit'];

if(isset($_POST['update_product'])){

   $product_name = $_POST['product_name'];
   $product_Category = $_POST['product_Category'];
   $product_description = $_POST['product_description'];
   $product_image = $_FILES['product_image']['name'];
   $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
   $product_image_folder = 'uploaded_img/'.$product_image;

   if(empty($product_name) || empty($product_Category) || empty($product_description) || empty($product_image)){
      $message[] = 'please fill out all!';    
   }else{

      $update_data = "UPDATE products SET name='$product_name', Category='$product_Category', description='$product_description' , image='$product_image'  WHERE id = '$id'";
      $upload = mysqli_query($conn, $update_data);

      if($upload){
         move_uploaded_file($product_image_tmp_name, $product_image_folder);
         header('location:admin_page.php');
      }else{
         $$message[] = 'please fill out all!'; 
      }

   }
};

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Add Product</title>
    <script>
      var ck_name = /^[A-Za-z._-]{1,20}$/; var ck_category = /^[A-Za-z._-]{1,20}$/;
      var ck_desc = /^[A-Za-z0-9!@#$%^&*()_]{50,1000}$/; var ck_file = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
      
      function validate(form){
      var name = form.name.value;
      var category = form.category.value; var desc = form.desc.value;
      var file = form.file.value; var errors = [];
      if (!ck_name.test(name)) {
      errors[errors.length] = "Enter valid product name .";
      }
      
      if (!ck_category.test(category)) {
      errors[errors.length] = "You must enter a valid category.";
      }
      
      if (!ck_desc.test(desc)) {
      errors[errors.length] = "Write minimum 50 character description.";
      }
      
      if (!ck_file.test(file)) {
      errors[errors.length] = "Please choose a header photo.";
      }
      
      if (errors.length > 0) { reportErrors(errors); return false;
      }
      
      return true;
      }
      
      function reportErrors(errors){
       
      
      var msg = "Please Enter Valide Data...\n"; for (var i = 0; i<errors.length; i++) {
      var numError = i + 1;
      msg += "\n" + numError + ". " + errors[i];
      }
      alert(msg);
      }
      </script>
      

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
  <body>
    <!-- Navbar start -->
    <header>   
        <nav class="navbar navbar-light" style="background-color: orange;">
            <div class="container">
              <a style="font-size: xx-large; color: snow; " class="navbar-brand" href="index.html">Ayush<b style="color: black;"> S</b>tore</a>

                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Search</button>

                    <a href="#"><img id="cart" src="images/Cart.png" alt=""></a>

                    <a href="login.html"><img id="admin" src="images/Admin.png" alt="" srcset=""></a>
                </form>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-light bg-light navmenu">
          <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Product</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="category.html" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Category
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="category.html">All</a></li>
                    <li><a class="dropdown-item" href="#">Professional</a></li>
                    <li><a class="dropdown-item" href="#">Gamer</a></li>   
                    <li><a class="dropdown-item" href="#">Creator</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contact</a>
                </li>
                
              </ul>
              
            </div>
          </div>
        </nav>
    </header>

<!-- Navbar End -->
<?php
   if(isset($message)){
      foreach($message as $message){
         echo '<span class="message">'.$message.'</span>';
      }
   }
?>

<div class="container">
<div class="admin-product-form-container centered">
   <?php
      
      $select = mysqli_query($conn, "SELECT * FROM products WHERE id = '$id'");
      while($row = mysqli_fetch_assoc($select)){

   ?>
   
   <form action="" method="post" enctype="multipart/form-data">
      <h3 class="title">update the product</h3>
      <input type="text" class="box" name="product_name" value="<?php echo $row['name']; ?>" placeholder="enter the product name">
      <input type="text" min="0" class="box" name="product_Category" value="<?php echo $row['Category']; ?>" placeholder="enter the product Category">
      <input type="text" class="box" name="product_description" value="<?php echo $row['description']; ?>" placeholder="enter the product description">
      <input type="file" class="box" name="product_image"  accept="image/png, image/jpeg, image/jpg">
      <input type="submit" value="update product" name="update_product" class="btn">
      <a href="admin_page.php" class="btn">go back!</a>
   </form>
   <?php }; ?>
</div>
</div>
</body>
</html>