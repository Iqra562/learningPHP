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
  $fetch= mysqli_fetch_assoc($result);
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
    foreach($fetch as $row){
    ?>
    <tr>
        <td><?php echo $row['id']?></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>
            <button></button>
            <button> </button>
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
</body>
</html>