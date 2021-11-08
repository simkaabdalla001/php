<?php
if (isset($_GET["user_id"])){
    $receivedid = $_GET["user_id"];
    ////To delete, coonect to the database
    require_once "connection.php";
    ///Prepare the delete query
    $deleteQuery = "delete from users where id=$receivedid";
    ////complete  the  deletion using mysqli query function
    $delete = mysqli_query($connection,$deleteQuery);
    ////check if the deletion was successful
    if (isset($delete)){
        //Redirect to users.php file to see if the user was actually deleted
        header("location:users.php ");

    } else{
        echo "Deleting user failed";
    }
}
