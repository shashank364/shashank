<?php include('conn.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" type = "image/png" href = "download.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Add User</title>
    <link rel = "shortcut icon" type = "image/png" href = "download1.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>
<body>
<nav class="navbar">
            <ul>
                <li><a href="add.php"><h5>Add User</h5></a></li>
                <li><a href="list.php"><h5>List Users</h5></a></li>
                <li><a href="search.php"><h5>Search User</h5></a></li>
              </ul>
            </nav>
<div class="container mt-4">
        <h1 class="display-4 text-center">
          <i class="fa fa-user"></i>  ADD <span class="text-primary">USER</span></h1>
          <div class="container ">
          <form action="" method="POST" id="user">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" id="name" name="name" class="form-control">
            </div>
            <div class="form-group">
              <label for="age">Age</label>
              <input type="text" id="age" name="age" class="form-control">
            </div>
            <div class="form-group">
              <label for="location">Location</label>
              <input type="text" id="location" name="location" class="form-control">
            </div>
            <input type="submit" value="Submit"id="sub" name="adduser" class="btn btn-primary">
          </form>
</div>
</div>
</body>
</html>

<?php 
if(isset($_POST['adduser']))
{   
    $name=mysqli_real_escape_string($conn,$_POST['name']);
    $age=mysqli_real_escape_string($conn,$_POST['age']);
    $location=mysqli_real_escape_string($conn,$_POST['location']);
    if($name==''||$age==''||$location==''){?>
      
      <?php
    }
    else{
      $sql="INSERT INTO `users` (`name`, `age`,`location`) VALUES ('$name', '$age','$location')";  
      $don=mysqli_query($conn, $sql);
    }   
}


?>