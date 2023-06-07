<?php 
include("connections.php");

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
          $query= $pdo->prepare("select * from  tbl_employees where employee_ID = :e_id ");
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
<input type="text"  class="form-control" value="<?php echo $result['employee_ID']?>" name="employeeId">
    </div>
    <div class="form-group">
 <label for="">Name</label>
<input class="form-control" type="text" value="<?php echo $result['employee_Name']?>" name="employeeName">
    </div>
     <div class="form-group">
 <label for="">Salary</label>
<input  class="form-control" type="text"  value="<?php echo $result['employee_Salary']?>"  name="employeeSalary">
    </div>
<button type="submit" name="update">Update</button>
        </form>
    </div>
    <?php
    if(isset($_POST['update'])){
        $e_name = $_POST['employeeName'];
        $e_salary = $_POST['employeeSalary'];
        $query = $pdo->prepare("update tbl_employees set employee_Name = :name,employee_Salary=:salary where employee_ID = :_id");
        $query->bindParam('name', $e_name);
        $query->bindParam('_id', $emp_id);
        $query->bindParam('salary', $e_salary);
        $query->execute();
        echo 'data updated successfully';
         
    }
    
    ?>
</body>
</html>