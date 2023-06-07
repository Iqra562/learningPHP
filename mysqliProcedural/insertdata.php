<?php
include("save.php");
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
<?php
  
//   $fetch= mysqli_fetch_assoc($result);
    ?>
    <div class="container">
        <form action="
        " method="post">
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" name="std_name">
        </div>
        <div class="form-group">
            <label for="">City</label>
            <input type="text" class="form-control" name="city">
        </div>
        <div class="form-group">
            <label for="">Class</label>
        <select name="class" id="" >
            <?php
            $class = "select * from class ";
            $resultClass = mysqli_query($connection,$class) or die("query unsuccessful");
            $classrows = mysqli_fetch_all($resultClass, MYSQLI_ASSOC);?>
            <option value="" selected disabled >Select class</option>
            <?php
            foreach($classrows as $classrow){
            ?>
            <option value="<?php echo $classrow['class_id']?>"><?php echo $classrow['class_name']?></option>
            <?php
            }
            ?>
        </select>
        </div>
        <div class="form-group">
            <label for="">Phone Number</label>
            <input type="text" class="form-control" name="phone_num">
        </div>
    <input type="submit" value="insert" class="btn btn-primary" name="insert">
    </form>
    </div>
</body>
</html>