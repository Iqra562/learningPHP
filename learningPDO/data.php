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
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <div class="contianer">
        <?php
        $query = $pdo->query("select * from tbl_employees");
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $value) {
            ?>
            <table class="table table-striped" style="width:'100%'">
                <tr>
                    <td><?php
                    echo $value['employee_ID']?></td>
                    <td><?php
                    echo $value['employee_Name']?></td>
                    <td><?php
                    echo $value['employee_Salary']?></td>
                    <td><button class="btn btn-dark " style="color:'white'"><a href="update.php?id<?php echo $value['employee_ID']
                    ?>">Update</a> </button></td>
                </tr>
            </table>
            <?php
        }
        
        ?>
    </div>
</body>
</html>