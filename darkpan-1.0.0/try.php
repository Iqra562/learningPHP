<?php
include("./php/connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Document</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <?php
    if(isset($_GET['id'])){
        $emp_id = $_GET['id'];
          $query= $pdo->prepare("select * from  category where category_id = :e_id ");
          $query->bindParam(':e_id', $emp_id);
          $query->execute();
           $result = $query->fetch(PDO::FETCH_ASSOC);
        //    var_dump($result);
    }
    ?>
    <div class="container">
         <form method="post" action="">
    <div class="form-group">
 <label for="">Id</label>
<input type="text"  class="form-control" value="<?php echo $result['category_id']?>" name="employeeId">
    </div>
    <div class="form-group">
 <label for="">Name</label>
<input class="form-control" type="text" value="<?php echo $result['category_name']?>" name="employeeName">
    </div>
 
<button type="submit" name="update">Update</button>
        </form>
    </div>
  
</body>
</html>