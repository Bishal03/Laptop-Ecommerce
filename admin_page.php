<?php

@include 'config.php';

if(isset($_POST['add_product'])){

   $product_name = $_POST['product_name'];
   $product_Category = $_POST['product_Category'];
   $product_description = $_POST['product_description'];
   $product_image = $_FILES['product_image']['name'];
   $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
   $product_image_folder = 'uploaded_img/'.$product_image;

   if(empty($product_name) || empty($product_Category) || empty($product_description) || empty($product_image)){
      $message[] = 'please fill out all';
   }else{
      $insert = "INSERT INTO products(name, Category, description, image) VALUES('$product_name', '$product_Category','$product_description', '$product_image')";
      $upload = mysqli_query($conn,$insert);
      if($upload){
         move_uploaded_file($product_image_tmp_name, $product_image_folder);
         $message[] = 'new product added successfully';
      }else{
         $message[] = 'could not add the product';
      }
   }

};

if(isset($_GET['delete'])){
   $id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM products WHERE id = $id");
   header('location:admin_page.php');
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
              <a style="font-size: xx-large; color: snow; " class="navbar-brand" href="index.html">Electronics product Delivery<b style="color: black;"> </b></a>

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

   <div class="admin-product-form-container">

      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
         <h3>add a new product</h3>
         <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Enter Name</label>
         <input type="text" placeholder="enter product name" name="product_name" class="form-control">
         </div>

         <div class="mb-3 ">
          <label for="exampleFormControlInput1" class="form-label">Enter Category</label>
          <input type="text" placeholder="enter product Category" name="product_Category" class="form-control">
         </div>

         <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Enter Description</label>
          <input type="text" placeholder="enter product description" name="product_description" class="form-control">
          </div>

          <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Upload Product Image</label>
          <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="form-control">
          </div>       
         <input type="submit" class="btn btn-primary" name="add_product" value="add product">
      </form>

   </div>

   <?php

   $select = mysqli_query($conn, "SELECT * FROM products");
   
   ?>
   <div class="product-display">
      <table class="product-display-table">
         <thead>
         <tr>
            <th>product name</th>
            <th>product Category</th>
            <th>product description</th>
            <th>product image</th>
            <th>action</th>
         </tr>
         </thead>
         <?php while($row = mysqli_fetch_assoc($select)){ ?>
         <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['Category']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td><img src="uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
            <td>
               <a href="admin_update.php?edit=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i> edit </a>
               <a href="admin_page.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a>
            </td>
         </tr>
      <?php } ?>
      </table>
   </div>

</div>
</body>
</html>