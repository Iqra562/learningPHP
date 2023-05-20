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
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="bootstrap.min.css">

</head>
<body>
    <div class="container">
         <form action="" method="post" >
    <!-- <div class="form-group">
 <label for="">Id</label>
<input type="text" name="employeeId" class="form-control">
    </div> -->
    <div class="form-group">
 <label for="">Name</label>
<input type="text" name="employeeName" class="form-control">
    </div>
     <div class="form-group">
 <label for="">Salary</label>
<input type="text" name="employeeSalary" class="form-control">
    </div>
<button type="submit" name="insert">Insert</button>
        </form>
    </div>
    <?php
    if(isset($_POST['insert'])){
        // $employeeId = $_post['employeeId'];
        $employeeName = $_POST['employeeName'];
        $employeeSalary = $_POST['employeeSalary'];
        $query = $pdo->prepare("insert into tbl_employees (employee_Name, employee_Salary) VALUES (:name, :salary)");
        $query->bindParam('name', $employeeName);
        $query->bindParam('salary', $employeeSalary);
        $query->execute();
        echo "Data Inserted Successfully";
    }
    ?>
</body>

</html>