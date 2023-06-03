<?php
include("connections.php");
session_start();

if(isset($_POST['login'])){
    $name = $_POST['name'];
    $password = $_POST['password'];
   $query = $pdo->prepare("select * from user where name = :name  && password = :pass");
   $query->bindParam('name', $name );
   $query->bindParam('pass', $password);
//   $query->execute();
  $_SESSION['name'] = $name;
  $_SESSION['pass'] = $password;
  echo($name);
//   $query->execute();
if( $_SESSION['name'] === $name &&   $_SESSION['pass'] === $password){
    echo ("<script>alert('login successfully')</script>");
    
}
}


?>