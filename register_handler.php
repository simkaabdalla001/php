<?php
if (isset($_POST["btn_reg"])){
$jina = $_POST["x"];
$arafa = $_POST["y"];
$siri = $_POST["z"];
require_once "connection.php";

$insertQuery = "INSERT INTO `users`(`id`, `jina`, `arafa`, `siri`) VALUES (null,'$jina','$arafa','$siri')";

$save = mysqli_query($connection,$insertQuery);
if (isset($save)){
    echo "User registered successfully";
}else{
    echo "User registration failed";
}

}
