<?php
$db_name ="mysql:host=localhost;dbname=info";
$username = "root";
$password = "";
$conn = new PDO($db_name, $username ,$password);

$sql = $conn->query("select * from student");
while($row = $sql->fetch(PDO::FETCH_OBJ)){
    echo "{$row->id} - {$row->name}";
    echo "<br>";
    // echo "{$row['employee_ID']} - {$row['employee_Name']} - {$row['employee_Salary']}";
    // echo "<br>";
    // echo '<pre>';
    // print_r($row);
    // echo '</pre>';
} 


?>