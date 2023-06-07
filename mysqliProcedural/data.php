<?php
include("connection.php");


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
    <div class="container">
  <?php
  
  $sql = "select * from std join class on std.class = class.class_id";
  $result = mysqli_query($connection,$sql) or die("query unsuccessful");
  $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
//   $fetch= mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result)>0){
  ?>

<table cellpadding ="7px">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>City</th>
        <th>Class</th>
        <th>Phone Number
        </th>
        <th>Path</th>
    </thead>
<tbody>
    <?php
    foreach($rows  as $row ){
    ?>
    <tr>
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['std_name']?></td>
        <td><?php echo $row['city']?></td>
        <td><?php echo $row['class']?></td>
        <td><?php echo $row['phone_num']?></td>
        <td><?php echo $row['class_name']?></td>
     
        <td>
            <button> <a href="update.php?id=<?php echo $row['id']?>">update</a></button>
            <button><a href="">Delete</a> </button>
        </td>
    </tr>
    <?php
    }
    ?>
</tbody>
</table>
<?php

  }
  ?>
    </div>
    <?php
    if(isset($_GET['id'])){
        $get_id = $_GET['id'];
     $sql = "DELETE FROM std where id = {$get_id}";
     $result = mysqli_query($connection,$sql) or die("connection failed");
     header("Location: http://localhost/learningPHP/mysqliProcedural/update2.php");
    mysqli_close($connection);
    
     };
    ?>
</body>
</html>