<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css1/style.css">
    <title>Sign In</title>
    <script>
      var ck_email = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
      var ck_password = /^[A-Za-z0-9!@#$%^&*()_]{6,20}$/;
      function validate(form){
      var email = form.email.value;
      var password = form.password.value;
      var errors = [];
      if (!ck_email.test(email)) {
      errors[errors.length] = "You must enter a valid email address.";
      }
      if (!ck_password.test(password)) {
      errors[errors.length] = "You must enter a valid Password min 6 char.";
      }
      if (errors.length > 0) {
      reportErrors(errors);
      return false;
      }
      return true;
      }
      function reportErrors(errors){
      var msg = "Please Enter Valide Data...\n";
      for (var i = 0; i<errors.length; i++) {
      var numError = i + 1;
      msg += "\n" + numError + ". " + errors[i];
      }
      alert(msg);
      }
      </script>
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

                    <a href="#"><img id="cart" src="images/cart.svg" alt=""></a>

                    <a href="#"><img id="admin" src="images/person-circle.svg" alt="" srcset=""></a>
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
                    <li><a class="dropdown-item" href="professionalProduct.html">Professional</a></li>
                    <li><a class="dropdown-item" href="gamingProduct.html">Gamer</a></li>   
                    <li><a class="dropdown-item" href="creatorProduct.html">Creator</a></li>
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

<!-- Body Start -->
<div class="form-container">

   <form action="" method="post">
      <h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>don't have an account? <a href="register_form.php">register now</a></p>
   </form>

</div>
  <!-- Body End -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>