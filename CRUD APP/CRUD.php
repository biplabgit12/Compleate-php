 <?php
    // Connecting to the Database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "notes";
   
    $insert = false;
    $Update = false;
    $Delete = false;
    // Create a connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Die if connection was not successful
    if (!$conn){
        die("Sorry we failed to connect: ". mysqli_connect_error());
    }

  
    if(isset($_GET['delete'])){
        $sno = $_GET['delete'];
        // echo $sno;
        $Delete = true;
        $sql = "DELETE FROM `notestable` WHERE `sno` = $sno";
        $result = mysqli_query($conn, $sql); 
      }


   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset( $_POST['snoEdit'])){
          $snoEdit = $_POST["snoEdit"];
          $titleEdit = $_POST["titleEdit"];
          $descriptionEdit = $_POST["descriptionEdit"];

          $sql = "UPDATE `notestable` SET `title` = ' $titleEdit',`description` = ' $descriptionEdit' WHERE `notestable`.`sno` = $snoEdit;";
          $result = mysqli_query($conn, $sql);

          if($result){
            $Update = true;            
          }
          else{
            echo "The note was not inserted successfully because of this error";
          }
    }

    else {
      $title = $_POST["title"];
      $description = $_POST["description"];
      $sql = "INSERT INTO `notestable` (`title`, `description`) VALUES ('$title', '$description')";
      $result = mysqli_query($conn, $sql);

      // Add a new trip to the Trip table in the database
      if($result){
        $insert = true;
        
      }
      else{
          echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
      }
   }
  }


 ?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>iNotes App</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
</head>

<body>
<!--Edit  Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit the Note</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/crud app/crud.php" method="POST">
      <div class="modal-body myModal">
         <input type="hidden" name="snoEdit" id="snoEdit">
          <div class="form-group my-3">
            <label for="titleEdit" class="form-label">Note Title</label>
            <input type="text" class="form-control" id="titleEdit" aria-describedby="titleHelp" name="titleEdit">
          </div>
          <div class="form-group my-3">
            <label for="descriptionEdit">Note Description</label>
            <textarea class="form-control" name="descriptionEdit" id="descriptionEdit" rows="4"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Update Note</button>
        </div>
      </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

 <!-- Navbar  -->
  <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">iNotes</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

   <?php
     if ($insert) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Success</strong> Your note has been submited successfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
     }
   ?>

   <?php
     if ($Update) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Success</strong> Your note has been updated successfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
     }
   ?>

   <?php
     if ($Delete){
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Success</strong> Your note has been updated successfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
     }
   ?>


  <div class="container my-4">
    <h2>Add a note to iNotes</h2>
    <form action="/crud app/crud.php" method="post">
      <div class="form-group my-3">
        <label for="title" class="form-label">Note Title</label>
        <input type="text" class="form-control" id="title" aria-describedby="titleHelp" name="title">
      </div>
      <div class="form-group my-3">
        <label for="description">Note Description</label>
        <textarea class="form-control" name="description" id="description" rows="4"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Add Note</button>
    </form>
  </div>


  <div class="container mx-5 my-4">
      <table class="table" id="myTable">
        <thead>
          <tr>
            <th scope="col">S.No</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
        <?php
          //data select korar query run kora holo
        $sql = "SELECT * FROM `notestable`";
        $result = mysqli_query($conn,$sql);
        $no = 0;
        while ($row = mysqli_fetch_assoc($result)) {
          $no = $no + 1;
           echo "<tr>
           <th scope='row'>".$no."</th>
           <td>".$row['title']  ."</td>
           <td>".$row['description']  ."</td>
           <td>"."<button class='btn btn-sm btn-primary edit' id=".$row['sno'].">Edit</button>"  .  " " .  "<button class='delete btn btn-sm btn-primary' id=d".$row['sno'].">Delete</button> </td>
           </tr>";  
        
        }
     ?>
        </tbody>
    </table>
    
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK"
    crossorigin="anonymous"></script>


    <script>
       $(document).ready( function () {
    $('#myTable').DataTable();
   } );

    </script>

   <!-- Edit notes modal by javascript -->
    <script>
      edit = document.getElementsByClassName("edit");
     Array.from(edit).forEach((element)=>{
       element.addEventListener("click", (e)=>{
         console.log("Edit");
        tr = e.target.parentNode.parentNode;
        title = tr.getElementsByTagName("td")[0].innerText;
        description = tr.getElementsByTagName("td")[1].innerText;
        console.log(title,description);
        titleEdit.value = title;
        descriptionEdit.value = description;
        snoEdit.value = e.target.id;
        console.log(e.target.id);

        $('#editModal').modal('toggle');
       })
     })

     deletes = document.getElementsByClassName("delete");
     Array.from(deletes).forEach((element)=>{
       element.addEventListener("click", (e)=>{
         console.log("delete");
         sno = e.target.id.substr(1);
         console.log(sno);
   
         if (confirm("Are you sure you want to delete this note!")) {
          console.log("yes");
          window.location = `/crud app/crud.php?delete=${sno}`;
         }
        else {
          console.log("no");
        }

       })
     })

    </script>

</body>
</html>