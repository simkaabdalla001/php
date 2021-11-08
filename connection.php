<?php
$connection = mysqli_connect("localhost","root","","firefox_poultry");
if (!isset($connection)){
    die("Connection to DB failed");
}