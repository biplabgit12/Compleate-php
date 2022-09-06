<?php
  $showAlert = false;
  $showError = false;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      include "partials/_dbConnect.php";
      $username = $_POST["username"];
      $password = $_POST["password"];
      $Cpassword = $_POST["Cpassword"];
      
       //Check wheather this username exists
        $existsSql = "SELECT * FROM `user` WHERE name = '$username'";
        $result = mysqli_query($con,$existsSql);
         $numExistsRows = mysqli_num_rows($result); 
        if ($numExistsRows > 0) {
              $showError = "User already exists";
          } 
          else {
                
              if ($password ==$Cpassword){
                $hash = password_hash($password,PASSWORD_DEFAULT);
                $sql = "INSERT INTO `user` (`name`, `password`, `date`) VALUES ( '$username', '$hash', current_timestamp())";
                $result = mysqli_query($con,$sql);

                if ($result){
                  $showAlert = true;
                }          
            } 
            else {
              $showError = "Password do not match";
            }
        } 
    } 
    

?>

<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <?php require "partials/_nav.php"?>   
  
    <?php
      if ($showAlert) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success</strong> Your account is now created and you can login
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
      }
    ?>
    
    <?php
      if ($showError) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> ' .$showError.
        '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
      }
    ?>
    

    <div class="container my-4">
          <h2 class="text-center">Signup to our website</h2>
            <form class="my-4" action="/loginsystem/signup.php" method="post">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username">                    
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="mb-3">
                    <label for="Cpassword" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="Cpassword" name="Cpassword">
                    <div id="passText" class="form-text">Make sure to type the same password.</div>
                </div>  
                <button type="submit" class="btn btn-primary">Signup</button>
        </form>
     </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
  </body>
</html>