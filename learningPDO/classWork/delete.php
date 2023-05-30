<?php 
include("connections.php")

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_GET['id'])){
        $f_id = $_GET['id'];
        $query =$pdo->prepare( "delete FROM tbl_employees  WHERE employee_ID = :id");
         $query->bindParam("id",$f_id);
         $query->execute();
         echo "executeeed";
    }
    ?>
</body>
</html>