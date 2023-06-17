<?php
include("query.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap.min.css">
    <title>Insert Product</title>
</head>
<body>
    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
         
          
            <div class="form-group">
                <label for="">Product Image</label>
                <input type="file" name="p_image" id="" class="form-control">
            </div>
            
            <input type="submit" name="addPro" id="" value = "Add Product" class="btn btn-info">
        </form>
    </div>
</body>
</html>