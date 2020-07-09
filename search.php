<?php include('conn.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <title>Search User</title>
    <link rel="stylesheet" href="style.css">
    <link rel = "shortcut icon" type = "image/png" href = "download1.png">
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
          <i class="fa fa-search"></i> SEARCH <span class="text-primary">USER</span></h1>
          <form action="" method="POST" id="user">
            <div class="form-group">
              <label for="name"><h5>Enter Location</h5></label>
              <input type="text" id="name" name="location" class="form-control">
            </div>
              <input type="submit" value="Submit"id="sub" name="searchuser" class="btn btn-primary  ">
          </form>
          <table class="table table-striped mt-5">
            <thead>
              <tr>
                <th class="text-center">Name</th>
                <th class="text-center">Age</th>
                <th class="text-center">Location</th>
              </tr>
            </thead>
            <tbody>
				<?php if(isset($_POST['searchuser'])){
                    $loc=mysqli_real_escape_string($conn,$_POST['location']);
                    $sql="SELECT * FROM `users` where location='$loc'";
                    $query=mysqli_query($conn,$sql);
                    $iterate=0;
					while($row=$query->fetch_array()){
						?>
						<tr id="users">
							<td class="text-center"><?php echo $row['name']; ?></td>
                            <td class="text-center"><?php echo $row['age']; ?></td>
                            <td class="text-center"><?php echo $row['location']; ?></td>
						</tr>
						<?php
						$iterate++;
                    }
                }
                
				?>
			</tbody>
</div>  
</body>
</html>