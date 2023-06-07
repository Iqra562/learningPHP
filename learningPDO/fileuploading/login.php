<?php
// session_start();
include("query.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">

</head>
<body>
    <div class="container">
        <form action="" method= "post">
      <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="name" id=""  class="form-control">
        
      </div>
     
      <div class="form-group">
        <label for="">Password</label>
        <input type="text" name="password" id=""  class="form-control">
        
      </div>
      <input type="submit" name="login" id="" value = "login" class="btn btn-primary">
        </form>
    </div>
</body>
</html>