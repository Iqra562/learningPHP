<?php
include("connection.php");
?>
       <?php
if(isset($_POST['update2'])){
 $g_id = ($_POST['s_id']);
 $std_name = $_POST['std_name'];
 $std_city = $_POST['city'];
 $std_class= $_POST['class'];
 $std_phone_num= $_POST['phone_num'];



        $sqlu = "UPDATE std set std_name= '$std_name', city='$std_city', class='$std_class', phone_num= '$std_phone_num' where id ={$g_id}";
$resultu = mysqli_query($connection, $sqlu) or die("query unsuccessful");
header("Location: http://localhost/learningPHP/mysqliProcedural/update2.php");
mysqli_close($connection);
}

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
<form action="" method="post">
      <div class="form-group">
          <label for="">ID</label>
          <input type="text" class="form-control" value="" name="showid">
          <input type="submit" value="update" name="showbtn" class="btn btn-primary">
      </div>
      </div>
      <?php
      if(isset($_POST['showbtn'])){
 $show_id = $_POST['showid'];
 $sql = "Select * from std where id= {$show_id}";
 $result = mysqli_query($connection,$sql) or die("query unsuccessful");
 $row = mysqli_fetch_assoc($result);
 

      
        ?>
      <div class="form-group">
          <label for="">Name</label>
          <input type="hidden" class="form-control" value="<?php echo $row['id']?>" name="s_id" >
          <input type="text" class="form-control" value="<?php echo $row['std_name']?>" name="std_name" >
      </div>
      <div class="form-group">
          <label for="">City</label>
          <input type="text" class="form-control" name="city" value="<?php echo $row['city']?>">
      </div>
      <div class="form-group">
            <label for="">Class</label>
            <?php
             $sqlc = "Select * from class ";
             $resultc = mysqli_query($connection,$sqlc) or die("query unsuccessful");
            ?>
            <select name="class" id="">
                <?php
                while($rowc = mysqli_fetch_assoc($resultc)){
                    $selected = ($row['class'] == $rowc['class_id']) ? "selected" : "";
                    echo "<option {$selected} value='{$rowc['class_id']}'>{$rowc['class_name']}</option>";
            }
                ?>
             
            </select>
        
        </div>
      <div class="form-group">
          <label for="">Phone number</label>
          <input type="text" class="form-control" name="phone_num"  value="<?php echo $row['phone_num']?>">
      </div>
      <input type="submit" value="update" name="update2" class="btn btn-primary">
      <?php
      }
      ?>
      </form>
      
  </div> 
</body>
</html>