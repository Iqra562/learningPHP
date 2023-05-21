<?php
$db_name ="mysql:host=localhost;dbname=info";
$username = "root";
$password = "";
$conn = new PDO($db_name, $username ,$password);

$sql = $conn->query("select * from tbl_employees");
while($row = $sql->fetch()){
    echo '<pre>';
    print_r($row);
    echo '</pre>';
}


?>