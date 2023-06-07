<?php
include("connection.php");
if(isset($_POST['insert'])){

 $std_name = $_POST['std_name'];
 $std_city = $_POST['city'];
 $std_class= $_POST['class'];
 $std_phone_num= $_POST['phone_num'];


$sql = "INSERT INTO std (std_name, city, class, phone_num) values ('$std_name', '$std_city', '$std_class', '$std_phone_num')";
$result = mysqli_query($connection, $sql) or die("query unsuccessful");
header("Location: http://localhost/learningPHP/mysqliProcedural/insertdata.php");
mysqli_close($connection);
}

?>
