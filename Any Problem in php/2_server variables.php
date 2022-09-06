<?php
   //$_SERVER variable use
   echo "<pre>";
//    print_r($_SERVER);
    
   echo "<pre>";
   
   if (isset($_POST['save'])) {
    echo $_POST['name'];
    echo $_POST['age'];
   }
?>

<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Server variables</title>
  </head>
  <body>
    <div class="container mt-3">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="name" name="name" class="form-control" id="name">
            </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="age" class="form-control" id="age" name="age">
            </div>
            
            <button type="submit" class="btn btn-primary" name="save">Submit</button>
        </form>
    </div>
  </body>
</html>

