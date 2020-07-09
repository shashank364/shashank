<?php include('conn.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>User List</title>
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
          <i class="fa fa-users"></i> USER <span class="text-primary">LIST</span></h1>
          <table class="table table-striped mt-5">
            <thead>
              <tr>
                <th class="text-center">Name</th>
                <th class="text-center">Age</th>
                <th class="text-center">Location</th>
              </tr>
            </thead>
            <tbody>
				<?php 
					$sql='SELECT * FROM `users`';
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
				?>
			</tbody>


              

          </table>
</div>
</body>
</html>