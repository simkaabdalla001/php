<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
</head>
<body>
<a class="btn btn-outline secondary" href="register.php">Add users</a>
<h1 class="text-info text-centre">Poultry Farms Users</h1>
<table class="table table-hover table-dark">

    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Delete</th>
        <th>Update</th>
    </tr>
    <?php

          ///Start by connecting to the database
    require_once "connection.php";
       ////Prepare the select query
    $selectQuery ="SELECT * FROM users WHERE 1 ";
    $users= mysqli_query($connection,$selectQuery);
    foreach ($users as $person){
        $userName =$person["jina"];
        $userEmail =$person["arafa"];
        $userPassword =$person["siri"];
        $userid =$person["id"];
        echo "
            <tr>
              <td>$userName</td>   
              <td>$userEmail</td>
              <td><a class='btn btn-danger' href='delete_handler.php?user_id=$userid'>Delete<a></td>
              <td><a class='bn btn-info' href='update.php?user_name=$userName&user_email=$userEmail&user_password=$userPassword&user_id=$userid'>Update</a></td>
              
.            </tr>";
                                 
        
    }
    ?>
</table>

</body>
</html>
