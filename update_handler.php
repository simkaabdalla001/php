<?php
if (isset($_POST["btn_update"])){
    $userId = $_POST["id"];
    $updatedName = $_POST["x"];
    $updatedEmail = $_POST["y"];
    $updatedPassword = $_POST["z"];
    //Connect to the database
    require_once "connection.php";
    //Prepare the update query
    $upatedQuery = "UPDATE `users` SET `jina`='$updatedName',`arafa`='$updatedEmail',`siri`='$updatedPassword' WHERE id='$userId'";

    //Finally execute the update using the mysqli query function
    $update = mysqli_query($connection,$upatedQuery);
    if (isset($update)){
        header("location:users.php");

    }else{
        echo "Updating failed";
    }
}