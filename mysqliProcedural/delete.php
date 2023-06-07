<?php
include("connection.php");
 if(isset($_GET['id'])){
    $get_id = $_GET['id'];
 $sql = "DELETE FROM std where id = {$get_id}";
 $result = mysqli_query($connection,$sql) or die("connection failed");
 header("Location: http://localhost/learningPHP/mysqliProcedural/update2.php");
mysqli_close($connection);

 };
?>

