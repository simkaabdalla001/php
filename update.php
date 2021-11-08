
<?php
if (isset($_GET["user_id"])){
    $receivedName =$_GET["user_name"];
    $receivedEmail =$_GET["user_email"];
    $receivedPassword =$_GET["user_password"];
    $receivedId =$_GET["user_id"];

}
?>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
<h1 class="text-info text-centre">Firefox poultry Farm</h1>
<div class="row">
    <div class="col-3"></div>
    <div class="col-6">
    <h3 class="text-info text-centre">updating user</h3>
        <form method="post"action="">

</div>
<form method="post" action="">
    <input value="<?php echo $receivedId;?>" type="hidden" name="id">
    <input value="<?php echo $receivedName;?>" name="x" class="form-control" type="text" placeholder="update name"><br><br>
    <input value="<?php echo $receivedEmail;?>" name="y" class="form-control" type="email" placeholder="update email"><br><br>
    <input value="<?php echo $receivedPassword;?>" name="z" class="form-control" type="password" placeholder="update password"><br><br>
    <input name="btn_reg" class="btn btn-outline-info btn-block" type="submit" value="update"
           <a class="btn btn-outline-success btn-block" href="users.php">Back</a>


</form>
</div>
<div class="col-3"></div>
<div>


</body>
</html>
